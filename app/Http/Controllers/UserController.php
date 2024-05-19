<?php

namespace App\Http\Controllers;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;
use App\Http\Requests\StoreUserRequest;



use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::with(['roles'])->get();

        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$users = User::with(['roles'])->get();
        $roles = Role::pluck('title', 'id');
        return view('admin.users.create',compact('roles'));
    }
    public function store(StoreUserRequest $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }
    public function edit(User $user)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::pluck('title', 'id');
        $user->load('roles');
        return view('admin.users.edit', compact('roles', 'user'));
    }
    
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
    
        return redirect()->route('admin.users.index');
    }
    
    
    public function edit2() {
        return view('users.profile')->with('user'. auth()->user());
    }

    /*public function update2( UpdateProfilRequest $request) {
        //return view('users.edit')->with('user'. auth()->user());
        $user = auth()->user();

        $user ->update([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> $request->password
        ]);

        session()->Flash('success','User upaqted Successfully');
        
        return redirect()->back();
    }*/
    /*public function update3(Request $request, User $user)
    {
        $user = auth()->user();
        $this->validate($request, [
            'name' => '',
            'email' => '',
            'password' => ''
        ]);

        $user->user_id = $request->user()->id;
        $user->user->name = $request->input('name');
        $user->user->email = $request->input('email');
        $user->user->password = $request->input('password');
        

        return redirect('/profile')->with('success', 'Profile Updated');
    }
*/
    /*public function showUserProfile()
    {
        // Récupérer l'utilisateur authentifié
        $user = auth()->user();

        // Récupérer le mot de passe chiffré
        $encryptedPassword = $user->getAuthPassword();

        return view('profile', compact('encryptedPassword'));
        }*/

        public function showUserProfile()
        {
            // Get the authenticated user
            $user = auth()->user();
        
            return view('users.profile', compact('user'));
        }
        public function updateProfile(Request $request)
{
    $user = auth()->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('profile')->with('success', 'Profile updated successfully.');
}

}


<!--
/*< ?php? >*/

/*
namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class EmailVerificationNotificationController extends Controller
{
    /**
     * Send the email verification notification.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    
     
     /*public function __invoke(Request $request){
    if ($request->user()->hasVerifiedEmail()) {
        return response()->json(['message' => 'Email already verified'], 200);
    }

    $request->user()->sendEmailVerificationNotification();

    if ($request->wantsJson()) {
        return response()->json(['message' => 'Email verification link sent to your email address'], 202);
    }

    return back()->with('resent', true);
    }

}

*/
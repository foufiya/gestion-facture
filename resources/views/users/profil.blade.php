<?php
use App\Http\Controllers\usersController;
?>
@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Profile</h4>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection

@section('content')
<div class="card">

    <div class="card-header"><h5>Profile</h5></div>

    <div class="card-body">
        <form action="{{ route('users.update') }}" method="POST" >
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}" >
            </div>

            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" name="email"  id="email"  class="form-control" value="{{ Auth::user()->email }}" >
            </div>
			<div class="form-group">
				<label for="password">
					<label>Mot de passe</label></br>
					<label style="position: relative;" >
						<input type="password" name="password"  id="password"  class="form-control"  >
						<div class="password-icon">
							<i data-feather="eye"></i>
							<i data-feather="eye-off"></i>
				  	    </div>
					</label>
                
				</label>
            
				  
				  <!-- ICON SCRIPT -->
				  <script src="https://unpkg.com/feather-icons"></script>
				  <script>
				  feather.replace();
				  </script>
			</div>

            <button type="submit" class="btn btn-success"> Editer Profile</button>
            <button class="btn btn-outline-success btn-sm"
													data-name="{{ $user->name }}" data-use_id="{{ $user->id }}"
													
													data-email="{{ $user->email }}" data-password="{{ $user->password }}"  data-toggle="modal"
													data-target="#edit_user">Modifier</button>

        </form>
    </div>        

</div>

<!-- edit -->
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modification du user</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form action='{{route('users.update2')}}' method="post">
			{{ method_field('patch') }}
			{{ csrf_field() }}
			<div class="modal-body">

				<div class="form-group">
					<label for="title">  Username </label>

					<input type="hidden" class="form-control" name="use_id" id="use_id" value="">

					<input type="text" class="form-control" name="name" id="name">
				</div>

				<div class="form-group">
					<label for="email">email :</label>
					<textarea name="email" cols="20" rows="5" id='email'
						class="form-control"></textarea>
				</div>

			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary"> Modifier</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
				<tr>
					<td>
						<button class="btn btn-outline-success btn-sm"
						data-name="{{ Auth::user()->name }}" data-use_id="{{ Auth::user()->id  }}"
						
						data-email="{{ Auth::user()->email  }}" data-toggle="modal"
						data-target="#edit_user">Modifier</button>

					<button class="btn btn-outline-danger btn-sm " data-use_id="{{ Auth::user()->id }}"
						data-user_name="{{ Auth::user()->name  }}" data-toggle="modal"
						data-target="#modaldemo9">Supprimer</button>
					</td>
				</tr>	
			</div>
		</form>
	</div>
</div>
</div>



<script>
	const eye = document.querySelector(".feather-eye");
	const eyeoff = document.querySelector(".feather-eye-off");
	const passwordField = document.querySelector("input[type=password]");
</script>

<!--Détectons maintenant le clic sur l'oeil et sur l'oeil barré.-->
<script>
	eye.addEventListener("click", () => {
	eye.style.display = "none";
	eyeoff.style.display = "block";
	passwordField.type = "text";
	});

	eyeoff.addEventListener("click", () => {
	eyeoff.style.display = "none";
	eye.style.display = "block";
	passwordField.type = "password";
	});

</script>

@endsection
<style>
label input {
  font-size: 1em;
  color: #f9f9f9;
  background: transparent;
  padding: 1rem 1.2rem;
  width: 350px;
  border-radius: 5px;
  border: 2px solid #7a7a7a;
  transition: all 0.2s;
}
label .password-icon {
  display: flex;
  align-items: center;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  width: 20px;
  color: #0008ff;
  transition: all 0.2s;
}
label .password-icon:hover {
  cursor: pointer;
  color: #ff4754;
}

label .password-icon .feather-eye-off {
	 
  display: none;
}
</style>


@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>

<script>
	$('#edit_user').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var name = button.data('name')
		var use_id = button.data('use_id')
		
		var email = button.data('email')
		var password = button.data('password')
		var modal = $(this)
		modal.find('.modal-body #name').val(name);
		modal.find('.modal-body #email').val(email);
		modal.find('.modal-body #password').val(password);

		modal.find('.modal-body #use_id').val(use_id);
	})


	$('#modaldemo9').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var use_id = button.data('use_id')
		var name = button.data('name')
		
		var email = button.data('email')
		var password = button.data('password')
		var modal = $(this)

		modal.find('.modal-body #use_id').val(use_id);
		modal.find('.modal-body #name').val(name);
	})

</script>

@endsection
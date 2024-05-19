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

    <div class="card-header"><h5>My Profile</h5></div>

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
						<input type="password" name="password"  id="password"  class="form-control" value=" {{ $encryptedPassword }}"  >
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

        </form>
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



@endsection
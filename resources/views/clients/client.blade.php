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
							<h4 class="content-title mb-0 my-auto">Informations</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ clients</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>&nbsp; Ajouter un client </button><br><br>
                                </div>
							
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">ID </th>
												<th class="wd-15p border-bottom-0"> Nom de Client</th>
                                                <th class="wd-15p border-bottom-0"> Prenom</th>
												
												<th class="wd-15p border-bottom-0">Email de Client</th>
												<th class="wd-15p border-bottom-0">Adresse de Client</th>
												<th class="wd-20p border-bottom-0">Telephone de Client </th>
												<th class="wd-15p border-bottom-0">Compte Bancaire</th>

												<th class="wd-15p border-bottom-0">Operation</th>
												<var></var>
											</tr>
										</thead>
										<tbody>
											<php 
											 $i =0
											?>
											@foreach ($clients as $client)
												
											
											<tr>
												
												<td> {{ $client->id }} </td>
												<td> {{$client->name_client}}</td>
												<td> {{$client->clientprenom}}</td>
												<td> {{$client->clientemail}}</td>
												<td> {{$client->clientaddress}}</td>
                                                <td> {{$client->clienttel}}</td>
												<td> {{$client->client_CompteBancaire}}</td>
												<td>
													<button class="btn btn-outline-success btn-sm"
													data-name="{{$client->name_client}}" data-cli_id="{{$client->id}}"
													data-clientemail="{{$client->clientemail}}" data-clientaddress="{{$client->clientaddress}}"
													data-clientprenom="{{ $client->clientprenom }}" data-clienttel="{{$client->clienttel}}"
													data-client_CompteBancaire="{{$client->client_CompteBancaire}}"  data-toggle="modal"
													data-target="#edit_Client">Modifier</button>
	
												<button class="btn btn-outline-danger btn-sm " data-cli_id="{{ $client->id }}"
													data-name_client="{{ $client->name_client }}" data-toggle="modal"
													data-target="#modaldemo9">Supprimer</button>
												</td>
												
											</tr>
											@endforeach
											
										</tbody>
										
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un Client</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <form action="{{route('clients.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">  Nom Client </label>
                                            <input type="text" class="form-control" id="name_client" name="name_client" required >

                                        </div>

										<div class="form-group">
                                            <label for="exampleInputEmail1">  Prenom </label>
                                            <input type="text" class="form-control" id="clientprenom" name="clientprenom" required >

                                        </div>

										<div class="form-group">
                                            <label for="exampleInputEmail1">  Email  </label>
                                            <input type="email" class="form-control" id="clientemail" name="clientemail" required >

                                        </div>

										<div class="form-group">
                                            <label for="exampleInputEmail1">  Adresse de Client </label>
                                            <input type="text" class="form-control" id="clientaddress" name="clientaddress" required >

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Numero de Telephone: </label>
                                            <input type="text" class="form-control" id="clienttel" name="clienttel" required >

                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1om"> Compte Bancaire</label>
                                            <textarea class="form-control" id="client_CompteBancaire" name="client_CompteBancaire" rows="3"></textarea>
                                        </div>

							

                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Ajouter</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					  <!-- edit -->
					  <div class="modal fade" id="edit_Client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					  aria-hidden="true">
					  <div class="modal-dialog" role="document">
						  <div class="modal-content">
							  <div class="modal-header">
								  <h5 class="modal-title" id="exampleModalLabel">Modification de Client</h5>
								  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
								  </button>
							  </div>
							  <form action='{{route('clients.update')}}' method="post">
								  {{ method_field('patch') }}
								  {{ csrf_field() }}
								  <div class="modal-body">
		  
									  <div class="form-group">
										  <label for="title"> Nom de client </label>
		  
										  <input type="hidden" class="form-control" name="cli_id" id="cli_id" value="">
		  
										  <input type="text" class="form-control" name="name_client" id="name_client" >
									  </div>
		  
									  <div class="form-group">
										  <label for="des">Prenom:</label>
										  <input type="text" name="clientprenom" cols="20" rows="5" id='clientprenom'
											  class="form-control">
									  </div>
									  <div class="form-group">
										<label for="des">Email:</label>
										<input type="email" name="clientemail" cols="20" rows="5" id='clientemail'
											class="form-control">
									</div>
									<div class="form-group">
										<label for="des"> Adresse de Client:</label>
										<input type="text" name="clientaddress" cols="20" rows="5" id='clientaddress'
											class="form-control">
									</div>
                                    <div class="form-group">
										<label for="des">Numero de Telephone:</label>
										<input type="text" name="clienttel" cols="20" rows="5" id='clienttel'
											class="form-control">
									</div>
									<div class="form-group">
										<label for="des"> Compte Bancaire:</label>
										<input type="text" name="client_CompteBancaire" cols="20" rows="5" id='client_CompteBancaire'
											class="form-control">
									</div>
		  
								  </div>
								  <div class="modal-footer">
									  <button type="submit" class="btn btn-primary"> Modifier</button>
									  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
								  </div>
							  </form>
						  </div>
					  </div>
				  </div>
				  <!-- delete -->
				  <div class="modal fade" id="modaldemo9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				  aria-hidden="true">
				  <div class="modal-dialog" role="document">
					  <div class="modal-content">
						  <div class="modal-header">
							  <h5 class="modal-title"> La Suppression du client</h5>
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
							  </button>
						  </div>
						  <form action="{{route('clients.destroy')}}" method="post">
							  {{ method_field('delete') }}
							  {{ csrf_field() }}
							  <div class="modal-body">
								  <p>   ? êtes-vous sûr de la Suppression  </p><br>
								  <input type="hidden" name="cli_id" id="cli_id" value="">
								  <input class="form-control" name="name_client" id="name_client" type="text" readonly>
								  
							  </div>
							  <div class="modal-footer">
								  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
								  <button type="submit" class="btn btn-danger">Supprimer</button>
							  </div>
						  </form>
					  </div>
				  </div>
			  </div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
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
	$('#edit_Client').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var name_client = button.data('name')
		var cli_id = button.data('cli_id')
		var clientprenom = button.data('clientprenom')
		var clientemail = button.data('clientemail')
		var clientaddress = button.data('clientaddress')
       var clienttel = button.data('clienttel')
		var client_CompteBancaire = button.data('client_CompteBancaire')
		var modal = $(this)
		modal.find('.modal-body #name_client').val(name_client);
		modal.find('.modal-body #clientprenom').val(clientprenom);
		modal.find('.modal-body #clientemail').val(clientemail);
		modal.find('.modal-body #clientaddress').val(clientaddress);
       modal.find('.modal-body #clienttel').val(clienttel);
		modal.find('.modal-body #client_CompteBancaire').val(client_CompteBancaire);

		modal.find('.modal-body #cli_id').val(cli_id);
	})


	$('#modaldemo9').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var cli_id = button.data('cli_id')
		var name_client = button.data('name_client')
		//var clientprenom = button.data('clientprenom')
		//var clientemail = button.data('clientemail')
		//var clientaddress = button.data('clientaddress')
       // var clienttel = button.data('clienttel')
        //var client_CompteBancaire = button.data('client_CompteBancaire')
		var modal = $(this)

		modal.find('.modal-body #cli_id').val(cli_id);
		modal.find('.modal-body #name_client').val(name_client);
	})

</script>

@endsection
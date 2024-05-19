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
							<h4 class="content-title mb-0 my-auto">Informations</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Fournisseurs</span>
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
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>&nbsp; Ajouter un entreprise </button><br><br>
                                </div>
							
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">ID </th>
												<th class="wd-15p border-bottom-0"> Nom de Fournisseur</th>
												<th class="wd-20p border-bottom-0">Telephone  </th>
												<th class="wd-15p border-bottom-0">Email de Fournisseur</th>
												<th class="wd-15p border-bottom-0">Adresse de Fournisseur</th>
												<th class="wd-15p border-bottom-0">Compte Bancaire </th>

												<th class="wd-15p border-bottom-0">Operation</th>
												<var></var>
											</tr>
										</thead>
										<tbody>
											<php 
											 $i =0
											?>
											@foreach ($entreprises as $entreprise)
												
											
											<tr>
												
												<td> {{ $entreprise->id }} </td>
												<td> {{$entreprise->company_name}}</td>
												<td> {{$entreprise->company_tel}}</td>
												<td> {{$entreprise->company_email}}</td>
												<td> {{$entreprise->company_address}}</td>
												<td> {{$entreprise->company_CompteBancaire}}</td>
												<td>
													<button class="btn btn-outline-success btn-sm"
													data-name="{{$entreprise->company_name}}" data-ent_id="{{ $entreprise->id }}"
													
													data-company_tel="{{ $entreprise->company_tel }}" data-company_email="{{ $entreprise->company_email }}"
													data-company_address="{{ $entreprise->company_address }}" data-company_CompteBancaire="{{ $entreprise->company_CompteBancaire }}" 
													data-target="#edit_Client" data-toggle="modal">Modifier</button>
	
												<button class="btn btn-outline-danger btn-sm " data-ent_id="{{ $entreprise->id }}"
													data-company_name="{{ $entreprise->company_name }}" data-toggle="modal"
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
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un Fournisseur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <form action="{{route('entreprises.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">  Nom de Fournisseur </label>
                                            <input type="text" class="form-control" id="company_name" name="company_name" required >

                                        </div>

										<div class="form-group">
                                            <label for="exampleInputEmail1">  Telephone  </label>
                                            <input type="text" class="form-control" id="company_tel" name="company_tel" required >

                                        </div>

										<div class="form-group">
                                            <label for="exampleInputEmail1">  Email de Fournisseur </label>
                                            <input type="email" class="form-control" id="company_email" name="company_email" required >

                                        </div>

										<div class="form-group">
                                            <label for="exampleInputEmail1">  Adresse  </label>
                                            <input type="text" class="form-control" id="company_address" name="company_address" required >

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1om"> Compte Bancaire</label>
                                            <textarea class="form-control" id="company_CompteBancaire" name="company_CompteBancaire" rows="3"></textarea>
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
								  <h5 class="modal-title" id="exampleModalLabel">Modification de Fournisseur</h5>
								  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
								  </button>
							  </div>
							  <form action='{{route('entreprises.update')}}' method="post">
								  {{ method_field('patch') }}
								  {{ csrf_field() }}
								  <div class="modal-body">
		  
									  <div class="form-group">
										  <label for="title"> Nom de Fournisseur </label>
		  
										  <input type="hidden" class="form-control" name="ent_id" id="ent_id" value="">
		  
										  <input type="text" class="form-control" name="company_name" id="company_name">
									  </div>
		  
									  <div class="form-group">
										  <label for="des">Numero de telephone :</label>
										  <input type="text" name="company_tel" cols="20" rows="5" id='company_tel'
											  class="form-control">
									  </div>
									  <div class="form-group">
										<label for="des"> Email:</label>
										<input type="email" name="company_email" cols="20" rows="5" id='company_email'
											class="form-control">
									</div>
									<div class="form-group">
										<label for="des"> Address:</label>
										<input type="text" name="company_address" cols="20" rows="5" id='company_address'
											class="form-control">
									</div>
									<div class="form-group">
										<label for="compteBancaire"> Compte Bancaire:</label>
										<input type="text" name="company_CompteBancaire" cols="20" rows="5" id='company_CompteBancaire'
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
							  <h5 class="modal-title"> La Supprission d'un Fournisseur</h5>
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
							  </button>
						  </div>
						  <form action="{{route('entreprises.destroy')}}" method="post">
							  {{ method_field('delete') }}
							  {{ csrf_field() }}
							  <div class="modal-body">
								  <p>   ? êtes-vous sûr de la Suppression  </p><br>
								  <input type="hidden" name="ent_id" id="ent_id" value="">
								  <input class="form-control" name="company_name" id="company_name" type="text" readonly>
								  
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
		var company_name = button.data('company_name')
		var ent_id = button.data('ent_id')
		var company_tel = button.data('company_tel')
		var company_email = button.data('company_email')
		var company_address = button.data('company_address')
		var company_CompteBancaire = button.data('company_CompteBancaire')
		var modal = $(this)
		modal.find('.modal-body #company_name').val(company_name);
		modal.find('.modal-body #company_tel').val(company_tel);
		modal.find('.modal-body #company_email').val(company_email);
		modal.find('.modal-body #company_address').val(company_address);
		modal.find('.modal-body #company_CompteBancaire').val(company_CompteBancaire);

		modal.find('.modal-body #ent_id').val(ent_id);
	})


	$('#modaldemo9').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var ent_id = button.data('ent_id')
		var company_name = button.data('company_name')
		//var company_tel = button.data('company_tel')
		//var company_email = button.data('company_email')
		//var company_address = button.data('company_address')
		var modal = $(this)

		modal.find('.modal-body #ent_id').val(ent_id);
		modal.find('.modal-body #company_name').val(company_name);
	})

</script>

@endsection
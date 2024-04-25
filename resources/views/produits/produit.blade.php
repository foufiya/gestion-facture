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
							<h4 class="content-title mb-0 my-auto">Paramétres</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Produits</span>
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
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>&nbsp; Ajouter un Produit </button><br><br>
                                </div>
							
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">ID </th>
												<th class="wd-15p border-bottom-0"> Nom produit</th>
												<th class="wd-20p border-bottom-0">description</th>

												<th class="wd-15p border-bottom-0">Operation</th>
												<var></var>
											</tr>
										</thead>
										<tbody>
											<php 
											 $i =0
											?>
											@foreach ($produits as $produit)
												
											
											<tr>
												
												<td> {{ $produit->id }} </td>
												<td>{{$produit->nom_produit}}</td>
												<td> {{$produit->description}}</td>
												<td>
													<button class="btn btn-outline-success btn-sm"
													data-name="{{ $produit->nom_produit }}" data-pro_id="{{ $produit->id }}"
													
													data-description="{{ $produit->description }}" data-toggle="modal"
													data-target="#edit_Product">Modifier</button>
	
												<button class="btn btn-outline-danger btn-sm " data-pro_id="{{ $produit->id }}"
													data-product_name="{{ $produit->nom_produit }}" data-toggle="modal"
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
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un Produit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <form action="{{route('produits.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">  Nom Produit </label>
                                            <input type="text" class="form-control" id="Product_name" name="Product_name" required >

                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
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
					  <div class="modal fade" id="edit_Product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					  aria-hidden="true">
					  <div class="modal-dialog" role="document">
						  <div class="modal-content">
							  <div class="modal-header">
								  <h5 class="modal-title" id="exampleModalLabel">Modification du Produit</h5>
								  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
								  </button>
							  </div>
							  <form action='{{route('produits.update')}}' method="post">
								  {{ method_field('patch') }}
								  {{ csrf_field() }}
								  <div class="modal-body">
		  
									  <div class="form-group">
										  <label for="title"> Nom du Produit </label>
		  
										  <input type="hidden" class="form-control" name="pro_id" id="pro_id" value="">
		  
										  <input type="text" class="form-control" name="Product_name" id="Product_name">
									  </div>
		  
									  <div class="form-group">
										  <label for="des">Description :</label>
										  <textarea name="description" cols="20" rows="5" id='description'
											  class="form-control"></textarea>
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
							  <h5 class="modal-title"> La Supprission du Produit</h5>
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
							  </button>
						  </div>
						  <form action="{{route('produit.destroy')}}" method="post">
							  {{ method_field('delete') }}
							  {{ csrf_field() }}
							  <div class="modal-body">
								  <p>   ? êtes-vous sûr de la Supprission  </p><br>
								  <input type="hidden" name="pro_id" id="pro_id" value="">
								  <input class="form-control" name="product_name" id="product_name" type="text" readonly>
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
	$('#edit_Product').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var Product_name = button.data('name')
		var pro_id = button.data('pro_id')
		var description = button.data('description')
		var modal = $(this)
		modal.find('.modal-body #Product_name').val(Product_name);
		modal.find('.modal-body #description').val(description);
		modal.find('.modal-body #pro_id').val(pro_id);
	})


	$('#modaldemo9').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var pro_id = button.data('pro_id')
		var product_name = button.data('product_name')
		var modal = $(this)

		modal.find('.modal-body #pro_id').val(pro_id);
		modal.find('.modal-body #product_name').val(product_name);
	})

</script>

@endsection
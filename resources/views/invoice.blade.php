@extends('layouts.master')
@section("title")
gestion-Facture
@stop
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
							<h4 class="content-title mb-0 my-auto">Factures</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Liste des factures</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				
						<!--/div-->
	
						<!--div-->
					
					
					<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<!-- Button trigger modal -->
								<a href="/invoice"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>&nbsp; Ajouter une Facture </button><br><br></a>
								
								
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">TABLE DE FACTURE</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">ID </th>
												<th class="wd-15p border-bottom-0">Num Facture</th>
												<th class="wd-15p border-bottom-0">Date Facture</th>
												<th class="wd-15p border-bottom-0">Nom Entreprise</th>
												<th class="wd-20p border-bottom-0">adresse Entreprise</th>
												<th class="wd-15p border-bottom-0">telephone Entreprise</th>
												<th class="wd-15p border-bottom-0">Email Entreprise</th>
												<th class="wd-10p border-bottom-0">Nom Client</th>
												<th class="wd-10p border-bottom-0">Prenom Client</th>
												<th class="wd-25p border-bottom-0">adresse Client</th>
												<th class="wd-25p border-bottom-0">telephone Client</th>
												<th class="wd-25p border-bottom-0">Email Client</th>
												<th class="wd-25p border-bottom-0">Etat de paiement</th>
												<th class="wd-25p border-bottom-0">Nom du Produit</th>
												<th class="wd-25p border-bottom-0">Prix Produit</th>
												<th class="wd-25p border-bottom-0">La Valeur Ajouteé </th>
												<th class="wd-25p border-bottom-0">Montant Total</th>
												<th class="wd-25p border-bottom-0">Operation</th>
												
												
												<var></var>
											</tr>
										</thead>
										<tbody>
											<@php
													$i=0;
												@endphp
											@foreach ($factures as $facture)
												<php $i++;
												?>
											
											<tr>
												<td>{{$i}}</td>
												<td>{{$facture->numero_facture}}</td>
												<td> {{$facture->date_facturation}}</td>
												<td>{{$facture->entreprise_nom }}</td>
												<td>{{ $facture->entreprise_adresse}}</td>
												<td>{{ $facture->entreprise_tel}}</td>
												<td>{{$facture->entreprise_email}}</td>
												<td>{{$facture->client_nom}}</td>
												<td>{{$facture->client_prenom}}</td>
												<td>{{$facture->client_adresse}}</td>
												<td>{{$facture->client_tel}}</td>
												<td>{{$facture->client_email}}</td>
												<td>{{$facture->Etat}}</td>
												<td>{{$facture->nom_produit}}</td>
												<td>{{$facture->prix}}</td>
												<td>{{$facture->tva}}</td>
												<td>{{$facture->montant_total}}</td>
												<td>
													<td>
														<button class="btn btn-outline-success btn-sm"
														 data-pro_id="{{ $facture->id }}"
														
														 data-toggle="modal"
														data-target="#edit_Product">Modifier &nbsp; &nbsp;</button>
		
													<button class="btn btn-outline-danger btn-sm " data-pro_id="{{ $facture->id }}"
														data-toggle="modal"
														data-target="#modaldemo9">Supprimer</button>
													</td>
												</td>
											</tr>
											@endforeach
										</tbody>
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
												</table>
												
													

											{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Ajouter une Facture</h5>
															&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
															<button type="button" class="btn btn-danger"> Telecharger Facture </button><br><br>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
															<form action="{{route('invoices.store')}}" method="post">
															{{csrf_field()}}
															<div class="modal-body">
																<div class="form-group">
																	<input type="text" class="form-control" id="" name="n_fac" placeholder="Numero de la Facture" required ><br>
																	<input type="text" class="form-control" id="" name="date_f" placeholder="la Date de la Facture 2000-01-01" required ><br>
																	<input type="text" class="form-control" id="" name="nom_E" placeholder="Nom Entreprise" required ><br>
																	<input type="text" class="form-control" id="" name="Adresse_E" placeholder="Adresse Entreprise" required ><br>
																	<input type="text" class="form-control" id="" name="Email_E" placeholder="Email du Entreprise" required ><br>
																	<input type="text" class="form-control" id="" name="Tel_E" placeholder="Tel Entreprise" required ><br>
																	<input type="text" class="form-control" id="" name="nom_client" placeholder="Nom Client" required ><br>
																	<input type="text" class="form-control" id="" name="prenom_clirnt" placeholder="Prenom Client" required ><br>
																	<textarea type="text" class="form-control" id="" name="Adresse_C" placeholder="Adresse Client" required ><br>
																	<input type="text" class="form-control" id="" name="Etat" placeholder="Etat" required ><br>
																	<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Nom du produit</label>
																		<select name="Nom_produit" id="Produit_id" class="form-control" required>
																			<option value="" selected disabled> --Determiner Le Produit--</option>
																			@foreach ($produits as $produit)
																				<option value="{{ $produit->id }}">{{ $produit->nom_produit }}</option>
																			@endforeach
																		</select><br>
																	{{-- <input type="text" class="form-control" id="" name="" placeholder="Numero de la Facture" required > --}}
																	{{-- <input type="text" class="form-control" id="" name="prix" placeholder="Prix" required ><br>
																	<input type="text" class="form-control" id="" name="tva" placeholder="TVA" required ><br>
																	<input type="text" class="form-control" id="" name="montant_total" placeholder="Montant total" required ><br>
					
															</div>
															<div class="modal-footer">
																<button type="submit" class="btn btn-success">Ajouter</button>
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
															</div>
														</form>
													</div>
												</div> --}}
											{{-- </div> --}} 
									</div>
								</div>
							</div>
						</div>
				</div>
				<!-- /row -->
				
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



</script>
@endsection
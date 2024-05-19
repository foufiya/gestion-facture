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
								<a href="/Exporter"><button  class="btn btn-danger">Exporter en XML</button></a>
								<br>
								<br>
								
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
											@php
													$i=0;
												@endphp
											@foreach ($factures as $facture)
												@php
													$i++;
												@endphp
											
											<tr>
												<td>{{$i}}</td>
												<td>
													<a href="{{ url('InvoicesDetails') }}/{{ $facture->id }}">{{ $facture->numero_facture }}</a>
												</td>
										
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
												<td> @if ($facture->Etat_paiement == 1)
									
													<span class="text-success">{{ $facture->Etat }}</span>
												@elseif($facture->Etat_paiement == 0)
													<span class="text-danger">{{ $facture->Etat }}</span>
												@else
													<span class="text-warning">{{ $facture->Etat }}</span>
												@endif</td>
												<td>{{$facture->nom_produit}}</td>
												<td>{{$facture->prix}}</td>
												<td>{{$facture->tva}}</td>
												<td>{{$facture->montant_total}}</td>
												<td>
													<div class="dropdown">
														<button aria-expanded="false" aria-haspopup="true"
															class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
															type="button"><i class="fas fa-caret-down ml-1"></i> Operation</button>
														<div class="dropdown-menu tx-13">
															
																<a class="dropdown-item"
																	href=" {{ url('edit_invoice') }}/{{ $facture->id }}">
																	Modifier La Facture</a>
															
		
															
																<a class="dropdown-item" href="#" data-invoice_id="{{ $facture->id }}"
																	data-toggle="modal" data-target="#delete_invoice"><i
																		class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;    
																	Supprimer La Facture</a>
															
		
															
																<a class="dropdown-item"
																	href="{{ URL::route('Status_show', [$facture->id]) }}"><i
																	class="text-success fas fa-money-bill"></i>&nbsp;&nbsp;    
																 Changer L'Etat de Paiement																																																																																																
																	
																	</a>
																	
		
															
		
															@can('طباعةالفاتورة')
																<a class="dropdown-item" href="Print_invoice/{{ $facture->id }}"><i
																		class="text-success fas fa-print"></i>&nbsp;&nbsp;طباعة
																	الفاتورة
																</a>
															@endcan
														</div>
													</div>
		
												</td>
											</tr>
											@endforeach
										</tbody>
												
									
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
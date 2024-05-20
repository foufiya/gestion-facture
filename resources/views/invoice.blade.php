@extends('layouts.master')
<<<<<<< HEAD
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
=======
@section('css')
>>>>>>> 936a2f3471cea72593a2c12a8735009d0e801b53
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
<<<<<<< HEAD
							<h4 class="content-title mb-0 my-auto">Factures</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Liste des factures</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
=======
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Invoice</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
>>>>>>> 936a2f3471cea72593a2c12a8735009d0e801b53
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
<<<<<<< HEAD
				
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
				
=======
				<div class="row row-sm">
					<div class="col-md-12 col-xl-12">
						<div class=" main-content-body-invoice">
							<div class="card card-invoice">
								<div class="card-body">
									<div class="invoice-header">
										<h1 class="invoice-title">Invoice</h1>
										<div class="billed-from">
											<h6>BootstrapDash, Inc.</h6>
											<p>201 Something St., Something Town, YT 242, Country 6546<br>
											Tel No: 324 445-4544<br>
											Email: youremail@companyname.com</p>
										</div><!-- billed-from -->
									</div><!-- invoice-header -->
									<div class="row mg-t-20">
										<div class="col-md">
											<label class="tx-gray-600">Billed To</label>
											<div class="billed-to">
												<h6>Juan Dela Cruz</h6>
												<p>4033 Patterson Road, Staten Island, NY 10301<br>
												Tel No: 324 445-4544<br>
												Email: youremail@companyname.com</p>
											</div>
										</div>
										<div class="col-md">
											<label class="tx-gray-600">Invoice Information</label>
											<p class="invoice-info-row"><span>Invoice No</span> <span>GHT-673-00</span></p>
											<p class="invoice-info-row"><span>Project ID</span> <span>32334300</span></p>
											<p class="invoice-info-row"><span>Issue Date:</span> <span>November 21, 2017</span></p>
											<p class="invoice-info-row"><span>Due Date:</span> <span>November 30, 2017</span></p>
										</div>
									</div>
									<div class="table-responsive mg-t-40">
										<table class="table table-invoice border text-md-nowrap mb-0">
											<thead>
												<tr>
													<th class="wd-20p">Type</th>
													<th class="wd-40p">Description</th>
													<th class="tx-center">QNTY</th>
													<th class="tx-right">Unit Price</th>
													<th class="tx-right">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Website Design</td>
													<td class="tx-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</td>
													<td class="tx-center">2</td>
													<td class="tx-right">$150.00</td>
													<td class="tx-right">$300.00</td>
												</tr>
												<tr>
													<td>Firefox Plugin</td>
													<td class="tx-12">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</td>
													<td class="tx-center">1</td>
													<td class="tx-right">$1,200.00</td>
													<td class="tx-right">$1,200.00</td>
												</tr>
												<tr>
													<td>iPhone App</td>
													<td class="tx-12">Et harum quidem rerum facilis est et expedita distinctio</td>
													<td class="tx-center">2</td>
													<td class="tx-right">$850.00</td>
													<td class="tx-right">$1,700.00</td>
												</tr>
												<tr>
													<td>Android App</td>
													<td class="tx-12">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td>
													<td class="tx-center">3</td>
													<td class="tx-right">$850.00</td>
													<td class="tx-right">$2,550.00</td>
												</tr>
												<tr>
													<td class="valign-middle" colspan="2" rowspan="4">
														<div class="invoice-notes">
															<label class="main-content-label tx-13">Notes</label>
															<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
														</div><!-- invoice-notes -->
													</td>
													<td class="tx-right">Sub-Total</td>
													<td class="tx-right" colspan="2">$5,750.00</td>
												</tr>
												<tr>
													<td class="tx-right">Tax (5%)</td>
													<td class="tx-right" colspan="2">$287.50</td>
												</tr>
												<tr>
													<td class="tx-right">Discount</td>
													<td class="tx-right" colspan="2">-$50.00</td>
												</tr>
												<tr>
													<td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
													<td class="tx-right" colspan="2">
														<h4 class="tx-primary tx-bold">$5,987.50</h4>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<hr class="mg-b-40">
									<a class="btn btn-purple float-left mt-3 mr-2" href="">
										<i class="mdi mdi-currency-usd ml-1"></i>Pay Now
									</a>
									<a href="#" class="btn btn-danger float-left mt-3 mr-2">
										<i class="mdi mdi-printer ml-1"></i>Print
									</a>
									<a href="#" class="btn btn-success float-left mt-3">
										<i class="mdi mdi-telegram ml-1"></i>Send Invoice
									</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
>>>>>>> 936a2f3471cea72593a2c12a8735009d0e801b53
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
<<<<<<< HEAD
		
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
=======
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
>>>>>>> 936a2f3471cea72593a2c12a8735009d0e801b53
@endsection
@extends('layouts.master')
@section('css')
@endsection
@section('title')
      Changement Etat de Paiement
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Factures</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                      changer L'Etat de Paiement</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('Status_Update', ['id' => $invoices->id]) }}" method="post" autocomplete="off">
                        {{ csrf_field() }}
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label"> Numéro Facture</label>
                                <input class="form-control fc-datepicker" name="num" placeholder=""
                                    type="text" value="{{ $invoices->numero_facture }}" required readonly>
                            </div>

                            <div class="col">
                                <label>Date Facture </label>
                                <input class="form-control fc-datepicker" name="invoice_Date" placeholder="YYYY-MM-DD"
                                    type="text" value="{{ $invoices->date_facturation }}" required readonly>
                            </div>

                            <div class="col">
                                <label> Le Nom de L'Entreprise</label>
                                <input class="form-control fc-datepicker" name="Due_date" placeholder="YYYY-MM-DD"
                                    type="text" value="{{ $invoices->entreprise_nom }}" required readonly>
                            </div>

                        </div>

                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">Produit</label>
                                <input class="form-control fc-datepicker" name="product" placeholder=""
                                    type="text" value="{{ $invoices->nom_produit }}" required readonly>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">Adresse Entreprise</label>
                                <input class="form-control fc-datepicker" name="Due_date" placeholder=""
                                    type="text" value="{{ $invoices->entreprise_adresse }}" required readonly>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">Telephone Entreprise </label>
								<input class="form-control fc-datepicker" name="Due_date" placeholder=""
								type="text" value="{{ $invoices->entreprise_tel }}" required readonly>
                            </div>
                        </div>


                        {{-- 3 --}}

                        <div class="row">

                            <div class="col">
                                <label for="inputName" class="control-label"> Nom Client</label>
                                <input class="form-control fc-datepicker" name="Due_date" placeholder=""
								type="text" value="{{ $invoices->client_nom }}" required readonly>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">Prenom Client</label>
                                <input type="text" class="form-control form-control-lg" id="Discount" name="Discount"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    value="{{ $invoices->client_prenom }}" required readonly>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">   Adresse Client</label>
                                <input class="form-control fc-datepicker" name="Due_date" placeholder=""
								type="text" value="{{ $invoices->client_adresse }}" required readonly>
                            </div>

                        </div>

                        {{-- 4 --}}

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">   Telephone Client</label>
                                <input class="form-control fc-datepicker" name="Due_date" placeholder=""
								type="text" value="{{ $invoices->client_tel }}" required readonly>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">  Prix</label>
                                <input type="text" class="form-control" id="Total" name="Total" readonly
                                    value="{{ $invoices->prix }}">
                            </div>
							
                        </div>

                        {{-- 5 --}}
						<div class="row">
                           

                            <div class="col">
                                <label for="inputName" class="control-label"> La Valeur Ajoutée du TVA </label>
                                <input type="text" class="form-control" id="Total" name="Total" readonly
                                    value="{{ $invoices->tva }}">
                            </div>
							<div class="col">
                                <label for="inputName" class="control-label">Le Montant Total  </label>
                                <input type="text" class="form-control" id="Total" name="Total" readonly
                                    value="{{ $invoices->montant_total }}">
                            </div>
                        </div>
						{{-- 6 --}}
						<div class="row">
                           

                            <div class="col">
                                <label for="inputName" class="control-label">Email Entreprise </label>
                                <input type="text" class="form-control" id="Total" name="Total" readonly
                                    value="{{ $invoices->entreprise_email }}">
                            </div>
							<div class="col">
                                <label for="inputName" class="control-label">Email Client  </label>
                                <input type="text" class="form-control" id="Total" name="Total" readonly
                                    value="{{ $invoices->client_email }}">
                            </div>
                        </div>
						{{-- 7 --}}
                        <div class="row">
                          
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">Etat de Paiement </label>
                                <select class="form-control" id="Status" name="Status" required>
                                    <option selected="true" disabled="disabled">-- Determiner L'Etat de Paiement--</option>
                                    <option value="payée">payée</option>
                                    <option value="partiellement payée"> partiellement payée</option>
                                </select>
                            </div>

                            <div class="col">
                                <label> Date de Paiement</label>
                                <input class="form-control fc-datepicker" name="Payment_Date" placeholder="YYYY-MM-DD"
                                    type="text" required>
                            </div>


                        </div><br>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary"> Enregistrer </button>
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
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();

    </script>
@endsection

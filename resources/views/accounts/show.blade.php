@extends('layouts.backend')

@section('content')
    <!-- Hero -->
{{--    <div class="bg-body-light">--}}
{{--        <div class="content content-full">--}}
{{--            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">--}}
{{--                <h3 ><i class="far fa-address-card fa-lg" style="margin-bottom: 0 !important;"></i> {{$accounts->f_account_name}}</h3>--}}
{{--                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li class="breadcrumb-item">App</li>--}}
{{--                        <li class="breadcrumb-item active" aria-current="page">View Account</li>--}}
{{--                    </ol>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="content">
        <div class="col-md-12">
            <div class="block block-themed bg-image">
                <div class="block-header bg-primary-dark-op">
                    <h2 class="block-title"><i class="far fa-address-card fa-lg"></i> {{$accounts->f_account_name}}</h2>
                    <div class="block-options">
                        <button type="button" class="btn btn-success">
                            @if($accounts->account_status)
                                {{$accounts->account_status->f_account_status_name}}
                            @endif
                        </button>
                    </div>
                </div>

                <!-- Block Tabs -->
                <div class="row">
                    <div class="col-lg-12 accounts-wrapper">


                        <!-- Block Tabs Default Style -->
                            <div class="block block-rounded block-bordered">
                                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#btabs-alt-static-summary">Summary +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-contacts">Contacts +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-notes">Notes +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-invoices">Invoices +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-purchases">Purchases +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-locations">Locations +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-shipping">Shipping Addresses +</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-alt-static-billing">Billing Groups +</a>
                                    </li>

                                </ul>
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabs-alt-static-summary" role="tabpanel">

                                       <div class="row">

                                           <div class="col-md-6">
                                               <div class="block block-rounded block-bordered">
                                                   <div class="block-header">
                                                       <h3 class="block-title"><i class="far fa-address-card fa-lg"></i> Account Details </h3>
                                                   </div>
                                                   <div class="block-content">

                                                       <div class="form-group">
                                                           <label type="text" name="name">Client Type:</label>
                                                           <br>
                                                           <button type="button" class="btn btn-sm btn-success">
                                                               @if($accounts->account_type)
                                                                   {{$accounts->account_type->f_account_type_name}}
                                                               @endif
                                                           </button>
                                                           <br>
                                                       </div>
                                                       <div class="form-group">
                                                           <label type="text" name="name">Account Name:</label>
                                                           <input type="text" name="name" value="{{$accounts->f_account_name}}" class="form-control" readonly>
                                                       </div>
                                                       <div class="form-group">
                                                           <label type="text" name="name">Address:</label>
                                                           <input type="text" name="name" value="{{$accounts->f_account_address_street}}" class="form-control" readonly>
                                                       </div>
                                                       <div class="row">
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Phone:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_phone_primary}}" class="form-control" readonly>
                                                           </div>
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Fax:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_fax}}" class="form-control" readonly>
                                                           </div>
                                                       </div>
                                                       <div class="row">
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Email:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_email_primary}}" class="form-control" readonly>
                                                           </div>
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Website:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_website}}" class="form-control" readonly>
                                                           </div>
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">ABN:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_abn}}" class="form-control" readonly>
                                                           </div>
                                                           <div class="col-md-6 form-group">
                                                               <label type="text" name="name">Vendor #:</label>
                                                               <input type="text" name="name" value="{{$accounts->f_account_vendor}}" class="form-control" readonly>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>

                                               <div class="block block-rounded block-bordered">
                                                   <div class="block-header">
                                                       <h3 class="block-title"><i class="far fa-credit-card fa-lg"></i> Terms </h3>
                                                   </div>
                                                   <div class="block-content">
                                                           <div class="row">
                                                               <div class="col-md-6 form-group">
                                                                   <label type="text" name="name">Terms:</label>
                                                                   <input type="text" name="name" value="{{$accounts->f_account_terms}}" class="form-control" readonly>
                                                               </div>
                                                               <div class="col-md-6 form-group">
                                                                   <label type="text" name="name">Default Currency:</label>
                                                                   <input type="text" name="name" value="{{$accounts->f_account_currency}}" class="form-control" readonly>
                                                               </div>
                                                               <div class="col-md-6 form-group">
                                                                   <label type="text" name="name">Price Level:</label>
                                                                   <input type="text" name="name" value="{{$accounts->f_account_price_level}}" class="form-control" readonly>
                                                               </div>
                                                               <div class="col-md-6 form-group">
                                                                   <label type="text" name="name">Area Manager:</label>
                                                                   <input type="text" name="name" value="{{$accounts->f_account_area_manager}}" class="form-control" readonly>
                                                               </div>
                                                           </div>
                                                   </div>
                                               </div>

                                           </div>
                                           <div class="col-md-6">
                                               <!-- Overlay Map -->
                                               <div class="block block-rounded block-bordered">
                                                   <div class="block-header ">
                                                       <h3 class="block-title"><i class="fa fa-map-marker fa-lg"></i> Address:</h3>
                                                       <div class="block-options">
                                                           <button type="button" class="btn-block-option">
                                                               <i class="si si-settings"></i>
                                                           </button>
                                                       </div>
                                                   </div>
                                                   <!-- Overlay Map Container -->
{{--                                                   <div id="js-map-overlay" style="height: 600px;">--}}
                                                   <div id="map" style="height: 600px;">
                                                   </div>

                                                   <script>
                                                       function initMap(){
                                                           var options = {
                                                               zoom:8,
                                                               center:{lat:42.3601,lng:-71.0589}
                                                           }

                                                           var map = new google.maps.Map(document.getElementById('map'), options);
                                                       }
                                                   </script>
                                               </div>
                                               <!-- END Overlay Map -->
                                           </div>

                                       </div>

                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-contacts" role="tabpanel">
                                        <!-- Dynamic Table Full -->
                                        <div class="block block-rounded block-bordered">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title"><i class="far fa-address-book fa-lg"></i> Contacts</h3>
                                            </div>
                                            <div class="block-content block-content-full">
                                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full myCustomTable">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 50px;">ID</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Name</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Phone</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Mobile</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Email</th>
                                                        <th class="d-none d-sm-table-cell" style="width:auto;">Address</th>
                                                        <th class="d-none d-sm-table-cell" style="width: 300px;">Notes</th>
                                                        <th style="width: 5%;"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($accounts as $account)
                                                        <tr>
                                                            <td class="text-center">
                                                                @if($accounts->contact_list)
                                                                {{$accounts->contact_list->f_contact_id}}
                                                                @endif
                                                            </td>
                                                            <td class="font-w600">
                                                                @if($accounts->contact_list)
                                                                    {{$accounts->contact_list->f_contact_first_name .' '.$accounts->contact_list->f_contact_last_name}}
                                                                @endif
                                                            </td>
                                                            <td class="font-w600">
                                                                @if($accounts->contact_list)
                                                                    {{$accounts->contact_list->f_contact_address_street}}
                                                                @endif
                                                            </td>
                                                            <td class="font-w600">

                                                            </td>
                                                            <td class="font-w600">

                                                            </td>
                                                            <td class="font-w600">

                                                            </td>
                                                            <td class="font-w600">

                                                            </td>
                                                            <td class="font-w600">

                                                            </td>
                                                            <td class="font-w600">
                                                                 <button type="button" class="btn btn-rounded btn-sm ">
                                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                                 </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END Dynamic Table Full -->

                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-notes" role="tabpanel">
                                        <h4 class="font-w400">Notes Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-invoices" role="tabpanel">
                                        <h4 class="font-w400">Invoices Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-purchases" role="tabpanel">
                                        <h4 class="font-w400">Purchases Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-locations" role="tabpanel">
                                        <h4 class="font-w400">Locations Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-shipping" role="tabpanel">
                                        <h4 class="font-w400">Shipping Address Content</h4>
                                        <p>...</p>
                                    </div>
                                    <div class="tab-pane" id="btabs-alt-static-billing" role="tabpanel">
                                        <h4 class="font-w400">Billing Groups</h4>
                                        <p>...</p>
                                    </div>




                                </div>
                            </div>
                    </div>
                </div>
                        <!-- END Block Tabs Default Style -->


                <div class="content">
            </div>
            </div>
        </div>
    </div>

@endsection


@section('js_after')

@stop



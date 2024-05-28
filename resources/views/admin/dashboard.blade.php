@extends('layouts.app')

@section('content')
    <!--start content-->
    <main class="page-content">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Tasks</p>
                                <h4 class="mb-0">{{number_format($tasksCount)}}</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Since Inception</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-primary text-white">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Access/AEDC KCT</p>
                                <h4 class="mb-0">{{number_format($accessKct)}}</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Since Inception</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-success text-white">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total treated</p>
                                <h4 class="mb-0">{{number_format($treated)}}</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Since Inception</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-orange text-white">
                                <i class="bi bi-emoji-heart-eyes"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Untreated</p>
                                <h4 class="mb-0">{{number_format($untreated)}}</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Since Inception</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-info text-white">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->

        <div class="row">
            <div class="col-12 col-lg-6 col-xl-6 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-header bg-transparent">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Customer Details</h6>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                    data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <label for="formFile" class="form-label">Meter No:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="search_meter_number" placeholder="Enter Customer Meter Number">
                                <button class="btn btn-primary" type="button" id="search_btn" onclick="searchMeter()">Search</button>
                            </div>
                        </form>
                        <hr/>
                        <div class="justify-content-center align-items-center" id="customer_div" style="height: 35%; display:flex">
                            <p>Customer Info Here</p>
                        </div>
                        <div id="customer_not_found" class="mt-3 d-none ">
                            <p style="font-weight: 500; font-size: 15px;" class="text-primary">
                                Register New Customer
                            </p>
                            <form action="{{route('store.customer')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="meter_number" class="form-label">Meter Number:</label>
                                        <input type="text" id="new_meter_number" name="meter_number" placeholder="Enter meter number" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="address" class="form-label">Customer Address:</label>
                                        <input type="text" name="address" placeholder="Enter Customer Address" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="contact_info" class="form-label">Customer Contact Info:</label>
                                        <input type="text" name="contact_info" placeholder="Enter contact information" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <label for="meter_latitude">Latitude</label>
                                                <input type="text" name="meter_latitude" id="meter-latitude1" class="form-control" readonly="readonly">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="meter_longitude">Longitude</label>
                                                <input type="text" name="meter_longitude" id="meter-longitude1" class="form-control" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    <button onClick="hideDiv();" class="btn btn-danger btn-sm mt-1 d-block" style="border-radius: 50%" role="button">
                                        <i class="bi bi-x m-0"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id="customer_found" class="mt-3" style="display: none;">
                            <ul>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Meter Number: </span>
                                    <span id="meter_number"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Customer Name: </span>
                                    <span id="customer_name"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Customer Address: </span>
                                    <span id="customer_address"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Access Power KCT 1: </span>
                                    <span id="access_power_kct1"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Access Power KCT 2: </span>
                                    <span id="access_power_kct2"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">AEDC KCT 1: </span>
                                    <span id="aedc_kct1"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">AEDC KCT 2: </span>
                                    <span id="aedc_kct2"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Base Date: </span>
                                    <span id="base_date"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Date: </span>
                                    <span id="date"></span>
                                </li>
                            </ul>
                        </div>
                        <div id="meter_treated" class="mt-3" style="display: none;">
                            <p style="font-weight: 500; font-size: 15px;" class="text-danger">
                                This Meter was treated by: <span id="user_name"></span>
                            </p>
                            <ul>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Meter/Account No. Before: </span>
                                    <span id="meter_no_before"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Previous Meter/Account No: </span>
                                    <span id="previous_meter_no"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Rollover Status: </span>
                                    <span id="rollover_status"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Which KCT Failed: </span>
                                    <span id="kct_failed"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Phone Number: </span>
                                    <span id="phone_number"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Meter Needs Relocation?: </span>
                                    <span id="needs_relocation"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Customer Latitude: </span>
                                    <span id="Kcustomer_latitude"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Customer Longitude: </span>
                                    <span id="Kcustomer_longitude"></span>
                                </li>
                                <hr>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Meter Number: </span>
                                    <span id="Kmeter_number"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Customer Name: </span>
                                    <span id="Kcustomer_name"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Customer Address: </span>
                                    <span id="Kcustomer_address"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Access Power KCT 1: </span>
                                    <span id="Kaccess_power_kct1"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Access Power KCT 2: </span>
                                    <span id="Kaccess_power_kct2"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">AEDC KCT 1: </span>
                                    <span id="Kaedc_kct1"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">AEDC KCT 2: </span>
                                    <span id="Kaedc_kct2"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Base Date: </span>
                                    <span id="Kbase_date"></span>
                                </li>
                                <li class="mb-2">
                                    <span style="font-weight: 500;">Date: </span>
                                    <span id="Kdate"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-header bg-transparent">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">KCT Information</h6>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                    data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div id="kct_div" class="justify-content-center align-items-center" style="height: 85%; display:flex">
                            <p>Customer KCT Information</p>
                        </div>
                        <div id="kct_information" style="display:none">
                            <form action="{{route('store.kct')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="aedc_meter_account_no_before_power" class="form-label">Had AEDC Meter/ Account number before access power?:</label>
                                        <label for="">
                                            <input type="radio" name="aedc_meter_account_no_before_power" value="yes" class="form-check-input">
                                            Yes
                                        </label>
                                        <label for="">
                                        <input type="radio" name="aedc_meter_account_no_before_power" value="No" class="form-check-input">
                                        No
                                        </label>
                                    </div>
                                    <div class="form-group col-md-12 mb-3" id="previous_meter_number" style="display: none;">
                                        <label for="previous_meter_account_no" class="form-label">Previous Meter/Account number:</label>
                                        <input type="text" name="previous_meter_account_no" placeholder="Enter Previous meter account number" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="rollover_status" class="form-label">Rollover Status:</label>
                                        <select class="form-control" name="rollover_status" id="">
                                            <option value="">Select status</option>
                                            <option value="successful">Successful</option>
                                            <option value="failed">Failed</option>
                                        </select>
                                    </div>
                                    <div id="failed_kct" class="form-group col-md-12 mb-3" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="which_kct_failed" class="form-label">Which KCT Failed?:</label>
                                                <select class="form-control" name="which_kct_failed" id="">
                                                    <option value="">Select Failed KCT</option>
                                                    <option value="AEDC KCT 1">AEDC KCT 1</option>
                                                    <option value="AEDC KCT 2">AEDC KCT 2</option>
                                                    <option value="Access Power KCT 1">Access Power KCT 1</option>
                                                    <option value="Access Power KCT 2">Access Power KCT 2</option>
                                                    <option value="Faulty Meter">Faulty Meter</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="phone_number" class="form-label">Phone Number</label>
                                                <input type="text" name="phone_number" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <label for="meter_latitude">Latitude</label>
                                                <input type="text" name="meter_latitude" id="meter-latitude2" class="form-control" readonly="readonly">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="meter_longitude">Longitude</label>
                                                <input type="text" name="meter_longitude" id="meter-longitude2" class="form-control" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <label class="form-label d-block" for="meter_needs_relocation">Meter needs relocation?</label>
                                        <label for="meter_needs_relocation" class="form-label">
                                            <input type="radio" name="meter_needs_relocation" class="form-check-input" value="yes">
                                            Yes
                                        </label>
                                        <label for="meter_needs_relocation" class="form-label">
                                            <input type="radio" name="meter_needs_relocation" class="form-check-input" value="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                                <input type="hidden" id="access_aedc_kct_id" name="access_aedc_kct_id">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->

        <h6 class="mb-0 text-uppercase">My Tasks</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tasks_datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Meter Number</th>
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Meter/Account No. Before</th>
                                <th>Previous Meter/Account No.</th>
                                <th>Rollover Status</th>
                                <th>KCT Failed</th>
                                <th>Meter Needs Relocation?</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key => $task)
                            @php
                                $createdAt = $task->created_at;
                                $formattedDate = ($createdAt->isToday()) ? 'Today' : (($createdAt->isYesterday()) ? 'Yesterday' : $createdAt->format('M d'));
                                $formattedDateTime = $createdAt->format('h:i A');
                            @endphp
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$task->accessAedcKct->meter_number ?? '...'}}</td>
                                    <td>{{$task->accessAedcKct->customer_name ?? '...'}}</td>
                                    <td>{{$task->accessAedcKct->customer_address ?? '...'}}</td>
                                    <td>{{$task->aedc_meter_account_no_before_power ?? '...'}}</td>
                                    <td>{{$task->previous_meter_account_no ?? '...'}}</td>
                                    <td>{{$task->rollover_status ?? '...'}}</td>
                                    <td>{{$task->which_dkct_failed ?? '...'}}</td>
                                    <td>{{$task->meter_needs_relocation ?? '...'}}</td>
                                    <td>{{$formattedDate}}, {{$formattedDateTime}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>Meter Number</th>
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Meter/Account No. Before</th>
                                <th>Previous Meter/Account No.</th>
                                <th>Rollover Status</th>
                                <th>KCT Failed</th>
                                <th>Meter Needs Relocation?</th>
                                <th>Created At</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </main>
    <!--end page main-->
@endsection

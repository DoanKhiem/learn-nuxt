@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    @if(Session::has('error'))
        <div class="mb-2 mr-2 badge badge-danger">{{Session::get('error')}}</div>
    @endif
    @if(Session::has('success'))
        <div class="mb-2 mr-2 badge badge-success">{{Session::get('success')}}</div>
    @endif
    <div class="col-md-6 col-lg-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-line"></i></div>
                    <div class="text-left ml-3">
                        <h2 class="mb-0"><span class="counter">{{ $count_member }}</span></h2>
                        <h5 class="">Thành viên</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-book-line"></i></div>
                    <div class="text-left ml-3">
                        <h2 class="mb-0"><span class="counter">{{ $count_book }}</span></h2>
                        <h5 class="">Sách</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-shopping-cart-2-line"></i></div>
                    <div class="text-left ml-3">
                        <h2 class="mb-0"><span class="counter">{{ $count_category }}</span></h2>
                        <h5 class="">Thể loại</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle iq-card-icon bg-info"><i class="ri-radar-line"></i></div>
                    <div class="text-left ml-3">
                        <h2 class="mb-0"><span class="counter">690</span></h2>
                        <h5 class="">Orders</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between align-items-center">
                <div class="iq-header-title">
                    <h4 class="card-title mb-0">Daily Sales</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <div id="iq-sale-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between align-items-center">
                <div class="iq-header-title">
                    <h4 class="card-title mb-0">Summary</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <ul class="list-inline p-0 mb-0">
                    <li>
                        <div class="iq-details mb-2">
                            <span class="title">Income</span>
                            <div class="percentage float-right text-primary">95 <span>%</span></div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-primary">
                                    <span class="bg-primary" data-percent="90"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="iq-details mb-2">
                            <span class="title">Profit</span>
                            <div class="percentage float-right text-warning">72 <span>%</span></div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-warning">
                                    <span class="bg-warning" data-percent="75"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="iq-details mb-2">
                            <span class="title">Expenses</span>
                            <div class="percentage float-right text-info">75 <span>%</span></div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-info">
                                    <span class="bg-info" data-percent="65"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-body">
                <h4 class="text-uppercase text-black mb-0">Session(Now)</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="font-size-80 text-black">12</div>
                    <div class="text-left">
                        <p class="m-0 text-uppercase font-size-12">1 Hours Ago</p>
                        <div class="mb-1 text-black">1500<span class="text-danger"><i class="ri-arrow-down-s-fill"></i>3.25%</span>
                        </div>
                        <p class="m-0 text-uppercase font-size-12">1 Day Ago</p>
                        <div class="mb-1 text-black">1890<span class="text-success"><i class="ri-arrow-down-s-fill"></i>1.00%</span>
                        </div>
                        <p class="m-0 text-uppercase font-size-12">1 Week Ago</p>
                        <div class="text-black">1260<span class="text-danger"><i class="ri-arrow-down-s-fill"></i>9.87%</span>
                        </div>
                    </div>
                </div>
                <div id="wave-chart-7"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Open Invoices</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                       data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                            <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">Client</th>
                            <th scope="col">Date</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Amount</th>
                            <th scope="col">atatus</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ira Membrit</td>
                            <td>18/10/2019</td>
                            <td>20156</td>
                            <td>$1500</td>
                            <td>
                                <div class="badge badge-pill badge-success">Paid</div>
                            </td>
                            <td>Copy</td>
                        </tr>
                        <tr>
                            <td>Pete Sariya</td>
                            <td>26/10/2019</td>
                            <td>7859</td>
                            <td>$2000</td>
                            <td>
                                <div class="badge badge-pill badge-success">Paid</div>
                            </td>
                            <td>Send Email</td>
                        </tr>
                        <tr>
                            <td>Cliff Hanger</td>
                            <td>18/11/2019</td>
                            <td>6396</td>
                            <td>$2500</td>
                            <td>
                                <div class="badge badge-pill badge-danger">Past Due</div>
                            </td>
                            <td>Before Due</td>
                        </tr>
                        <tr>
                            <td>Terry Aki</td>
                            <td>14/12/2019</td>
                            <td>7854</td>
                            <td>$5000</td>
                            <td>
                                <div class="badge badge-pill badge-success">Paid</div>
                            </td>
                            <td>Copy</td>
                        </tr>
                        <tr>
                            <td>Anna Mull</td>
                            <td>24/12/2019</td>
                            <td>568569</td>
                            <td>$10000</td>
                            <td>
                                <div class="badge badge-pill badge-success">Paid</div>
                            </td>
                            <td>Send Email</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

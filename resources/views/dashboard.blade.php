@extends('layout.default' , ['footer' => true, 'appClass' => 'app-footer-fixed'])

@section('title', 'Dashboard')

@push('css')
    <link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" />
@endpush

@push('scripts')
		<script src="/assets/plugins/highlight.js/highlight.min.js"></script>
		<!-- <script src="/assets/js/demo/highlightjs.demo.js"></script> -->
		<script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
		<script src="/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->
		<script src="/assets/js/demo/map.demo.js""></script>
		<!-- <script src="/assets/js/demo/sidebar-scrollspy.demo.js""></script> -->
@endpush

@section('content')
    <!-- BEGIN #content -->
    <div id="content" class="app-content bg-gradient-gray-800">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active text-white">DASHBOARD</a></li>
            <li class="breadcrumb-item active text-white">SMART PLANNING</li>
        </ul>

        <div class="row mb-4">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Transport</p>
                    <h5 class="font-weight-bolder">
                      lorem Ipsum
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">55%</span>
                      lorem Ipsum
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="fa fa-laptop bg-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Power</p>
                    <h5 class="font-weight-bolder">
                        lorem Ipsum
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">3%</span>
                        lorem Ipsum
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Datacomm</p>
                    <h5 class="font-weight-bolder">
                      Loerm Ipsum
                    </h5>
                    <p class="mb-0">
                      <span class="text-danger text-sm font-weight-bolder">-2%</span>
                      Lorem Ipsum
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


        <div class="card">
            <div class="card-header d-flex">
            <div class="dropdown">
                <button class="btn bg-gradient-primary text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Primary
                </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Vendor Name</a></li>
                <li><a class="dropdown-item" href="#">NE Type</a></li>
                <li><a class="dropdown-item" href="#">SW Type</a></li>
                <li><a class="dropdown-item" href="#">HW Type</a></li>
            </ul>
        </div>
            <!-- <span class="flex-grow-1">Data Mapping</span> -->
                <!-- <div>
                    <select class="form-select form-select-sm">
                        <option selected>All Menu</option>
                        <option value="1">Transport</option>
                        <option value="2">Power</option>
                        <option value="3">Datacomm</option>
                    </select>
                </div> -->

                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">Transport</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Power</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Datacomm</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
				<!-- BEGIN row -->
				<div class="row justify-content-center">
                    <div id="jVectorMap">
                        <div id="jvectorMap" style="height: 520px;"></div>
                    </div>
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
        </div>
    </div>
    <!-- END #content -->

    <!-- BEGIN #footer -->
    <div id="footer" class="app-footer">
        &copy; 2022 Telkomsel Smart Planning .
    </div>
    <!-- END #footer -->
@endsection

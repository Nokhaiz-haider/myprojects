@extends('dashboard.include.master')

@section('title','HRM | All Candidates')

@section('spasific-stylesheets')

        <!-- Data table CSS -->
        <link href="{{asset('dashboard-files/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('main-content')

            <!-- Main Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Title -->
                    <div class="row heading-bg">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h5 class="txt-dark">All Candidates</h5>
                        </div>
                        <!-- Breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Dashboard</a></li>
                                <li class="active"><span>All Candidates</span></li>
                            </ol>
                        </div>
                        <!-- /Breadcrumb -->
                    </div>
                    <!-- /Title -->
                    
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table id="datable_1" class="table table-hover display  pb-30" >
                                                    <thead>
                                                        <tr>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Father Name</th>
                                                            <th>CNIC</th>
                                                            <th>Action</th>														
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Ehsan</td>
                                                            <td>Baig</td>
                                                            <td>Nazar Baig</td>
                                                            <td>38403-33688885-7</td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <div class="btn-group">
                                                                        <div class="dropdown">
                                                                            <!-- Single button -->
                                                                            <button class="btn btn-default btn-icon-anim btn-square dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>

                                                                            <ul class="dropdown-menu" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                                                            <li><a href="#">Action</a></li>
                                                                            <li><a href="#">Another action</a></li>
                                                                            <li><a href="#">Something else here</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Separated link</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ehsan</td>
                                                            <td>Baig</td>
                                                            <td>Nazar Baig</td>
                                                            <td>38403-33688885-7</td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <button class="btn btn-default btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
                                                                    <div class="btn-group">
                                                                        <div class="dropdown">
                                                                            <!-- Single button -->
                                                                            <button class="btn btn-default btn-icon-anim btn-square dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>

                                                                            <ul class="dropdown-menu" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                                                            <li><a href="#">Action</a></li>
                                                                            <li><a href="#">Another action</a></li>
                                                                            <li><a href="#">Something else here</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Separated link</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ehsan</td>
                                                            <td>Baig</td>
                                                            <td>Nazar Baig</td>
                                                            <td>38403-33688885-7</td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <button class="btn btn-default btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
                                                                    <div class="btn-group">
                                                                        <div class="dropdown">
                                                                            <!-- Single button -->
                                                                            <button class="btn btn-default btn-icon-anim btn-square dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>

                                                                            <ul class="dropdown-menu" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                                                            <li><a href="#">Action</a></li>
                                                                            <li><a href="#">Another action</a></li>
                                                                            <li><a href="#">Something else here</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Separated link</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ehsan</td>
                                                            <td>Baig</td>
                                                            <td>Nazar Baig</td>
                                                            <td>38403-33688885-7</td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <button class="btn btn-default btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
                                                                    <div class="btn-group">
                                                                        <div class="dropdown">
                                                                            <!-- Single button -->
                                                                            <button class="btn btn-default btn-icon-anim btn-square dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>

                                                                            <ul class="dropdown-menu" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                                                            <li><a href="#">Action</a></li>
                                                                            <li><a href="#">Another action</a></li>
                                                                            <li><a href="#">Something else here</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Separated link</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>													
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <!-- /Row -->
                    
                </div>
                
                <!-- Footer -->
                <footer class="footer container-fluid pl-30 pr-30">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>2019 &copy; Maaz Inforamtics. Developed by Development Department</p>
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->
                
            </div>
            <!-- /Main Content -->

@endsection

@section('script')

        <!-- JavaScript -->

        <!-- jQuery -->
        <script src="{{asset('dashboard-files/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('dashboard-files/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- Data table JavaScript -->
        <script src="{{asset('dashboard-files/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('dashboard-files/dist/js/dataTables-data.js')}}"></script>

        <!-- Slimscroll JavaScript -->
        <script src="{{asset('dashboard-files/dist/js/jquery.slimscroll.js')}}"></script>

        <!-- Owl JavaScript -->
        <script src="{{asset('dashboard-files/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

        <!-- Switchery JavaScript -->
        <script src="{{asset('dashboard-files/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

        <!-- Fancy Dropdown JS -->
        <script src="{{asset('dashboard-files/dist/js/dropdown-bootstrap-extended.js')}}"></script>

        <!-- Init JavaScript -->
        <script src="{{asset('dashboard-files/dist/js/init.js')}}"></script>

@endsection
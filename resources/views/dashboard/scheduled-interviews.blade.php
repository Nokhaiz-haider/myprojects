@extends('dashboard.include.master')

@section('title','HRM | Scheduled Interviews')

@section('spasific-stylesheets')

        <!-- Calendar CSS -->
        <link href="{{asset('dashboard-files/vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('main-content')

            <!-- Main Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Title -->
                    <div class="row heading-bg">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h5 class="txt-dark">Scheduled Interviews</h5>
                        </div>
                        <!-- Breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Dashboard</a></li>
                                <li class="active"><span>Scheduled Interviews</span></li>
                            </ol>
                        </div>
                        <!-- /Breadcrumb -->
                    </div>
                    <!-- /Title -->
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="add-event-wrap">
                                            <div class="calendar-event btn btn-success">My Event One <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
                                            <div class="calendar-event btn btn-info">My Event Two <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
                                            <div class="calendar-event btn btn-warning">My Event Three <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
                                            <div class="calendar-event btn btn-primary">My Event Four <a href="javascript:void(0);" class="remove-calendar-event"><i class="fa fa-times fa-fw"></i></a></div>
                                            <input type="text" placeholder="Add Event and hit enter" class="form-control add-event mt-30">
                                        </div>
                                        <div class="calendar-wrap mt-40">
                                            <div id="calendar"></div>
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

        <!-- Calender JavaScripts -->
        <script src="{{asset('dashboard-files/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('dashboard-files/vendors/jquery-ui.min.js')}}"></script>
        <script src="{{asset('dashboard-files/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
        <script src="{{asset('dashboard-files/dist/js/fullcalendar-data.js')}}"></script>

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
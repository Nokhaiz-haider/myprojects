@extends('dashboard.include.master')

@section('title','HRM | Interviews Timing')

@section('spasific-stylesheets')

    <!-- Jasny-bootstrap CSS -->
	<link href="{{asset('dashboard-files/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
   
@endsection

@section('page-wise-style')
    <style>
        .checkbox label {
            font-size: 14px;
            line-height: 2;
        }
        .panel-heading{
            margin-left: 16.66666%;
        }
    </style>
@endsection

@section('main-content')

            <!-- Main Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Title -->
                    <div class="row heading-bg">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">Interviews Timing</h5>
                        </div>
                        <!-- Breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Dashboard</a></li>
                            <li class="active"><span>Interviews Timing</span></li>
                        </ol>
                        </div>
                        <!-- /Breadcrumb -->
                    </div>
                    <!-- /Title -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Select days for interviews</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                {{ Form::open(['action' => 'SetInterviewController@set_interview_schedule', 'method'=>'POST']) }}
                                    {!! csrf_field() !!}
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="row mt-10">
                                            <div class="col-sm-offset-2 col-sm-4">
                                                <div class="checkbox checkbox-success">
                                                    <input id="monday" name="day[]" value="Monday" type="checkbox">
                                                    <label for="monday"> Monday </label>
                                                </div> 
                                                <div class="checkbox checkbox-success">
                                                    <input id="tuesday" name="day[]" value="Tuesday" type="checkbox">
                                                    <label for="tuesday"> Tuesday </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input id="wednesday" name="day[]" value="Wednesday" type="checkbox">
                                                    <label for="wednesday"> Wednesday </label>
                                                </div> 
                                                <div class="checkbox checkbox-success">
                                                    <input id="thursday" name="day[]" value="Thursday" type="checkbox">
                                                    <label for="thursday"> Thursday </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input id="friday" name="day[]" value="Friday" type="checkbox">
                                                    <label for="friday"> Friday </label>
                                                </div>
                                                <div class="checkbox checkbox-danger">
                                                    <input id="saturday" name="day[]" value="Saturday" type="checkbox">
                                                    <label for="saturday"> Saturday </label>
                                                </div>
                                                <div class="checkbox checkbox-danger">
                                                    <input id="sunday" name="day[]" value="Sunday" type="checkbox">
                                                    <label for="sunday"> Sunday </label>
                                                </div> 
                                            </div>   
                                            <div class="col-sm-4">
                                                
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="first-interview-time">First Interview Time</label>
                                                        <input type="time" name="start_time" class="form-control" id="email_de">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="last-interview-time">Last Interview Time</label>
                                                        <input type="time" name="end_time" class="form-control" id="last-interview-time">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-8" style="padding:unset;">
                                                            <label class="control-label mb-10" for="interview-duration">Interview Duration</label>
                                                            <input type="text" name="interview_duration" class="form-control" id="interview-duration">
                                                        </div>
                                                        <div class="col-sm-4 mb-10" style="margin-top:30px">
                                                            <select name="min_hour" class="form-control">
                                                                <option>Minutes</option>
                                                                <option>Hour</option>
                                                            <select>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group mb-0">
                                                        <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
                                                    </div>	
                                                </form>
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
	
	<script src="{{asset('dashboard-files/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{asset('dashboard-files/dist/js/jquery.slimscroll.js')}}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{asset('dashboard-files/dist/js/dropdown-bootstrap-extended.js')}}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{asset('dashboard-files/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

	<!-- Switchery JavaScript -->
	<script src="{{asset('dashboard-files/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
	
	<!-- Init JavaScript -->
	<script src="{{asset('dashboard-files/dist/js/init.js')}}"></script>

   
@endsection
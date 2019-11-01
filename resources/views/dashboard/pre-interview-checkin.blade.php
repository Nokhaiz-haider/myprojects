@extends('dashboard.include.master')

@section('title','HRM | Dashboard')

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
                            <h5 class="txt-dark">Pre Interview Checkin</h5>
                        </div>
                        <!-- Breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Dashboard</a></li>
                                <li class="active"><span>Pre Interview Checkin</span></li>
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
                                        <div id="generate-new-question-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title">Generate New Question</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>				
                                                            <div class="col-sm-12">						
                                                                <div class="form-group">
                                                                    <label for="question" class="control-label mb-10">Question</label>
                                                                    <textarea class="form-control" id="question"></textarea>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert alert-success alert-dismissable alert-style-1">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="zmdi zmdi-check"></i>Yay! Your message has been sent successfully. 
                                        </div>									
                                        <button type="submit" class="btn btn-success mr-10" data-toggle="modal" data-target="#generate-new-question-model" class="model_img img-responsive">Generate New Question</button>
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table id="datable_1" class="table table-hover display  pb-30" >
                                                    <thead>
                                                        <tr>
                                                            <th>Question</th>
                                                            <th>Action</th>														
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>I am staying with</td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <button class="btn btn-default btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Distance from my home to office (on daily basis) is</td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <button class="btn btn-default btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mode of my conveyance is</td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <button class="btn btn-default btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
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
@extends('dashboard.include.master')

@section('title','HRM | Vacancies')

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
                            <h5 class="txt-dark">Vacancies</h5>
                        </div>
                        <!-- Breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Dashboard</a></li>
                                <li class="active"><span>Vacancies</span></li>
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
                                        <div id="generate-vacancy-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title">Generate Vacancy</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="control-label mb-10">Designation</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="control-label mb-10">Department</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">														
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="control-label mb-10">Job Type</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">								
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="control-label mb-10">Age Range</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">	
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="control-label mb-10">Required Experience</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">	
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="control-label mb-10">Required Education</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                            </div>						
                                                            <div class="col-sm-12">						
                                                                <div class="form-group">
                                                                    <label for="message-text" class="control-label mb-10">Discription</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
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
                                        <button type="submit" class="btn btn-success mr-10" data-toggle="modal" data-target="#generate-vacancy-model" class="model_img img-responsive">Generate Vacancy</button>
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table id="datable_1" class="table table-hover display  pb-30" >
                                                    <thead>
                                                        <tr>
                                                            <th>Designation</th>
                                                            <th>Department</th>
                                                            <th>Job Type</th>
                                                            <th>Age Range</th>
                                                            <th>Required Experience</th>
                                                            <th>Required Education</th>
                                                            <th>Discription</th>
                                                            <th>Action</th>														
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Grafic Designer</td>
                                                            <td>Development Department</td>
                                                            <td>Contract</td>
                                                            <td>21-28</td>
                                                            <td>Minimum 1 Year</td>
                                                            <td>Minimum Intermediate</td>
                                                            <td>We are design logos </td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <button class="btn btn-default btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>.Net Developer</td>
                                                            <td>Development Department</td>
                                                            <td>Permanent</td>
                                                            <td>21-28</td>
                                                            <td>Minimum 2 Year</td>
                                                            <td>Minimum BSCS</td>
                                                            <td>We are Develop a Account Software </td>
                                                            <td>
                                                                <div class="button-list">
                                                                    <button class="btn btn-primary btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="fa fa-pencil"></i></button>
                                                                    <button class="btn btn-default btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-settings"></i></button>
                                                                    <button class="btn btn-danger btn-icon-anim btn-square" style="height:30px;width:30px;padding:0;margin:0px 2px 0px 0px"><i class="icon-trash"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Web Developer</td>
                                                            <td>Development Department</td>
                                                            <td>Permanent</td>
                                                            <td>21-28</td>
                                                            <td>Minimum 3 Year</td>
                                                            <td>Minimum BSCS</td>
                                                            <td>We are Develop E-Commerce web </td>
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
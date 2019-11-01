            
            <!-- Left Sidebar Menu -->
            <div class="fixed-sidebar-left">
                <ul class="nav navbar-nav side-nav nicescroll-bar">
                    <li class="navigation-header">
                        <span>Main</span> 
                        <i class="zmdi zmdi-more"></i>
                    </li> 
                    <li>
                        <a class="<?php if((request()->segment(1) == 'home') && (request()->segment(2) == '')){echo'active';} ?>" href="{{route('home')}}"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
                    </li>				
                    <li>
                    <a class="{{ (request()->segment(2) == 'all-candidates') ? 'active' : '' }}" href="{{route('all-candidates')}}"><div class="pull-left"><i class="zmdi zmdi-accounts mr-20"></i><span class="right-nav-text">All Candidates</span></div><div class="clearfix"></div></a>
                    </li>
                    <li>
                        <a class="{{ (request()->segment(2) == 'scheduled-interviews') ? 'active' : '' }}" href="{{route('scheduled-interviews')}}"><div class="pull-left"><i class="zmdi zmdi-calendar mr-20"></i><span class="right-nav-text">Scheduled Interviews</span></div><div class="clearfix"></div></a>
                    </li>
                    <li>
                        <a class="{{ (request()->segment(2) == 'evaluation-preliminary') ? 'active' : '' }} {{ (request()->segment(1) == 'evaluation-communication' ) ? 'active' : '' }} {{ (request()->segment(1) == 'evaluation-interview' ) ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#evaluation_dr"><div class="pull-left"><i class="zmdi zmdi-search-in-file mr-20"></i><span class="right-nav-text">Evaluation</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="evaluation_dr" class="collapse collapse-level-1">
                            <li>
                                <a class="{{ (request()->segment(2) == 'evaluation-preliminary') ? 'active-page' : '' }}" href="{{route('evaluation-preliminary')}}">
                                    <div class="pull-left">
                                        <span class="right-nav-text">Preliminary</span>
                                    </div>
                                    <div class="pull-right">
                                        <span class="label label-primary">5</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a class="{{ (request()->segment(2) == 'evaluation-communication') ? 'active-page' : '' }}" href="{{route('evaluation-communication')}}">
                                    <div class="pull-left">
                                        <span class="right-nav-text">Communication</span>
                                    </div>
                                    <div class="pull-right">
                                        <span class="label label-primary">2</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a class="{{ (request()->segment(2) == 'evaluation-interview') ? 'active-page' : '' }}" href="{{route('evaluation-interview')}}">
                                    <div class="pull-left">
                                        <span class="right-nav-text">Interview</span>
                                    </div>
                                    <div class="pull-right">
                                        <span class="label label-primary">1</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>	
                        </ul>
                    </li>
                    <li>
                        <a class="{{ (request()->segment(2) == 'allocation-dep') ? 'active' : '' }}" href="{{route('allocation-dep')}}"><div class="pull-left"><i class="zmdi zmdi-walk mr-20"></i><span class="right-nav-text">Allocation Dep</span></div><div class="pull-right"><span class="label label-success">8</span></div><div class="clearfix"></div></a>
                    </li>				
                    <li><hr class="light-grey-hr mb-10"/></li>
                    <li class="navigation-header">
                        <span>component</span> 
                        <i class="zmdi zmdi-more"></i>
                    </li>
                    <li>
                        <a class="{{ (request()->segment(2) == 'vacancies') ? 'active' : '' }}" href="{{route('vacancies')}}"><div class="pull-left"><i class="zmdi zmdi-graduation-cap mr-20"></i><span class="right-nav-text">Vacancies</span></div><div class="clearfix"></div></a>
                    </li>
                    <li>
                        <a class="{{ (request()->segment(2) == 'pre-interview-checkin') ? 'active' : '' }}" href="{{route('pre-interview-checkin')}}"><div class="pull-left"><i class="zmdi zmdi-assignment-check mr-20"></i><span class="right-nav-text">Pre Interview Checkin</span></div><div class="clearfix"></div></a>
                    </li>
                    <li>
                        <a href="qaboutlifestyle.html"><div class="pull-left"><i class="zmdi zmdi-assignment mr-20"></i><span class="right-nav-text">Q About Life Style</span></div><div class="clearfix"></div></a>
                    </li>
                    <li>
                        <a class="{{ (request()->segment(2) == 'interviews-timing') ? 'active' : '' }}" href="{{route('interviews-timing')}}"><div class="pull-left"><i class="zmdi zmdi-calendar mr-20"></i><span class="right-nav-text">Interviews Timing</span></div><div class="clearfix"></div></a>
                    </li>         
                    <li><hr class="light-grey-hr mb-10"/></li>
                </ul>
            </div>
            <!-- /Left Sidebar Menu -->
            
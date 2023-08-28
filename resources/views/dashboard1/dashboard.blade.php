<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Soko Aerial Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('style/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('style/vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/vendor/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
	<!-- Summernote -->
    <link href="{{asset('style/vendor/summernote/summernote.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('style/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/skin-3.css')}}">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{asset('style/images/logo-white-3.png')}}" alt="">
                <img class="logo-compact" src="{{asset('style/images/logo-text-white.png')}}" alt="">
                <img class="brand-title" src="{{asset('style/images/logo-text-white.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                         
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{asset('style/images/profile/education/pic1.jpg')}}" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Account: {{Auth::user()->name}} </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                   
                                    <a class="dropdown-item ai-icon" href="{{ route('logout') }}"
                                    
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Signout') }}
                                     <span class="ml-2"></span>
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                  

                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('home')}}">Main Dashboard</a></li>
                           
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-calendar"></i>
                        <span class="nav-text">Events</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{url('all-events')}}">All Events</a></li>
                        <li><a href="{{url('fullcalender')}}">Add Event</a></li>
                      
                    </ul>
                </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Instructors</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('all-instructors')}}">All Instructor</a></li>
                            <li><a href="{{url('add-instructor')}}">Add Instructors</a></li>
                          
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="fa fa-users"></i>
							<span class="nav-text">Students</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('all-students')}}">All Students</a></li>
                            <li><a href="{{url('add-student')}}">Add Students</a></li>
                            
                            
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Courses</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('all-programs')}}">All Courses</a></li>
                            <li><a href="{{url('add-program')}}">Add Courses</a></li>
                           
                        </ul>
                    </li>
				
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-building"></i>
							<span class="nav-text">Departments</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('all-departments')}}">All Departments</a></li>
                            <li><a href="{{url('add-department')}}">Add Departments</a></li>
                            
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Staff</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-staff.html">All Staff</a></li>
                            <li><a href="add-staff.html">Add Staff</a></li>
                           
                        </ul>
                    </li>
				
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i>GH₵</i>
							<span class="nav-text">Fees</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('all-transactions')}}">Fees Collection</a></li>
                            <li><a href="add-fees.html">Add Fees</a></li>
                            <li><a href="fees-receipt.html">Fees Receipt</a></li>
                        </ul>
                    </li>					
                
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row">
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Students</p>
										<h3 class="text-white">{{$scholar}}</h3>
										
									
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-dark">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-user"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Instructors</p>
										<h3 class="text-white">{{$instructor}}</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 1%"></div>
                                        </div>
										<small></small>
									</div>
								</div>
							</div>
						</div>
                    </div>
				
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-graduation-cap"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Courses</p>
										<h3 class="text-white">{{$program}}</h3>
										<div class="progress mb-2 bg-white">
                                          
                                        </div>
									
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="fa fa-money"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Fees Collection</p>
										<h3 class="text-white">GH₵ {{$sum_fees}} </h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 0%"></div>
                                        </div>
										<small></small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-6 col-xxl-6 col-lg-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Soko Aerial student Intake records</h3>
							</div>
							<div class="card-body">
								<div id="morris_bar_stalked" class="morris_chart_height" style="height: 300px !important;"></div>
							</div>
						</div>
					</div>
				<!--dougnut-->
				
				
					
				
				<!--LEARN INN PETRT-->
					
				<!--new detaisl-->	
				
					<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">New Student List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Assigned Instructor</th>
                                                <th scope="col">Date Of Admit</th>
                                                <th scope="col">Fee Status</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Fees</th>
                                                <th scope="col">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
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
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">KamakwesStudio</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('style/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('style/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('style/js/custom.min.js')}}"></script>
    <script src="{{asset('style/js/dlabnav-init.js')}}"></script>	
	
	<!-- Chart sparkline plugin files -->
    <script src="{{asset('style/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('style/js/plugins-init/sparkline-init.js')}}"></script>
	
	<!-- Chart Morris plugin files -->
    <script src="{{asset('style/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('style/vendor/morris/morris.min.js')}}"></script> 
	
    <!-- Init file -->
    <script src="{{asset('style/js/plugins-init/widgets-script-init.js')}}"></script>
	
	<!-- Demo scripts -->
    <script src="{{asset('style/js/dashboard/dashboard.js')}}"></script>
	
	<!-- Summernote -->
    <script src="{{asset('style/vendor/summernote/js/summernote.min.js')}}"></script>
    <!-- Summernote init -->
    <script src="{{asset('style/js/plugins-init/summernote-init.js')}}"></script>
	
	<!-- Svganimation scripts -->
    <script src="{{asset('style/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('style/vendor/svganimation/svg.animation.js')}}"></script>
    <script src="{{asset('style/js/styleSwitcher.js')}}"></script>
		
</body>
</html>
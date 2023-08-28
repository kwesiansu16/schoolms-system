<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Soko Aerial - Update Department details</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('style/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('style/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
	
	<!-- Pick date -->
    <link rel="stylesheet" href="{{asset('style/vendor/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendor/pickadate/themes/default.date.css')}}">

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
                <img class="logo-abbr" src="{{asset('style/images/logo-white.png')}}" alt="">
                <img class="logo-compact" src="{{asset('style/images/logo-text-white.png')}}" alt="">
                <img class="brand-title" src="{{asset('style/images/log.png')}}" alt="">
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
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('dashboard1')}}">Main Dashboard</a></li>
                           
                        </ul>
                    </li>
					<li><a class="ai-icon" href="event-management.html" aria-expanded="false">
							<i class="la la-calendar"></i>
							<span class="nav-text">Event Management</span>
						</a>
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
							<i class="la la-users"></i>
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
                            <li><a href="fees-collection.html">Fees Collection</a></li>
                            <li><a href="add-fees.html">Add Fees</a></li>
                            <li><a href="fees-receipt.html">Fees Receipt</a></li>
                        </ul>
                    </li>					
                
				</ul>
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
                        <li><a href="{{url('fullcalender')}}">Add Instructors</a></li>
                      
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
							<i class="la la-users"></i>
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
                            <li><a href="fees-collection.html">Fees Collection</a></li>
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
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Upadte Department Details</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Departments</a></li>
                          
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Basic Info</h5>
							</div>
							<div class="card-body">
                                <form action="{{ route('department.update', $departments->id) }}" method="POST">
                                    @csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Department Name</label>
												<input type="text" value="{{$departments->dep_name}}" name="dep_name" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" value="{{$departments->dep_details}}" name="dep_details" class="form-control">
											</div>
										</div>
				
									
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" name="submit" class="btn btn-success" style="">Update</button>
											
										</div>
									</div>
								</form>
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

	<!-- Svganimation scripts -->
    <script src="{{asset('style/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('style/vendor/svganimation/svg.animation.js')}}"></script>
    <script src="{{asset('style/js/styleSwitcher.js')}}"></script>
	
	<!-- pickdate -->
    <script src="{{asset('style/vendor/pickadate/picker.js')}}"></script>
    <script src="{{asset('style/vendor/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('style/vendor/pickadate/picker.date.js')}}"></script>
	
	<!-- Pickdate -->
    <script src="{{asset('style/js/plugins-init/pickadate-init.js')}}"></script>
	
</body>
</html>
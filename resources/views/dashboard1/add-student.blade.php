<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Soko Aerial - Add students </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('style/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('style/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
	
	<!-- Pick date -->
    <link rel="stylesheet" href="{{asset('style/vendor/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendor/pickadate/themes/default.date.css')}}">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

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
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{asset('style/images/profile/education/pic1.jpg')}}" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a class="dropdown-item ai-icon" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                     
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
                            <h4 style="color:black;">Add Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Student</a></li>
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
                                <form action="{{url('sokostudents-store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" name="first_name" value="{{old('first_name')}}" class="form-control {{ $errors->has('first_name') ? ' border-danger' : '' }}">
                                                <small class="form-text text-danger">{!! $errors->first('first_name') !!}</small>
											</div>
										</div>
                                     
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" name="last_name" value="{{old('last_name')}}" class="form-control {{ $errors->has('last_name') ? ' border-danger' : '' }}">
                                                <small class="form-text text-danger">{!! $errors->first('last_name') !!}</small>
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label for="birthday" class="form-label">Date of Birth</label>

                                                <input type="date" id="birthday" value="{{old('birth_date')}}" class="form-control{{ $errors->has('birth_date') ? ' border-danger' : '' }}" name="birth_date">
                                                <small class="form-text text-danger">{!! $errors->first('birth_date') !!}</small>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" name="email" value="{{old('email')}}" class="form-control{{ $errors->has('email') ? ' border-danger' : '' }}">
                                                <small class="form-text text-danger">{!! $errors->first('email') !!}</small>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Registration Date</label>
												<input name="registration_date" value="{{old('registration_date')}}" class="datepicker-default form-control{{ $errors->has('registration_date') ? ' border-danger' : '' }}" id="datepicker">
                                                <small class="form-text text-danger">{!! $errors->first('registration_date') !!}</small>
											</div>
										</div>
                                        <div class="col-md-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select class="form-control{{ $errors->has('gender') ? ' border-danger' : '' }}" value="{{old('gender')}}"  name="gender">
													<option value="Gender">Select Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
                                                <small class="form-text text-danger">{!! $errors->first('gender') !!}</small>
											</div>
										</div>
                                        
                                        <div class="col-md-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Course</label>
                                                <select class="form-control{{ $errors->has('programname') ? ' border-danger' : '' }}" value="{{old('programname')}}"  name="programname">
                                                    <option value="Select course">Select Course</option>
                                                    @foreach($programs as  $program)
                                                    <option value="{{$program->programname}}">{{$program->programname}}</option>
                                                        
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-danger">{!! $errors->first('programname') !!}</small>
                                            </div>
                                        </div>

                                        
                                       
										
									
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" name="phone_number" value="{{old('phone_number')}}" class="form-control{{ $errors->has('phone_number') ? ' border-danger' : '' }}">
                                                <small class="form-text text-danger">{!! $errors->first('phone_number') !!}</small>

											</div>
										</div>
									
									
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Completion</label>
												<input name="completion_date" value="{{old('completion_date')}}" class="datepicker-default form-control{{ $errors->has('completion_date') ? ' border-danger' : '' }}" id="datepicker1">
                                                <small class="form-text text-danger">{!! $errors->first('completion_date') !!}</small>
											</div>
										</div>
									
									
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea class="form-control{{ $errors->has('address') ? ' border-danger' : '' }}" value="{{old('address')}}" name="address" rows="5"></textarea>
                                                <small class="form-text text-danger">{!! $errors->first('address') !!}</small>
											</div>
										</div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">
                                                <label class="form-label">Profile Image</label>
												<input name="image" id="image" type="file" class="dropify" data-default-file="">
											</div>
										</div>
									
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" name="submit" class="btn btn-dark">Submit</button>
											
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

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>

    <script type="text/javascript">
        $(document).on('change','.departments',function(){ 
        departmentid = $(this).val();
        $.ajax({
            url: 'sokostudent/programs',
            dataType: "json",
            data: {"id":departmentid, "_token": "{{ csrf_token() }}"},
            method: "post",
            success: function(data){
                var programs = '<option>-- Select Course --</option>';
                var arr = data.programs.length;
                var aa = data.programs;
                for(var i=0;i<arr;i++){
                   programs += '<option value="'+aa[i].id+'">'+aa[i].programname+'</option>';
                   
                }
                $(".programs").html(programs);
            }
        });
    });
    </script>
	
</body>
</html>
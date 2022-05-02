

<!doctype html>
<html lang="en" dir="ltr">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="">
		<meta name="Author" content="">
		<meta name="Keywords" content=""/>

                <!-- Title -->
        <title> BWT</title>

        <!-- Favicon -->
        <link rel="icon" href="http://54.153.36.130/assets/img/favicon.png" type="image/x-icon"/>

       <!-- Bootstrap css-->
        <link href="{{asset('bwt-admin/assets/plugins/bootstrap/css/bootstrap.min.css"')}} rel="stylesheet"/>
        <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">

        <!-- Icons css -->
        <link href="{{asset('bwt-admin/assets/css/icons.css')}}" rel="stylesheet">

        <!--  Right-sidemenu css -->
        <link href="{{asset('bwt-admin/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

        <!-- P-scroll bar css-->
        <link href="{{asset('bwt-admin/assets/plugins/perfect-scrollbar/p-scrollbar.css" ')}}rel="stylesheet" />

        <!--  Left-Sidebar css -->
        <link rel="stylesheet" href="{{asset('bwt-admin/assets')}}/css/sidemenu.css">

        <!-- Style css -->
        <link href="{{asset('bwt-admin/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('bwt-admin/assets/css/style-dark.css')}}" rel="stylesheet">


		<!-- Maps css -->
		<link href="{{asset('bwt-admin/assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">


        <!-- Skinmodes css -->
        <link href="{{asset('bwt-admin/assets/css/skin-modes.css" ')}}rel="stylesheet" />

        <!-- Animations css -->
        <link href="{{asset('bwt-admin/assets/css/animate.css')}}" rel="stylesheet">

        <!---Switcher css-->
        <link href="{{asset('bwt-admin/assets/switcher/css/switcher.css')}}" rel="stylesheet">
        <link href="{{asset('bwt-admin/assets/switcher/demo.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <style type="text/css">
        	.side-menu__label{color: #fff;}
        	.side-menu__item .far, .side-menu__item .fa { color: #fff; margin-right: 16px;}
        	.side-menu .slide .side-menu__item, .side-menu__item.active .side-menu__label { color: #fff; }
        	.app-sidebar .side-item.side-item-category { text-transform: capitalize; }
        	.app-sidebar .side-item.side-item-category i { font-size: 13px !important;}
        	.app-sidebar .side-item.side-item-category{ padding: 10px 20px;}
        	.slide:hover .side-menu__label { color: #ffffff!important; fill: #ffffff!important;}
        	.slide:hover .angle,  { color: #ffffff!important; fill: #ffffff!important;}
        	.slide { margin: 0; border-bottom: 1px solid #773067f7;}
        	 .slide.is-expanded .side-menu__label, .slide.is-expanded .angle { color: #ffffff!important;}
        	.slide-menu.open li:last-child{ border-bottom: none !important } 
        	.app-sidebar .slide .side-menu__item.active::before { background: #ffffff; }
        </style>
	</head>

    <body class="main-body app sidebar-mini">

        <!-- Page -->
        <div class="page">

            		<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar sidebar-scroll">
				<div class="main-sidebar-header active">
					<a class="desktop-logo logo-light active" href="{{url('admin/dashboard')}}"><img src="{{asset('bwt-admin/assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>

					<a class="logo-icon mobile-logo icon-light active" href="{{url('admin/dashboard')}}"><img src="{{asset('bwt-admin/assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>

				</div>
				<div class="main-sidemenu">

					<ul class="side-menu">

					<li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i class="far fa-file-video"></i> <span class="side-menu__label">Home</span><i class="angle fe fe-chevron-down"></i></a>

					<ul class="slide-menu">
					<li class="side-item side-item-category"><i class="fas fa-ad"></i> <a href="{{ route('admin.subscriber.list')}}">Subscribers</a></li>

					</ul>
					</li>

						<li class="side-item side-item-category"><i class="fas fa-th-large"></i> <a href="{{url('admin/dashboard')}}">Dashboard</a> </li>

						{{-- <li class="side-item side-item-category"><i class="fas fa-th-large"></i> <a href="{{route('admin.cmspages')}}">CMS pages</a> </li> --}}

                        <li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ route('admin.audition.index')}}">Audition</a></li>

                         <li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ route('admin.audition.studio')}}">Studio</a></li>


						<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ route('admin.getcustomerList')}}">Customer</a></li>


						<li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i class="far fa-file-video"></i> <span class="side-menu__label">Product</span><i class="angle fe fe-chevron-down"></i></a>

							<ul class="slide-menu">
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ url('admin/products/list') }}">Products List</a></li>

								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.product-category') }}">Product Category List</a></li>
							</ul>
						</li>


						<li class="slide"><a class="side-menu__item" data-toggle="slide" href="{{route('admin.member.index')}}"><i class="fa fa-user"></i>  <span class="side-menu__label">BWT Community Circle</span> <i class="angle fe fe-chevron-down"></i></a>

							<ul class="slide-menu">
								
	 							<li class="side-item side-item-category"><i class="fas fa-ad"></i> <a href="{{ route('admin.focus.index')}}">Focus Group List</a></li>
								<li class="side-item side-item-category"><i class="fas fa-ad"></i> <a href="{{ route('admin.judges.index')}}">State Judges List</a></li>
								<!-- <li class="side-item side-item-category"><i class="fas fa-ad"></i> <a href="{{ route('admin.advertiser.index')}}">Advertiser List</a></li> -->
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ route('admin.sponsor.index')}}">Sponsor List</a></li>
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{  route('admin.internship.index')}}">Intern List</a></li>
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{  route('admin.employee.index')}}">Employee List</a></li>
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.partner.index')}}">Partner List</a></li>
								<!-- <li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.member.index')}}">Members</a></li> -->
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.member.index','r=Producers')}}">Producers</a></li>
							    <li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.member.index','r=Host Producers')}}">Host Producers</a></li>
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.member.index','r=Photographer')}}">Photographer</a></li>
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.member.index','r=Crew Production')}}">Crew Production</a></li>
								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.member.index','r=Team Management')}}">Team Management</a></li>
							</ul>
						</li>

						<li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i class="far fa-file-video"></i> <span class="side-menu__label">Videos</span><i class="angle fe fe-chevron-down"></i></a>

							<ul class="slide-menu">
							<li class="side-item side-item-category"><i class="fas fa-file-video"></i> <a href="{{route('admin.videos')}}"> Video List</a> </li>

								<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{route('admin.category.index')}}">Video Category List</a></li>
							</ul>
						</li>


						<li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i class="far fa-file-video"></i> <span class="side-menu__label">Events</span><i class="angle fe fe-chevron-down"></i></a>

							<ul class="slide-menu">
							
						<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ url('admin/events') }}">Admin Events </a></li>
						<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ url('admin/events/request') }}">Users Events </a></li>
							</ul>
						</li>

						{{-- <li class="side-item side-item-category"><i class="fa fa-language"></i> <a href="{{route('admin.language.index')}}">Language List</a></li> --}}
						{{-- <li class="side-item side-item-category"><i class="fas fa-images"></i> <a href="{{ route('admin.banner.index')}}">Banner List</a></li> --}}
						
						

						<li class="side-item side-item-category"><i class="fa fa-address-book"></i> <a href="{{ route('admin.contact.index')}}">Contact form List</a></li>
						<li class="side-item side-item-category"><i class="fa fa-comments"></i> <a href="{{ route('admin.feedback.index')}}">Feedback form List</a></li>
						{{-- <li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{  route('admin.student.index')}}">Student List</a></li> --}}
						<li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ route('admin.gallery.index')}}">Gallery</a></li>
                        <li class="side-item side-item-category"><i class="far fa-file-video"></i> <a href="{{ route('admin.getUserList')}}">Admin User</a></li>
						<li class="side-item side-item-category"><i class="fa fa-user-plus"></i> <a href="{{route('admin.usercategory.index')}}">User Category List</a></li>
					</ul>
			</aside>
			<!-- main-sidebar -->
            <!-- main-content -->
			<div class="main-content app-content">

            				<!-- main-header -->
				<div class="main-header sticky side-header nav nav-item layout-pin">
					<div class="container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="{{url('admin/dashboard')}}"><img src="{{asset('bwt-admin/assets/img/brand/logo.png')}}" class="logo-1" alt="logo"></a>

							</div>

						<div class="app-sidebar__toggle" data-toggle="sidebar">
								<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
							</div>
							<a class="animated-arrow hor-header-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->

						</div>
						<div class="main-header-right">
						<div class="nav nav-item  navbar-nav-right ml-auto">


								<div class="dropdown main-profile-menu nav nav-item nav-link">
									<a class="profile-user text-white d-flex" href="#">
                                        {{-- <img alt="" src="{{asset('bwt-admin//assets/img/faces/6.jpg')}}"> --}}
                                        {{auth()->user()->name}}
                                    </a>
									<div class="dropdown-menu">
										{{-- <div class="main-header-profile bg-primary p-3">
											<div class="d-flex wd-100p">
												<div class="main-img-user">
                                                    <img alt="" src="{{asset('bwt-admin//assets/img/faces/6.jpg')}}" class="">
                                                </div>
												<div class="ml-3 my-auto">
													<h6>{{auth()->user()->name}}</h6>
												</div>
											</div>
										</div> --}}
										<a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="bx bx-log-out"></i> Sign Out
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
									</div>
								</div>



							</div>
						</div>
					</div>
				</div>
				<!-- /main-header -->
                <!-- container -->
				<div class="container-fluid">
                    @yield('content')
                </div>
				<!-- Container closed -->

			</div>
			<!-- main-content closed -->
                        <!-- Footer opened -->
            <div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright © 2021 <a href="#">BWT</a>. All rights reserved.</span>
				</div>
			</div>
			<!-- Footer closed -->
        </div>
		<!-- End Page -->


        <!-- JQuery min js -->
        <script src="{{asset('bwt-admin/assets/plugins/jquery/jquery.min.js')}}"></script>

		<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<script>
    $('#myTable').DataTable();

</script>


        <!-- Bootstrap js -->
        <script src="{{asset('bwt-admin/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('bwt-admin/assets/plugins/bootstrap/js/bootstrap.js')}}"></script>

        <!-- Ionicons js -->
        <script src="{{asset('bwt-admin/assets/plugins/ionicons/ionicons.js')}}"></script>

        <!-- Moment js -->
        <script src="{{asset('bwt-admin/assets/plugins/moment/moment.js')}}"></script>

        <!-- P-scroll js -->
        <script src="{{asset('bwt-admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('bwt-admin/assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

        <!-- Sticky js -->
        <script src="{{asset('bwt-admin/assets/js/sticky.js')}}"></script>

        <!-- eva-icons js -->
        <script src="{{asset('bwt-admin/assets/js/eva-icons.min.js')}}"></script>

        <!-- Rating js-->
        <script src="{{asset('bwt-admin/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
        <script src="{{asset('bwt-admin/assets/plugins/rating/jquery.barrating.js')}}"></script>

        <!-- Sidebar js -->
        <script src="{{asset('bwt-admin/assets/plugins/side-menu/sidemenu.js')}}"></script>

        <!-- Right-sidebar js -->
        <script src="{{asset('bwt-admin/assets/plugins/sidebar/sidebar.js')}}"></script>
        <script src="{{asset('bwt-admin/assets/plugins/sidebar/sidebar-custom.js')}}"></script>
        <script src="{{asset('bwt-admin/assets/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('bwt-admin/assets/plugins/morris.js/morris.min.js')}}"></script>
        <script src="{{asset('bwt-admin/assets/js/chart.morris.js')}}"></script>


		<!--Internal  Chart.bundle js -->
		<script src="{{asset('bwt-admin/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!--Internal Sparkline js -->
		<script src="{{asset('bwt-admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Raphael js -->
		<script src="{{asset('bwt-admin/assets/plugins/raphael/raphael.min.js')}}"></script>

		<!--Internal Apexchart js-->
		<script src="{{asset('bwt-admin/assets/js/apexcharts.js')}}"></script>

		<!-- Internal Map -->
		<script src="{{asset('bwt-admin/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{asset('bwt-admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

		<!--Internal  index js -->
		<script src="{{asset('bwt-admin/assets/js/index.js')}}"></script>
		<script src="{{asset('bwt-admin/assets/js/jquery.vmap.sampledata.js')}}"></script>


        <!-- Horizontalmenu js-->
        <script src="{{asset('bwt-admin/assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js')}}"></script>

        <!-- custom js -->
        <script src="{{asset('bwt-admin/assets/js/custom.js')}}"></script>

        <!-- Switcher js -->
	<script src="{{asset('bwt-admin/assets/switcher/js/switcher.js')}}"></script>

    </body>

</html>

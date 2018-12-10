<!DOCTYPE html>
<html lang="en">
<head>
<title>GDBD</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/nazstyle.css') }}">
</head>

<body>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">						
						
						<div class="user_box ml-auto">
							@guest
								<div class="user_box_login user_box_link"><a href="{{ route('login') }}">login</a></div>
								<div class="user_box_register user_box_link"><a href="{{ route('register') }}">register</a></div>
							@else							
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                           
							@endguest
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
				
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">GDBD</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								
												
								
								@guest
								<li class="main_nav_item"><a href="#">home</a></li>		
								@else
								<li class="main_nav_item"><a href="#">home</a></li>	
								<li class="main_nav_item"><a href="/user_packages">packages</a></li>
								<li class="main_nav_item"><a href="/subscribed_packages/{{Auth::user()->id}}">my subscriptions</a></li>
								@if(Auth::user()->isAdmin)
								<li class="main_nav_item"><a href="/new_apartment">add apartment</a></li>
								
								<li class="main_nav_item"><a href="/new_hotel">add hotel</a></li>


								<li class="main_nav_item"><a href="/new_package">add package</a></li>
								@endif
								@endguest


								

							</ul>
						</div>
						
						
					</div>
				
			</div>	
		</nav>

	</header>



	<!-- Home -->

	
	<!-- Search -->



	   @yield('content')
	<!-- CTA -->




	<!-- Offers -->


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="offset-md-3 col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="{{ asset('images/logo.png') }}" alt="">GDBD</a></div>
							</div>
							<p class="footer_about_text">People travel to faraway places to watch, in fascination, the people they ignore at home.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="{{ asset('images/placeholder.svg') }}" alt=""></div></div>
									<div class="contact_info_text">Banasree,rampura,dhaka</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="{{ asset('images/phone-call.svg') }}" alt=""></div></div>
									<div class="contact_info_text">0177896545</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="{{ asset('images/message.svg') }}" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">gdbd@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="{{ asset('images/planet-earth.svg') }}" alt=""></div></div>
									<div class="contact_info_text"><a href="https://gdpd.com">www.gdbd.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>


</div>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
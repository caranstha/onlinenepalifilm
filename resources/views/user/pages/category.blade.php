
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Nepali Movies</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{url('lib1/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url('lib1/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url('lib1/css/medile.css')}}" rel='stylesheet' type='text/css' />
<link href="{{url('lib1/css/single.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{url('lib1/css/contactstyle.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('lib1/css/faqstyle.css')}}" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{url('lib1/css/font-awesome.min.css')}}" />
<!-- //font-awesome icons -->
<!-- news-css -->
<link rel="stylesheet" href="{{url('lib1/news-css/news.css')}}" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="{{url('lib1/list-css/list.css')}}" type="text/css" media="all" />
<!-- //list-css -->
<!-- js -->
<script type="text/javascript" src="{{url('lib1/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{url('lib1/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{url('lib1/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="{{url('lib1/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{url('lib1/js/owl.carousel.js')}}"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [414,4]
	 
		});
	 
	}); 
</script> 
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="{{url('user/index')}}"><h1>Online Nepali<span>Movies</span></h1></a>
			</div>
			<div class="w3_search">
				<form action="{{url('user/search')}}" method="post">
				{{csrf_field()}}
					<input type="text" name="movie" id="searchmovie" placeholder="Search" required="">

					<input type="submit" name="search" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Click Me</div>
							  </div>
							  <div class="form">
								<h3>Login to your account</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Create an account</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="email" name="Email" placeholder="Email Address" required="">
								  <input type="text" name="Phone" placeholder="Phone Number" required="">
								  <input type="submit" value="Register">
								</form>
							  </div>
							  <div class="cta"><a href="#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{url('user/index')}}">Home</a></li>
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3" name="">
									<li>
									<div class="col-sm-4">

										<ul class="multi-column-dropdown">
											
											@foreach($genres as $row)

											<li><a href="{{url('user/genres')}}/{{$row->genres}}">{{$row->genres}}</a></li>
										@endforeach									

									</ul>
									</div>
									
									<div class="clearfix"></div>
									</li>
								</ul>

								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
										@foreach($category as $row)
											<li><a href="{{url('user/category')}}/{{$row->category}}">{{$row->category}}</a></li>
										@endforeach
										</ul>
									</div>
									
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>

							
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<!-- /w3l-medile-movies-grids -->
	<div class="general-agileits-w3l">
		<div class="w3l-medile-movies-grids">

				<!-- /movie-browse-agile -->
				
				      <div class="movie-browse-agile">
					     <!--/browse-agile-w3ls -->
						<div class="browse-agile-w3ls general-w3ls">
								<div class="tittle-head">
									<h4 class="latest-text">{{$categoryname}}</h4>
									<div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li><a href="{{url('user/index')}}">Home</a></li>
											  <li class="active">{{$categoryname}}</li>
											</ol>
										</div>
									</div>
								</div>
									@foreach($listcategory as $row)

								     <div class="container">
							<div class="browse-inner">
							   <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="{{url('user/singlepage')}}/{{$row->id}}" class="hvr-shutter-out-horizontal"><img src="{{url($row->image)}}" title="album-name" alt=" " width="150" height="300" />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="{{url('user/index')}}">{{$row->title}}</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											<div class="block-stars">
												<ul class="w3l-ratings">
													     @if(round($row->avrate)==0)
												<li><a href="{{url('user/ratings1')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings2')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings3')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings4')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings5')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												@endif

												@if(round($row->avrate)==1)
												<li><a href="{{url('user/ratings1')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings2')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings3')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings4')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings5')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												@endif


												@if(round($row->avrate)==2)
												<li><a href="{{url('user/ratings1')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings2')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings3')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings4')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings5')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												@endif

												@if(round($row->avrate)==3)
												<li><a href="{{url('user/ratings1')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings2')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings3')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings4')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings5')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												@endif

												@if(round($row->avrate)==4)
												<li><a href="{{url('user/ratings1')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings2')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings3')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings4')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings5')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												@endif

												@if(round($row->avrate)==5)
												<li><a href="{{url('user/ratings1')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings2')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings3')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings4')}}/{{$row->id}}"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="{{url('user/ratings5')}}/{{$row->id}}"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												@endif
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben two">
										<p>NEW</p>
									</div>	
									</div>



									@endforeach
								   

								<div class="clearfix"> </div>
								</div>
								</div>
						</div>
				<!--//browse-agile-w3ls -->
						<div class="blog-pagenat-wthree">
							<ul>
							
							{!!$listcategory->links();!!}
								</ul>
						</div>
					</div>
				    <!-- //movie-browse-agile -->
				   <!--body wrapper start-->
				<!--body wrapper start-->
					
						<!--body wrapper end-->
					</div>	
			</div>	
		</div>
	<!-- //w3l-medile-movies-grids -->
	</div>
	<!-- //comedy-w3l-agileits -->
<!-- footer -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('#subscribe').click(function(e){
			e.preventDefault();
			var form=$(this).parents("form:first");
			var dataString = form.serialize();
			$.ajax({

				url:"{{url('user/subscribe')}}",
				type:"POST",
				data:dataString,
				success:function(data)
			{
				//alert("inserted");
				$("#out").html(data);
				$("#sub").val('');

			}

			});
		});
	});




</script>
	<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h2>Subscribe to us</h2>
						<div class="w3ls_footer_grid_left1_pos">
							<form action="" method="post">
								{{csrf_field()}}
								<input type="email" id="sub" name="email" placeholder="Your email..." required="">
								<input type="submit" value="Send" id="subscribe">
							</form>
							<div id="out"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_right">
					<a href="{{url('user/index')}}"><h2>Online Nepali<span>Movies</span></h2></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>&copy; 2016 Online Nepali Movies. All rights reserved | Design by <a href="http://facebook.com/sthacaran">Caran Shrestha</a></p>
			</div>
			<div class="col-md-7 w3ls_footer_grid1_right">
				<ul>
					<li>
						<a href="{{url('user/index')}}">Movies</a>
					</li>
					
					<li>
						<a href="{{url('user/pages/contact')}}">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="{{url('lib1/js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
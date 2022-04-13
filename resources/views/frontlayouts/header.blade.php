<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- blog-right-sidebar31:55-->
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Olx</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('public/frontend/images/favicon.png')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Material Design Iconic Font-V2.2.0 -->
         <link rel="stylesheet" href="{{url('public/frontend/css/material-design-iconic-font.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('public/frontend/css/font-awesome.min.css')}}"> 
        <!-- Font Awesome Stars-->
         <link rel="stylesheet" href="{{url('public/frontend/css/fontawesome-stars.css')}}">
        <!-- Meanmenu CSS -->
         <link rel="stylesheet" href="{{url('public/frontend/css/meanmenu.css')}}"> 
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/owl.carousel.min.css')}}">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/slick.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/animate.css')}}">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/jquery-ui.min.css')}}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/venobox.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/nice-select.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/magnific-popup.css')}}">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{url('public/frontend/css/bootstrap.min.css')}}">
        <!-- Helper CSS -->
        <!-- <link rel="stylesheet" href="{{url('public/frontend/css/helper.css')}}"> -->
        <!-- Main Style CSS -->
         <link rel="stylesheet" href="{{url('public/frontend/css/style.css')}}">
        <!-- Responsive CSS -->
         <link rel="stylesheet" href="{{url('public/frontend/css/select2.min.css')}}">
         <link rel="stylesheet" href="{{url('public/frontend/css/bootstrap.min.css')}}">
         <link rel="stylesheet" href="{{url('public/frontend/slick/slick.css')}}">
         <link rel="stylesheet" href="{{url('public/frontend/slick/slick-theme.css')}}">



        <!-- Modernizr js -->
         <script src="{{url('public/frontend/slick/jquery.min.js')}}"></script>   
         <script src="{{url('public/frontend/slick/slick.min.js')}}"></script>

         <!-- js -->
         <script src="{{url('public/frontend/js/select2.min.js')}}"></script>
         <script src="{{url('public/frontend/js/popper.min.js')}}"></script>
         <script src="{{url('public/frontend/js/jquery.slim.min.js')}}"></script>
         <script src="{{url('public/frontend/js/bootstrap.bundle.min.js')}}"></script>




        


    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header class="header">
		<div class="top_bar">
			<div class="container">
				<div class="col-md-12 col-lg-12 col-sm-12 top_wraps">
				<div class="row">
				<div class="col-md-1 col-lg-1 col-sm-1 col-2 text-center" style="padding-right: 0px;">
				<a href="{{ url('/') }}">  
                        <img src="{{ url('public/frontend/images/menu/logo/2.png') }}" style="width: 53%;margin: -14%;" alt="">
                        </a>
				</div>
			<div class="col-md-8 col-lg-8 col-sm-10 col-10" style="padding: 0px;">
			<form action="#" class="search_wrapss">
				<div class="col-md-12 col-lg-12 col-sm-12 serach_wraps">
					<div class="col-md-4 col-lg-4 col-sm-4 col-5 search_wrap">
					<select class="form-control select_location" id="sel1" name="sellist1">
					    <option data-image="images/navigatior.png">Mohali</option>
					    <option data-image="images/navigatior.png">Phagwara</option>
					    <option data-image="images/navigatior.png">Hoshiarpur</option>
					    <option data-image="images/navigatior.png">Delhi</option>
					    <option data-image="images/navigatior.png">Etc</option>
					</select>
				</div>
				<div class="col-md-8 col-lg-8 col-sm-8 col-7 search_wrap">
					<div class="input-group">
					    <input type="text" class="form-control" placeholder="Find Cars, Mobile Phones and more... ">
					    <div class="input-group-append">
					      <button class="btn btn-secondary" type="button">
					        <i class="fa fa-search"></i>
					      </button>
					    </div>
					  </div>
				</div>
				</div>
					      
					</form>
				</div>
					<div class="col-md-3 col-lg-3 col-sm-12">
					<ul class="navbar-nav">
						<li class="nav-item">
							<select class="form-control language" id="language" name="language">
							    <option>English</option>
							    <option>Hindi</option>
							</select>
						</li>
						<li class="nav-item">
							<a class="nav-link login_etc" href="#">Login</a>
						</li>
						<li class="nav-item sell_wrap">
							<a class="nav-link" href="#">+ Sell</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>
		</div>

		<script type="text/javascript">
			$(".select_location").select2({
			    templateResult: formatState,
			    templateSelection: formatState
			});

			function formatState (opt) {
			    if (!opt.id) {
			        return opt.text.toUpperCase();
			    } 

			    var optimage = $(opt.element).attr('data-image'); 
			    console.log(optimage)
			    if(!optimage){
			       return opt.text.toUpperCase();
			    } else {                    
			        var $opt = $(
			           '<span><img src="' + optimage + '" width="20px" /> ' + opt.text.toUpperCase() + '</span>'
			        );
			        return $opt;
			    }
			};
	</script>

	<!-- *********************************************Navbar*********************************************** -->
	<nav class="navbar navbar-expand-lg main_navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          All Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <span class="text-uppercase text-white heading_mega-mnu"><a href="#">OLX Autos (Cars)</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="#">Properties</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">For Sale: Houses & Apartments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">For Rent: Houses & Apartments</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Lands & Plots</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">For Rent: Shops & Offices</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">For Sale: Shops & Offices</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">PG & Guest Houses</a>
                </li>
              </ul>

              <span class="text-uppercase text-white heading_mega-mnu"><a href="#">Mobiles</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="#">Mobile Phones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Accessories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tablets</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-3">
              	<span class="text-uppercase text-white heading_mega-mnu"><a href="#">Jobs</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Data entry & Back office</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sales & Marketing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">BPO & Telecaller</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">Driver</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Office Assistant</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Delivery & Collection</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Teacher</a>
                </li>
              </ul>

              <span class="text-uppercase text-white heading_mega-mnu"><a href="#">Bikes</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Motorcycles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Scooters</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Spare Parts</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">Bicycles</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-3">
                <span class="text-uppercase text-white heading_mega-mnu"><a href="#">Electronics & Appliances</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">TVs, Video - Audio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kitchen & Other Appliances</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Computers & Laptops</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">Cameras & Lenses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Games & Entertainment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Fridges</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Computer Accessories</a>
                </li>
              </ul>

              <span class="text-uppercase text-white heading_mega-mnu"><a href="#">Commercial Vehicles & Spares</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Commercial & Other Vehicles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Spare Parts</a>
                </li>
              </ul>

              <span class="text-uppercase text-white heading_mega-mnu"><a href="#">Furniture</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Sofa & Dining</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Beds & Wardrobes</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">Home Decor & Garden</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kids Furniture</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Other Household Items</a>
                </li>
              </ul>

              </div>

            
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      	
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>

     {{-- <li class="nav-item">
        <a class="nav-link" href="#">Motorcycles</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Mobile Phones</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">For Sale: Houses & Apartments</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Scooters</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Commercial & Other Vehicles</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">For Rent: Houses & Apartments</a>
      </li>
--}}
    </ul>
  </div>


</nav>
<script type="text/javascript">
	$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
  if ($(window).width() >= 980){  

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
    // do something here
  } 
});  
  
  

// document ready  
});
</script>
	<!-- *********************************************Navbar end*********************************************** -->
	</header>
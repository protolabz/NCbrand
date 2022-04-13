<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Local</title>
      <link rel="stylesheet" href="{{url('public/front/css/bootstrap.min.css')}}">
      <script src="{{url('public/front/js/jquery.slim.min.js')}}"></script>
      <script src="{{url('public/front/js/popper.min.js')}}"></script>
      <script src="{{url('public/front/js/bootstrap.bundle.min.js')}}"></script>
      <link href="{{url('public/front/css/select2.min.css')}}" rel="stylesheet" />
      <link href="{{url('public/front/css/style.css')}}" rel="stylesheet" />
      <script src="{{url('public/front/js/select2.min.js')}}"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <header class="header">
         <div class="top_bar">
            <div class="container">
               <div class="col-md-12 col-lg-12 col-sm-12 top_wraps">
                  <div class="row">
                     <div class="col-md-1 col-lg-1 col-sm-1 col-2 text-center" style="padding-right: 0px;">
                        <a href="{{url('/')}}">
                        <img src="{{url('public/frontend/images/menu/logo/2.png')}}" style="width: 53%;margin: -14%;" alt="">
                        </a>
                     </div>
                     <div class="col-md-8 col-lg-8 col-sm-8 col-10" style="padding: 0px;">
                        <form action="#" class="search_wrapss">
                           <div class="col-md-12 col-lg-12 col-sm-12 serach_wraps">
                              <div class="col-md-4 col-lg-4 col-sm-4 col-5 search_wrap">
                                 <select class="form-control select_location" id="sel1" name="sellist1">
                                    <option data-image="{{url('public/front/images/navigatior.png')}}">Mohali</option>
                                    <option data-image="{{url('public/front/images/navigatior.png')}}">Phagwara</option>
                                    <option data-image="{{url('public/front/images/navigatior.png')}}">Hoshiarpur</option>
                                    <option data-image="{{url('public/front/images/navigatior.png')}}">Delhi</option>
                                    <option data-image="{{url('public/front/images/navigatior.png')}}">Etc</option>
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
                     <div class="col-md-3 col-lg-3 col-sm-3">
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
         <!-- *********************************************Navbar*********************************************** -->
         <nav class="navbar navbar-expand-lg main_navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         </nav>
         <!-- *********************************************Navbar end*********************************************** -->
      </header>
      <div class="overview_wrapper">
         <ul class="overview_menus">
            <li class="first_menu-overview"><a href="#">Overview</a></li>
            <li class="right_meny-wraps">
               <a href="#">
                  <svg width="28px" height="28px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                     <path class="rui-4K4Y7" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                  </svg>
                  <span>Wishlist</span>
               </a>
            </li>
            <li class="right_meny-wraps">
               <a href="#">
                  <svg width="28px" height="28px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                     <path class="rui-4K4Y7" d="M768 853.333c-47.104 0-85.333-38.229-85.333-85.333s38.229-85.333 85.333-85.333c47.104 0 85.333 38.229 85.333 85.333s-38.229 85.333-85.333 85.333zM256 597.333c-47.104 0-85.333-38.229-85.333-85.333s38.229-85.333 85.333-85.333c47.104 0 85.333 38.229 85.333 85.333s-38.229 85.333-85.333 85.333zM768 170.667c47.104 0 85.333 38.229 85.333 85.333s-38.229 85.333-85.333 85.333c-47.104 0-85.333-38.229-85.333-85.333s38.229-85.333 85.333-85.333zM768 597.333c-52.437 0-98.688 24.107-130.005 61.312l-213.675-123.392c1.067-7.637 2.347-15.275 2.347-23.253 0-4.779-1.024-9.259-1.408-13.909l218.283-126.037c31.104 33.408 75.179 54.613 124.459 54.613 94.251 0 170.667-76.416 170.667-170.667s-76.416-170.667-170.667-170.667c-94.251 0-170.667 76.416-170.667 170.667 0 14.208 2.261 27.819 5.504 41.003l-205.867 118.912c-30.763-45.013-82.389-74.581-140.971-74.581-94.251 0-170.667 76.416-170.667 170.667s76.416 170.667 170.667 170.667c55.467 0 104.235-26.88 135.424-67.84l209.195 120.747c-2.048 10.539-3.285 21.333-3.285 32.427 0 94.251 76.416 170.667 170.667 170.667s170.667-76.416 170.667-170.667c0-94.251-76.416-170.667-170.667-170.667z"></path>
                  </svg>
                  <span>Share</span>
               </a>
            </li>
         </ul>
      </div>
      <script type="text/javascript">
         $(window).scroll(function(){
           var sticky = $('.overview_wrapper'),
               scroll = $(window).scrollTop();
         
           if (scroll >= 580) sticky.addClass('fixed');
           else sticky.removeClass('fixed');
         });
      </script>
      <!--***************************************************** overview_end ******************************************************-->
      <section class="slider" id="first_slider">
         <div class="container main_sldier_first">
         <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="row">
               <div class="col-md-8 col-lg-8 col-sm-8 col-12">
                  <!--************** car feature ***************************************-->
                  <div class="car_wraps">
                     <div class="car_wrap">
                        <p class="wrap_feature"><span>FEATURED</span></p>
                        <h4>{{$product->title}}</h4>
                        <p>{{$product->subtitle}}</p>
                        <p class="petrol_desel">${{$product->price}}</p>
                     </div>
                  </div>
                  <!--************** car feature end ***************************************-->
                  <!--******************* Overview ***************************************-->
                  <div class="overview">
                     <h4>Overview</h4>
                     <div class="overview_line">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                           <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-4 col-12 owner">
                                 <img src="{{url('public/front/images/first_owner_1x.png')}}"> <span><span class="specification">Owner</span><br/> <strong>{{$vendor->name}}</strong></span>
                              </div>
                              <div class="col-md-4 col-lg-4 col-sm-4 col-12 Location">
                                 <img src="{{url('public/front/images/location_1x.png')}}"> <span><span class="specification">Location</span><br/> <strong>Pattom, Thiruvananthapuram</strong></span>
                              </div>
                              <div class="col-md-4 col-lg-4 col-sm-4 col-12 posting">
                                 <img src="{{url('public/front/images/inspectionDate_1x.png')}}"> <span><span class="specification">Posting date</span><br/> <strong>{{$product->created_at}}</strong></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--******************* Overview end***************************************-->
                  <!--******************* description ***************************************-->
                  <div class="overview">
                     <h4>Description</h4>
                     <div class="overview_line">
                        <div class="description">
                           <p>{{$product->description}}
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <!--********************************************** right side****************************************************** -->
               <div class="col-md-4 col-lg-4 col-sm-4 col-12 right_side-wraps">
                  <div class="make_offer">
                     <h3>${{$product->price}}</h3>
                     <button type="button" class="btn btn-primary offer_button">Make offer</button>
                  </div>
                  <div class="sold_by-wrap">
                     <p class="wrap_sold">SOLD BY</p>
                     <h3 class="wrap_sold-heading">{{$vendor->name}}</h3>
                     <p class="posted_on">Posted On : {{$product->created_at}}</p>
                     <button type="button" class="btn btn-primary chat_with-seller">Chat with seller</button>
                     <p class="phone_number-dealer">
                        <svg width="26px" height="26px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                           <path class="rui-4K4Y7" d="M784.555 852.395c-331.435-14.635-598.315-281.515-612.949-612.949l149.973-59.989 91.691 183.424-70.997 35.499v26.453c0 141.653 115.243 256.896 256.896 256.896h26.453l11.861-23.637 23.68-47.36 183.381 91.733-59.989 149.931zM918.101 643.456l-256.939-128.469-57.472 19.2-30.037 60.032c-74.069-11.093-132.736-69.803-143.872-143.872l60.075-30.037 19.157-57.429-128.427-256.939-54.187-20.608-214.187 85.632-26.88 39.808c0 401.365 326.571 727.893 727.936 727.893l39.765-26.88 85.632-214.187-20.608-54.187z"></path>
                        </svg>
                        <span>{{$vendor->contact}}</span>
                     </p>
                     <div class="view_details">
                        <div class="location">
                           <div class="wrap_locaton">
                              <img src="{{url('public/front/images/location_1x.png')}}" class="navi_img">
                              <p>Pattom, Thiruvananthapuram, Kerala</p>
                              <a href="#"><img src="{{url('public/front/images/map.png')}}" class="map_image"></a>
                           </div>
                           <p class="view-seller_details"><a href="#">View seller profile</a></p>
                        </div>
                     </div>
                  </div>
               </div>
               <!--********************************************** right side end****************************************************** -->
            </div>
         </div>
      </section>
      <section class="app_olx">
         <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-12">
                     <img src="{{url('public/frontend/images/bg-banner/2.png')}}" alt="app" class="olx_app">
                  </div>
                  <div class="col-md-4 col-sm-4 col-12 try_app">
                     <h4>TRY THE LOCAL APP</h4>
                     <p>Buy, sell and find just about anything using the app on your mobile.</p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-12">
                     <div class="get_app">
                        <p>Get your app today</p>
                        <span><img src="{{url('public/front/images/appstore_2x.png')}}"></span> <span><img src="{{url('public/front/images/playstore_2x.png')}}"></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="footer">
         <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
               <div class="row">
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12 fiiter_wrap-item">
                     <h5>POPULAR LOCATIONS</h5>
                     <ul class="footer_itms">
                        <li><a href="#">Kolkata</a></li>
                        <li><a href="#">Mumbai</a></li>
                        <li><a href="#">Chennai</a></li>
                        <li><a href="#">Pune</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12 fiiter_wrap-item">
                     <h5>TRENDING LOCATIONS</h5>
                     <ul class="footer_itms">
                        <li><a href="#">Bhubaneshwar</a></li>
                        <li><a href="#">Hyderabad</a></li>
                        <li><a href="#">Chandigarh</a></li>
                        <li><a href="#">Nashik</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12 fiiter_wrap-item">
                     <h5>ABOUT US</h5>
                     <ul class="footer_itms">
                        <li><a href="#">About Local Group</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">LocalPeople</a></li>
                        <li><a href="#">Waah Jobs</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12 fiiter_wrap-item">
                     <h5>Local</h5>
                     <ul class="footer_itms">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Legal & Privacy information</a></li>
                        <li><a href="#">Blog</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12 fiiter_wrap-item">
                     <h5>FOLLOW US</h5>
                     <ul class="social_icons">
                        <li>
                           <a href="#">
                              <svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                 <path class="rui-4K4Y7" d="M512 85.325c235.648 0 426.667 191.019 426.667 426.667s-191.019 426.667-426.667 426.667c-235.648 0-426.667-191.019-426.667-426.667s191.019-426.667 426.667-426.667zM512 150.605c-199.595 0-361.429 161.792-361.429 361.387 0 199.637 161.835 361.429 361.429 361.429s361.429-161.792 361.429-361.429c0-199.595-161.835-361.387-361.429-361.387zM616.789 301.133v57.6h-61.312c-15.403 0-28.8 14.848-28.8 31.616v0 63.147h90.069v53.845h-90.069v215.509h-67.115v-215.509h-78.592v-53.845h78.592v-74.325c0-42.752 34.517-78.037 76.672-78.037v0h80.555z"></path>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                 <path class="rui-4K4Y7" d="M511.979 85.321c235.648 0 426.667 191.019 426.667 426.667s-191.019 426.667-426.667 426.667c-235.605 0-426.667-191.019-426.667-426.667s191.061-426.667 426.667-426.667zM511.979 150.601c-199.595 0-361.429 161.792-361.429 361.387 0 199.637 161.835 361.429 361.429 361.429 199.637 0 361.429-161.792 361.429-361.429 0-199.595-161.792-361.387-361.429-361.387zM619.721 291.247c70.784 0 128.384 57.643 128.384 128.469v0 184.619c0 70.784-57.6 128.427-128.384 128.427v0h-215.424c-70.827 0-128.384-57.643-128.384-128.427v0-184.619c0-70.827 57.557-128.469 128.384-128.469v0zM619.721 335.791h-215.424c-46.293 0-83.883 37.632-83.883 83.925v0 184.619c0 46.293 37.589 83.925 83.883 83.925v0h215.424c46.251 0 83.883-37.632 83.883-83.925v0-184.619c0-46.293-37.632-83.925-83.883-83.925v0zM512.021 405.248c63.659 0 115.456 49.195 115.456 109.653 0 59.904-50.688 106.752-115.456 106.752-63.659 0-115.499-49.195-115.499-109.653 0-59.861 50.688-106.752 115.499-106.752zM512.021 444.885c-41.813 0-75.819 31.403-75.819 70.016 0 37.291 35.413 70.016 75.819 70.016s75.776-32.725 75.776-70.016c0-38.613-34.005-70.016-75.776-70.016zM630.857 358.852c23.296 0 43.008 19.712 43.008 43.008s-19.712 43.008-43.008 43.008c-23.296 0-43.008-19.712-43.008-43.008s19.712-43.008 43.008-43.008zM630.857 386.927c-8.661 0-15.019 6.272-15.019 14.933 0 8.704 6.357 14.976 15.019 14.976s14.976-6.272 14.976-14.976c0-8.661-6.315-14.933-14.976-14.933z"></path>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                 <path class="rui-4K4Y7" d="M511.979 85.321c235.648 0 426.667 191.019 426.667 426.667s-191.019 426.667-426.667 426.667c-235.605 0-426.667-191.019-426.667-426.667s191.061-426.667 426.667-426.667zM511.979 150.601c-199.595 0-361.429 161.792-361.429 361.387 0 199.637 161.835 361.429 361.429 361.429 199.637 0 361.429-161.792 361.429-361.429 0-199.595-161.792-361.387-361.429-361.387zM600.499 335.040c25.728 0 51.499 9.6 67.584 25.728 16.085 0 45.013-9.643 57.899-19.328-6.443 19.328-25.771 41.813-38.613 51.499 22.528 0 44.971-9.685 51.456-12.885-12.843 16.085-25.728 32.171-45.013 45.056 6.4 144.768-109.397 263.851-260.608 263.851-51.499 0-99.755-12.885-148.011-38.656 64.341 9.685 119.040-22.528 135.125-38.613-41.856 0-80.427-35.371-83.669-61.141 9.685 0 28.971 3.243 38.656-3.2-54.699-12.885-70.784-54.699-70.784-86.869 9.643 9.685 32.128 9.685 41.813 9.685-32.171-19.328-54.699-70.827-28.971-119.040 48.256 57.899 122.283 90.069 193.067 93.269-3.243-6.4-3.243-12.885-3.243-19.285 0-48.256 41.856-90.069 93.312-90.069z"></path>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                                 <path class="rui-4K4Y7" d="M512 85.321c235.648 0 426.667 191.019 426.667 426.667s-191.019 426.667-426.667 426.667c-235.648 0-426.667-191.019-426.667-426.667s191.019-426.667 426.667-426.667zM512 150.601c-199.595 0-361.429 161.792-361.429 361.387 0 199.637 161.835 361.429 361.429 361.429s361.429-161.792 361.429-361.429c0-199.595-161.835-361.387-361.429-361.387zM382.605 321.86l311.125 190.123-311.125 190.165v-380.288z"></path>
                              </svg>
                           </a>
                        </li>
                        <p class="footer_apps-wrap"><span class="footer_olx-app"><img src="{{url('public/front/images/appstore_2x.png')}}"></span> <span class="footer_olx-app"><img src="{{url('public/front/images/playstore_2x.png')}}"></span></p>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright">
         <div class="container">
            <p><span><strong>Other Countries</strong> </span> <span><a href="#">Pakistan</a></span> <span><a href="#">- South Africa</a></span> <span><a href="#">- Indonesia</a></span> <span class="copy_right"><strong>Free Classifieds in India.</strong> © 2006-2022 LOCAL</span></p>
         </div>
      </div>
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
   <script>
      $(document).ready(function(){
         
       $('.vendor_data').click(function(){   
        var vendor_id = $(this).attr('data-vendor_id');
        var favorite = [];
        $.each($("input:checkbox[name=vendor]:checked"), function(){
                   favorite.push($(this).attr('data-vendor_id'));
               });
      
       $.ajax({
           url: 'shop',
           dataType: "json",
           type: "get",
           async: true,
           data: {'vendor_ids': favorite},
           success: function (data) {
            $('.product_details').html(data);
            
           }
       });  
      });
      }); 
      
   </script> 
   <script>
      $( function() {
        $( "#slider-range" ).slider({
          range: true,
          min: 0,
          max: 3500,
          values: [ 75, 1500 ],
          slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            var value1 = ui.values[0];
            var value2 = ui.values[1];
            
           var vendor_id = $(this).attr('data-vendor_id');
           var favorite = [];
           $.each($("input:checkbox[name=vendor]:checked"), function(){
                      favorite.push($(this).attr('data-vendor_id'));
                  }); 
                    
            $.ajax({
              type: "GET",
              url: "shop",
              data: {'min': value1,
                     'max': value2,
                     'vendor_ids': favorite
                     },
              async: true,
              success: function(data){
               $('.product_details').html(data);
            
              }
            });
          }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
      });
   </script>
   <script>
      $(document).ready(function(){
       
         $('#sort').on('change',function(){
            var sort = this.value;
      
        var vendor_id = $(this).attr('data-vendor_id');
        var favorite = [];
        $.each($("input:checkbox[name=vendor]:checked"), function(){
                   favorite.push($(this).attr('data-vendor_id'));
               });
           
            $.ajax({
            url: "shop",
            type: "get",
            data: {'sort':sort,
                   'vendor_ids': favorite},
            async: true,
            success: function(data){
             $('.product_details').html(data);
           
         }
         });
         });
      });
   </script>   
</html>
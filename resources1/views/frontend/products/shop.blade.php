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
      <section class="mt-2 container">
         <div class="row">
            <img src="{{url('public/front/images/background.png')}}" style="width: 100%;height: 220px;">
         </div>
      </section>
      <div class="container mt-5 mb-3">
         <h2 class="fresh_recomendation" align="center">Fresh recommendations</h2>
         <div class="row">
            <div class="col-lg-3 order-2 order-lg-1 " style="background-color: #e9ecef;padding: 15px;">
               <div class="single-banner shop-page-banner mb-2">
                  <a href="#">
                  <img src="{{url('/public/frontend/images/bg-banner/market.png')}}" class="img-thumbnail" alt="Local's Static Banner">
                  </a>
               </div>
               <!--sidebar-categores-box start  -->
               <div class="sidebar-categores-box">
                  <div class="sidebar-title">
                     <h4>Filter By</h4>
                  </div>
                  <hr>
                  <div class="filter-sub-area">
                     <h5 class="filter-sub-titel">Vendor</h5>
                     <div class="categori-checkbox">
                        <form action="#">
                           @foreach ($vendors as $vendor)
                           <ul style="list-style:none">
                              <li><input type="checkbox"  data-vendor_id="{{$vendor->id}}" class="vendor_data" name="vendor" id="vendor"><a href="#"> {{$vendor->name}}</a></li>
                           </ul>
                           @endforeach
                        </form>
                     </div>
                  </div>
                  <!-- <div class="filter-sub-area">
                     <h5 class="filter-sub-titel">Price Range</h5>
                     <div class="price-range-slider">
                        <p class="range-value">
                           <input type="text" id="amount" readonly>
                        </p>
                        <div id="slider-range" class="range-bar"></div>
                     </div>
                     </div> -->
               </div>
               <hr>
               <div class="product-select-box">
                  <div class="product-short">
                     <b>Sort By: </b>
                     <select class="nice-select" id="sort" name="sort">
                        <option value="trending">Relevance</option>
                        <option value="ascending"  @if (request()->sort == "ascending") selected @endif>Name (A - Z)</option>
                        <option value="descending" @if (request()->sort == "descending") selected @endif>Name (Z - A)</option>
                        <option value="priceasc" @if (request()->sort == "priceasc") selected @endif>Price (Low &gt; High)</option>
                        <option value="pricedesc" @if (request()->sort == "pricedesc") selected @endif>Price (High &gt; Low)</option>
                     </select>
                  </div>
               </div>
               <hr>
               <div class="sidebar-categores-box">
                  <div class="sidebar-title">
                     <h4>Shops Listed</h4>
                  </div>
                  <div class="filter-sub-area">
                     <div class="categori-checkbox">
                        <form action="#">
                           @foreach ($vendors as $vendor)
                           <ul style="list-style:none;">
                              <li>{{$vendor->shop}}</li>
                           </ul>
                           @endforeach
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-9 float-right">
               <div class="product_details row">
                  @include('frontend.products.include.product')
               </div>
            </div>
         </div>
      </div>
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
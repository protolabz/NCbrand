<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Olx</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/jquery.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <link href="css/select2.min.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <script src="js/select2.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <header class="header">
      <div class="top_bar">
         <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 top_wraps">
            <div class="row">
            <div class="col-md-1 col-lg-1 col-sm-1 col-2 text-center" style="padding-right: 0px;">
               <a class="navbar-brand" href="#"><svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-4K4Y7" d="M661.333 256v512h-128v-512h128zM277.333 298.667c117.824 0 213.333 95.531 213.333 213.333s-95.509 213.333-213.333 213.333c-117.824 0-213.333-95.531-213.333-213.333s95.509-213.333 213.333-213.333zM794.496 384l37.504 37.504 37.504-37.504h90.496v90.496l-37.504 37.504 37.504 37.504v90.496h-90.496l-37.504-37.504-37.504 37.504h-90.496v-90.496l37.504-37.504-37.504-37.504v-90.496h90.496zM277.333 426.667c-47.061 0-85.333 38.293-85.333 85.333s38.272 85.333 85.333 85.333c47.061 0 85.333-38.293 85.333-85.333s-38.272-85.333-85.333-85.333z"></path></svg></a>
            </div>
         <div class="col-md-8 col-lg-8 col-sm-8 col-10" style="padding: 0px;">
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

              <div class="col-md-3">
                <span class="text-uppercase text-white heading_mega-mnu"><a href="#">Fashion</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Men</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Women</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kids</a>
                </li>
              </ul>

              <span class="text-uppercase text-white heading_mega-mnu"><a href="#">Books, Sports & Hobbies</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Gym & Fitness</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Musical Instruments</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">Sports Equipment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Other Hobbies</a>
                </li>
              </ul>

              <span class="text-uppercase text-white heading_mega-mnu"><a href="#">Pets</a></span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Fishes & Aquarium</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pet Food & Accessories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Dogs</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">Other Pets</a>
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
        <a class="nav-link" href="#">Cars</a>
      </li>

      <li class="nav-item">
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

   <section class="banner">
      <div class="container">
         <div class="car_sell text-center">
            <button type="button" class="btn btn-primary sell_car">Sell Car</button>
         </div>
         
         
      </div>
      
   </section>

<!--******************************************** slider start ********************************************************-->
   <section class="slider" id="first_slider">
      <div class="container main_sldier_first">
         <link href="slick/slick.css" rel="stylesheet" />
        <link href="slick/slick-theme.css" rel="stylesheet"/>
        <div class="heading">
         <h2>Based on your last search <span class="view_more"><a href="#">View more</a></span></h2>
        </div>
        <div class="slick-carousel">
             <div class="wrapslider_item">
               <div class="slider_img">
                  <a href="#"><img src="images/image.webp" alt="Slide 1"></a>
               </div>
              <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
              <span class="featured">Featured</span>
              <a href="#"><div class="slider_caption">
               <h5>₹ 15,000</h5>
               <p class="description">3 Bds - 3 Ba - 1400 ft2</p>
               <p class="description2">House for rent at Nalanchira.</p>
              </div></a>
              </div>

             <div class="wrapslider_item">
               <div class="slider_img">
                  <a href="#"><img src="images/image2.webp" alt="Slide 2"></a>
                </div>
                <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                <span class="featured">Featured</span>
               <a href="#"><div class="slider_caption">
                  <h5>₹ 15,000</h5>
                  <p class="description">3 Bds - 3 Ba - 1400 ft2</p>
                  <p class="description2">House for rent at Nalanchira.</p>
                 </div></a>
             </div>


             <div class="wrapslider_item">
               <div class="slider_img">
               <a href="#"><img src="images/image3.webp" alt="Slide 3"></a>
              </div>
              <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
              <span class="featured">Featured</span>
              <a href="#"><div class="slider_caption">
                  <h5>₹ 15,000</h5>
                  <p class="description">3 Bds - 3 Ba - 1400 ft2</p>
                  <p class="description2">House for rent at Nalanchira.</p>
               </div></a>
             </div>

             <div class="wrapslider_item">
               <div class="slider_img">
                 <a href="#"><img src="images/image4.webp" alt="Slide 1"></a>
             </div>
             <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
             <span class="featured">Featured</span>
              <a href="#"><div class="slider_caption">
                  <h5>₹ 15,000</h5>
                  <p class="description">3 Bds - 3 Ba - 1400 ft2</p>
                  <p class="description2">House for rent at Nalanchira.</p>
               </div></a>
              </div>

             <div class="wrapslider_item">
               <div class="slider_img">
                  <a href="#"><img src="images/image5.webp" alt="Slide 2"></a>
                </div>
                <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                <span class="featured">Featured</span>
               <a href="#"><div class="slider_caption">
                  <h5>₹ 15,000</h5>
                  <p class="description">3 Bds - 3 Ba - 1400 ft2</p>
                  <p class="description2">House for rent at Nalanchira.</p>
               </div></a>
             </div>


             <div class="wrapslider_item">
               <div class="slider_img">
                 <a href="#"><img src="images/image.webp" alt="Slide 3"></a>
             </div>
             <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
             <span class="featured">Featured</span>
              <a href="#"><div class="slider_caption">
                  <h5>₹ 15,000</h5>
                  <p class="description">3 Bds - 3 Ba - 1400 ft2</p>
                  <p class="description2">House for rent at Nalanchira.</p>
                 </div></a>
             </div>
        </div>
              
        <script src="slick/jquery.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <script type="text/javascript">
          $().ready(function(){
          $('.slick-carousel').slick({
            arrows: true,
            centerPadding: "20px",
            dots: true,
            infinite: true,
            slidesToShow: 4,
            cssEase: 'linear',
            loop: true,
            centerMode: true,
            autoplay: true,
         autoplaySpeed: 6000,
             responsive: [
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 1,
            centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
            slidesToScroll: 1
            }
          }
         ]
          });
        });
        </script>
         
      </div>
    </section>

<!--******************************************** slider end ********************************************************-->

<section class="fresh_recomendation">
      <div class="container">
         <h2 class="fresh_recomendation">Fresh recommendations</h2>
         <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="row">
               <div class="col-md-3 col-lg-3 col-sm-2 col-12 itms_products">
                  <div class="wrapslider_item">
                        <div class="slider_img">
                          <a href="#"><img src="images/image.webp" alt="Slide 3"></a>
                      </div>
                      <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                      <span class="featured">Featured</span>
                       <a href="#"><div class="slider_caption">
                           <h5>₹ 15,000</h5>
                           <p class="description">3 Bds - 3 Ba - 1400 ft2</p>
                           <p class="description2">House for rent at Nalanchira.</p>
                          </div></a>
                      </div>
               </div>
               <div class="text-center" style="width: 100%;">
                  <button type="button" class="btn btn-primary load_more">Load more</button>
               </div>
            </div>
         </div>
      </div>
</section>

<section class="app_olx">
   <div class="container">
      <div class="col-md-12 col-lg-12 col-sm-12">
         <div class="row">
            <div class="col-md-5 col-sm-5 col-12">
               <img src="images/phone-app.png" alt="app" class="olx_app">
            </div>
            <div class="col-md-4 col-sm-4 col-12 try_app">
               <h4>TRY THE OLX APP</h4>
               <p>Buy, sell and find just about anything using the app on your mobile.</p>
            </div>
            <div class="col-md-3 col-sm-3 col-12">
               <div class="get_app">
                  <p>Get your app today</p>
                  <span><img src="images/appstore_2x.png"></span> <span><img src="images/playstore_2x.png"></span>
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
                  <li><a href="#">About OLX Group</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">OLXPeople</a></li>
                  <li><a href="#">Waah Jobs</a></li>
               </ul>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-6 col-12 fiiter_wrap-item">
               <h5>OLX</h5>
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
                  <li><a href="#"><svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-4K4Y7" d="M512 85.325c235.648 0 426.667 191.019 426.667 426.667s-191.019 426.667-426.667 426.667c-235.648 0-426.667-191.019-426.667-426.667s191.019-426.667 426.667-426.667zM512 150.605c-199.595 0-361.429 161.792-361.429 361.387 0 199.637 161.835 361.429 361.429 361.429s361.429-161.792 361.429-361.429c0-199.595-161.835-361.387-361.429-361.387zM616.789 301.133v57.6h-61.312c-15.403 0-28.8 14.848-28.8 31.616v0 63.147h90.069v53.845h-90.069v215.509h-67.115v-215.509h-78.592v-53.845h78.592v-74.325c0-42.752 34.517-78.037 76.672-78.037v0h80.555z"></path></svg></a></li>

                  <li><a href="#"><svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-4K4Y7" d="M511.979 85.321c235.648 0 426.667 191.019 426.667 426.667s-191.019 426.667-426.667 426.667c-235.605 0-426.667-191.019-426.667-426.667s191.061-426.667 426.667-426.667zM511.979 150.601c-199.595 0-361.429 161.792-361.429 361.387 0 199.637 161.835 361.429 361.429 361.429 199.637 0 361.429-161.792 361.429-361.429 0-199.595-161.792-361.387-361.429-361.387zM619.721 291.247c70.784 0 128.384 57.643 128.384 128.469v0 184.619c0 70.784-57.6 128.427-128.384 128.427v0h-215.424c-70.827 0-128.384-57.643-128.384-128.427v0-184.619c0-70.827 57.557-128.469 128.384-128.469v0zM619.721 335.791h-215.424c-46.293 0-83.883 37.632-83.883 83.925v0 184.619c0 46.293 37.589 83.925 83.883 83.925v0h215.424c46.251 0 83.883-37.632 83.883-83.925v0-184.619c0-46.293-37.632-83.925-83.883-83.925v0zM512.021 405.248c63.659 0 115.456 49.195 115.456 109.653 0 59.904-50.688 106.752-115.456 106.752-63.659 0-115.499-49.195-115.499-109.653 0-59.861 50.688-106.752 115.499-106.752zM512.021 444.885c-41.813 0-75.819 31.403-75.819 70.016 0 37.291 35.413 70.016 75.819 70.016s75.776-32.725 75.776-70.016c0-38.613-34.005-70.016-75.776-70.016zM630.857 358.852c23.296 0 43.008 19.712 43.008 43.008s-19.712 43.008-43.008 43.008c-23.296 0-43.008-19.712-43.008-43.008s19.712-43.008 43.008-43.008zM630.857 386.927c-8.661 0-15.019 6.272-15.019 14.933 0 8.704 6.357 14.976 15.019 14.976s14.976-6.272 14.976-14.976c0-8.661-6.315-14.933-14.976-14.933z"></path></svg></a></li>

                  <li><a href="#"><svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-4K4Y7" d="M511.979 85.321c235.648 0 426.667 191.019 426.667 426.667s-191.019 426.667-426.667 426.667c-235.605 0-426.667-191.019-426.667-426.667s191.061-426.667 426.667-426.667zM511.979 150.601c-199.595 0-361.429 161.792-361.429 361.387 0 199.637 161.835 361.429 361.429 361.429 199.637 0 361.429-161.792 361.429-361.429 0-199.595-161.792-361.387-361.429-361.387zM600.499 335.040c25.728 0 51.499 9.6 67.584 25.728 16.085 0 45.013-9.643 57.899-19.328-6.443 19.328-25.771 41.813-38.613 51.499 22.528 0 44.971-9.685 51.456-12.885-12.843 16.085-25.728 32.171-45.013 45.056 6.4 144.768-109.397 263.851-260.608 263.851-51.499 0-99.755-12.885-148.011-38.656 64.341 9.685 119.040-22.528 135.125-38.613-41.856 0-80.427-35.371-83.669-61.141 9.685 0 28.971 3.243 38.656-3.2-54.699-12.885-70.784-54.699-70.784-86.869 9.643 9.685 32.128 9.685 41.813 9.685-32.171-19.328-54.699-70.827-28.971-119.040 48.256 57.899 122.283 90.069 193.067 93.269-3.243-6.4-3.243-12.885-3.243-19.285 0-48.256 41.856-90.069 93.312-90.069z"></path></svg></a></li>

                  <li><a href="#"><svg width="48px" height="48px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-4K4Y7" d="M512 85.321c235.648 0 426.667 191.019 426.667 426.667s-191.019 426.667-426.667 426.667c-235.648 0-426.667-191.019-426.667-426.667s191.019-426.667 426.667-426.667zM512 150.601c-199.595 0-361.429 161.792-361.429 361.387 0 199.637 161.835 361.429 361.429 361.429s361.429-161.792 361.429-361.429c0-199.595-161.835-361.387-361.429-361.387zM382.605 321.86l311.125 190.123-311.125 190.165v-380.288z"></path></svg></a></li>

                  <p class="footer_apps-wrap"><span class="footer_olx-app"><img src="images/appstore_2x.png"></span> <span class="footer_olx-app"><img src="images/playstore_2x.png"></span></p>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<div class="copyright">
      <div class="container">
         <p><span><strong>Other Countries</strong> </span> <span><a href="#">Pakistan</a></span> <span><a href="#">- South Africa</a></span> <span><a href="#">- Indonesia</a></span> <span class="copy_right"><strong>Free Classifieds in India.</strong> © 2006-2022 OLX</span></p>
      </div>
   </div>
</body>
</html>
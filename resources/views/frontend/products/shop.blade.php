@extends('frontlayouts.main')
@section('main-container')

   <section class="banner">
         <div class="container">
            <div class="car_sell text-center">
               <button type="button" class="btn btn-primary sell_car">Sell Car</button>
            </div>
         </div>
         
   </section>

<!-- end banner-->
<section class="slider" id="first_slider">
		<div class="container main_sldier_first">
			<link href="slick/slick.css" rel="stylesheet" />
        <link href="slick/slick-theme.css" rel="stylesheet"/>
        <div class="heading">
        	<h2>Based on your last search
             {{--  <span class="view_more">
              <a href="#">View more</a></span> --}}
            </h2>
        </div>
        <div class="slick-carousel">
           @foreach ($slider_images as $slider)
             <div class="wrapslider_item">

             	<div class="slider_img">
             		<a href="#">
                  
                      <img src="{{ url('http://localhost/local/public/files/'.$slider->image ) }}" alt="Slide 1">
                   
                  </a>
             	</div>
              <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
              <span class="featured">Featured</span>
              <a href="#"><div class="slider_caption">
              	<h5>₹ {{$slider->price}}</h5>
              	<p class="description">{{$slider->dimension}}</p>
              	<p class="description2">{{$slider->subtitle}}</p>
              </div></a>
              </div>
            @endforeach
        </div>  
        <!-- slider end -->
              
       
			
		</div>
    </section>
 
    <!-- products sections start here -->
    <section class="fresh_recomendation"> 
       <?php $image = url('/frontend/images/bg-banner/banner.png'); ?>
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-12">
                     
                     <div class="single-banner shop-page-banner mb-2">
                        <a href="#">
                        <img src="{{url('/frontend/images/bg-banner/market.png')}}" class="img-thumbnail" alt="Local's Static Banner">
                        </a>
                     </div>
                     <!--sidebar-categores-box start  -->
                     <div class="sidebar-categores-box">
                        <div class="sidebar-title">
                        <h2>Filter By</h2>
                        </div>
                        <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Vendor</h5>
                        <div class="categori-checkbox">
                           <form action="#">
                              @foreach ($vendors as $vendor)
                              <ul>
                                 <li><input type="checkbox"  data-vendor_id="{{$vendor->id}}" class="vendor_data" name="vendor" id="vendor"><a href="filter/{{$vendor->id}}">{{$vendor->name}}</a></li>
                              </ul>
                              @endforeach
                           </form>
                        </div>
                        </div>
                        <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Price Range</h5>
                        <div class="price-range-slider">
            
                           <p class="range-value">
                              <input type="text" id="amount" readonly>
                           </p>
                           <div id="slider-range" class="range-bar"></div>
                           
                           </div>
                        </div>
                        <!-- <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                        <h5 class="filter-sub-titel">Dimension</h5>
                        <div class="categori-checkbox">
                           <form action="#">
                              <ul>
                                 <li><input type="checkbox" name="product-categori"><a href="#">40x60cm (6)</a></li>
                                 <li><input type="checkbox" name="product-categori"><a href="#">60x90cm (6)</a></li>
                                 <li><input type="checkbox" name="product-categori"><a href="#">80x120cm (6)</a></li>
                              </ul>
                           </form>
                        </div>
                        </div> -->
                        <!-- filter-sub-area end -->
                     </div>
                     <div class="sidebar-categores-box">
                        <div class="sidebar-title">
                        <h2>Shops Listed</h2>
                        </div>
                        <div class="filter-sub-area">
                        <div class="categori-checkbox">
                           <form action="#">
                              @foreach ($vendors as $vendor)
                              <ul style="list-style-type:disc;">
                                 <li>{{$vendor->shop}}</li>
                              </ul>
                              @endforeach
                           </form>
                        </div>
                        </div>
                        
                     </div>
                     
                  
               </div>
               <div class="col-md-9 col-lg-9 col-sm-12 col-12 prducts_wrap_etc">
         <h2 class="fresh_recomendation">Fresh recommendations</h2>

         <p>Available Products <span> Sort By: </span> 
         <span>
             <select class="nice-select" id="sort" name="sort">
                        <option value="trending">Relevance</option>
                        <option value="ascending"  @if (request()->sort == "ascending") selected @endif>Name (A - Z)</option>
                        <option value="descending" @if (request()->sort == "descending") selected @endif>Name (Z - A)</option>
                        <option value="priceasc" @if (request()->sort == "priceasc") selected @endif>Price (Low &gt; High)</option>
                        <option value="pricedesc" @if (request()->sort == "pricedesc") selected @endif>Price (High &gt; Low)</option>
                     </select>
                  </span></p>

		
                  <div class=" product_details">
                  @include('frontend.products.include.product')
                  <div>

         


      </div>
      </div>
      </div>
   
    </section>


<style>
@media (min-width: 1200px){
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1240px;
}
}

nav.navbar.navbar-expand-lg.main_navbar {
    padding-top: 70px;
}
   .itms_products{
      float: left;
   }
select#sort {
float: right;
}
.pro {
float: left;
}
ul.pagination.ml-auto {
    width: 100%;
}
</style>
<!-- Body Wrapper End Here -->
<!-- jQuery-V1.12.4 -->
<script src="{{url('/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{url('/frontend/js/vendor/popper.min.js')}}"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
<!-- Ajax Mail js -->
<script src="{{url('/frontend/js/ajax-mail.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{url('/frontend/js/jquery.meanmenu.min.js')}}"></script>
<!-- Wow.min js -->
<script src="{{url('/frontend/js/wow.min.js')}}"></script>
<!-- Slick Carousel js -->
<script src="{{url('/frontend/js/slick.min.js')}}"></script>
<!-- Owl Carousel-2 js -->
<script src="{{url('/frontend/js/owl.carousel.min.js')}}"></script>
<!-- Magnific popup js -->
<script src="{{url('/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope js -->
<script src="{{url('/frontend/js/isotope.pkgd.min.js')}}"></script>
<!-- Imagesloaded js -->
<script src="{{url('/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Mixitup js -->
<script src="{{url('/frontend/js/jquery.mixitup.min.js')}}"></script>
<!-- Countdown -->
<script src="{{url('/frontend/js/jquery.countdown.min.js')}}"></script>
<!-- Counterup -->
<script src="{{url('/frontend/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{url('/frontend/js/waypoints.min.js')}}"></script>
<!-- Barrating -->
<script src="{{url('/frontend/js/jquery.barrating.min.js')}}"></script>
<!-- Jquery-ui -->
<script src="{{url('/frontend/js/jquery-ui.min.js')}}"></script>
<!-- Venobox -->
<script src="{{url('/frontend/js/venobox.min.js')}}"></script>
<!-- Nice Select js -->
<script src="{{url('/frontend/js/jquery.nice-select.min.js')}}"></script>
<!-- ScrollUp js -->
<script src="{{url('/frontend/js/scrollUp.min.js')}}"></script>
<!-- Main/Activator js -->
<script src="{{url('/frontend/js/main.js')}}"></script>
</body>
<!-- shop-left-sidebar31:48-->
</html>

<script src="{{url('/frontend/js/jquery-ui.min.js')}}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

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
<script>
   $(document).ready(function(){
      
    $('.vendor_data').click(function(){   
     var vendor_id = $(this).attr('data-vendor_id');
     var favorite = [];
     $.each($("input:checkbox[name=vendor]:checked"), function(){
                favorite.push($(this).attr('data-vendor_id'));
            });
   
    $.ajax({
        url: "{{url('shop')}}",
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
           type: "get",
           url: "{{url('shop')}}",
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
         url: "{{url('shop')}}",
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

<style>
   .nice-select{
      clear: none !important;
      float: right !important; 
      top: -7px;
   }

   .prducts_wrap_etc{
      margin-top: 30px;
   }

   .fiiter_wrap-item {
    flex: 0 0 20%;
    max-width: 20%;
}

.sidebar-categores-box {
    background: #f4f4f4;
    border: 1px solid #e1e1e1;
    border-radius: 3px;
    box-shadow: none;
    margin-bottom: 30px;
    padding: 22.1px 15px 28px;
}

.categori-checkbox ul li a {
    color: #363f4d;
    font-size: 16px;
    margin-left: 15px;
    margin-top: 0;
}
li{
   list-style: none;
}
input {
   
    background: #eceff8;
    border: 2px solid #eceff8;
}
</style>
@endsection



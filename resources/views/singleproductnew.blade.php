@extends('frontlayouts.main')
@section('main-container')
  <div class="main">
  <div class="breadcrumbs">
    <div class="container">
      <ul class = "breadcrumb">
               <!--Add the ".breadcrumb-item" class to each li element within the breadcrumb-->
               <li class = "breadcrumb-item"><a href = "#">Home</a></li>
               <li class = "breadcrumb-item"><a href="#">Single Product</a></li>
               {{-- <li class = "breadcrumb-item"><a href="#">Cars</a></li>
               <li class = "breadcrumb-item"><a href="#">Cars in Kerala</a></li>
               <li class = "breadcrumb-item"><a href="#">Cars in Thiruvananthapuram</a></li>
               <li class = "breadcrumb-item"><a href="#">Cars in Pattom</a></li>
               <li class = "breadcrumb-item"><a href="#">Maruti Suzuki in Pattom</a></li>
               <!--Add the "active" class to li element to represent the current page-->
               <li class = "breadcrumb-item active" aria-current = "page">Celerio in Pattom</li> --}}
        </ul>      
    </div>
    
  </div>
</div>

<section class="banner_wrap">
  <div class="container">
    <link href="{{ url('/frontend/css/slick.css') }}" rel="stylesheet" />
        <link href="{{url('/frontend/slick/slick-theme.css')}}" rel="stylesheet"/>
        <input id="slick_count" type="hidden" value="{{count($product->images)}}">
        <div class="slick-carousel">
                @foreach ($product->images as $img)
                   
             <div class="product-wrapslider_item">
              <img src="{{ url('http://localhost/local/public/files/'.$img->image) }}" alt="Slide 1">
              </div>
             
                  @endforeach
          </div>
          
        
              
        <script src="{{ url('/frontend/slick/jquery.min.js') }}"></script>
        <script src="{{ url('/frontend/slick/slick.min.js')}}"></script>
        <script type="text/javascript">
          $().ready(function(){
         
          $('.slick-carousel').slick({
            arrows: true,
            centerPadding: "0px",
            dots: false,
            infinite: false,
            slidesToShow: 1,
            cssEase: 'linear',
            loop: true,
            centerMode: true
          });
        });
        </script>
  </div>
</section>
<!--******************************************** slider start ********************************************************-->

<div class="overview_wrapper">
  <ul class="overview_menus">
    <li class="first_menu-overview"><a href="#">Overview</a></li>
    <li class="right_meny-wraps"><a href="#"><svg width="28px" height="28px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-4K4Y7" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path></svg> <span>Wishlist</span></a></li>
    <li class="right_meny-wraps"><a href="#"><svg width="28px" height="28px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-4K4Y7" d="M768 853.333c-47.104 0-85.333-38.229-85.333-85.333s38.229-85.333 85.333-85.333c47.104 0 85.333 38.229 85.333 85.333s-38.229 85.333-85.333 85.333zM256 597.333c-47.104 0-85.333-38.229-85.333-85.333s38.229-85.333 85.333-85.333c47.104 0 85.333 38.229 85.333 85.333s-38.229 85.333-85.333 85.333zM768 170.667c47.104 0 85.333 38.229 85.333 85.333s-38.229 85.333-85.333 85.333c-47.104 0-85.333-38.229-85.333-85.333s38.229-85.333 85.333-85.333zM768 597.333c-52.437 0-98.688 24.107-130.005 61.312l-213.675-123.392c1.067-7.637 2.347-15.275 2.347-23.253 0-4.779-1.024-9.259-1.408-13.909l218.283-126.037c31.104 33.408 75.179 54.613 124.459 54.613 94.251 0 170.667-76.416 170.667-170.667s-76.416-170.667-170.667-170.667c-94.251 0-170.667 76.416-170.667 170.667 0 14.208 2.261 27.819 5.504 41.003l-205.867 118.912c-30.763-45.013-82.389-74.581-140.971-74.581-94.251 0-170.667 76.416-170.667 170.667s76.416 170.667 170.667 170.667c55.467 0 104.235-26.88 135.424-67.84l209.195 120.747c-2.048 10.539-3.285 21.333-3.285 32.427 0 94.251 76.416 170.667 170.667 170.667s170.667-76.416 170.667-170.667c0-94.251-76.416-170.667-170.667-170.667z"></path></svg> <span>Share</span></a></li>
    
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
              <p>{{$product->dimension}}</p>
             {{-- <p class="petrol_desel">
                <span><img src="{{ url('/frontend/images/petrol_1x.svg') }}"> PETROL |</span> <span><img src="images/mileage_1x.svg"> 53000.0 KM |</span> <span><img src="images/transmission_1x.svg"> MANUAL</span>
              </p>--}}
            </div>
          </div>
            <!--************** car feature end ***************************************-->

            <!--******************* Overview ***************************************-->
            <div class="overview">
              <h4>Overview</h4>
              <div class="overview_line">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                  <div class="row">
                  {{-- <div class="col-md-4 col-lg-4 col-sm-4 col-12 owner">
                      <img src="{{ url('/frontend/images/first_owner_1x.png') }}"> <span><span class="specification">Owner</span><br/> 
                      <strong>1st</strong></span> 
                    </div> --}}
                    {{--  <div class="col-md-4 col-lg-4 col-sm-4 col-12 Location">
                      <img src="{{ url('/frontend/images/location_1x.png') }}"> <span><span class="specification">Location</span><br/> 
                     <strong>Pattom, Thiruvananthapuram</strong></span> 
                    </div> --}}
                    <div class="col-md-4 col-lg-4 col-sm-4 col-12 posting">
                      <img src="{{ url('/frontend/images/inspectionDate_1x.png') }}"> <span><span class="specification">Posting date</span><br/>
                       <strong>{{ date('d-M-Y',strtotime($product->created_at)) }}</strong></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--******************* Overview end***************************************-->
            
            <!--******************* description ***************************************-->
          {{--  <div class="overview">
              <h4>Description</h4>
              <div class="overview_line">
                <div class="description">
                  <p>{{$product->description}}</p>
     
                </div>
              </div>
            </div> --}}
            <div class="product-area pt-35">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="li-product-tab">
                   <ul class="nav li-product-menu description_etc">
                      <li><a class="active" data-toggle="tab" href="#description"><span>Description</span><span class="slash_wrapetc">/</span></a></li>
                      <li><a data-toggle="tab" href="#product-details"><span>Vendor Details</span></a></li>
                      {{-- <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li> --}}
                   </ul>               
               </div>
               <!-- Begin Li's Tab Menu Content Area -->
           </div>
       </div>
       <div class="tab-content">
           <div id="description" class="tab-pane active show" role="tabpanel">
               <div class="product-description">
                   {{ $product->description }}
               </div>
           </div>
           <div id="product-details" class="tab-pane" role="tabpanel">
               <div class="product-details-manufacturer" style="margin-top: 1rem;
               ">
                   <div class="comment-author-infos">
                     <div class="col-lg-7 col-md-6" style="display: flex;
                     flex-direction: column;
                  ">
                  <div class="name-sel" style="padding-bottom: 1rem">
                     <label   style=" font-size: 15px;
    font-weight: 400; color: rgb(0,0,0)"><b>Vendor Name</b></label>
                     <p>
                        <span style="font-size:1.1rem; color:blue; font-weight:400">{{$vendor->name}}</span>
                     </p>
                  </div>
                  <div class="name-sel" style="padding-bottom: 1rem">
                     <label   style=" font-size: 15px;
    font-weight: 400; color: rgb(0,0,0)"><b>Vendor Contact</b></label>
                     <p>
                        <span style="font-size:1.1rem; color:blue; font-weight:400">{{$vendor->contact}}</span>
                     </p>
                  </div>
                  <div class="name-sel" style="padding-bottom: 1rem">
                     <label   style=" font-size: 15px;
    font-weight: 400; color: rgb(0,0,0)"><b>Shop Name</b></label>
                     <p>
                        <span style="font-size:1.1rem; color:blue; font-weight:400">{{$vendor->shop}}</span>
                     </p>
                  </div>
                    
                    
                  </div>
                   </div>

               </div>
           </div>
           
       </div>
   </div>
</div>

<style>
  ul.nav.li-product-menu.description_etc li {
    margin-right: 35px;
}

ul.nav.li-product-menu.description_etc li a {
    color: #c8c8c8;
    font-size: 23px;
    font-weight: 700;
}

ul.nav.li-product-menu.description_etc li a.active {
    color: #000 !important;
}

span.slash_wrapetc {
    position: relative;
    left: 20px;
    color: #c8c8c8;
}

ul.nav.li-product-menu.description_etc {
    border-bottom: 1px solid #c8c8c8;
    padding-bottom: 15px;
    margin-bottom: 16px;
}

ul.nav.li-product-menu.description_etc {
    border-bottom: 1px solid #c8c8c8;
    padding-bottom: 15px;
    margin-bottom: 16px;
    padding-top: 20px;
}

ul.nav.li-product-menu.description_etc li a:hover{
  text-decoration: none;
}
</style>
            <!--******************* description end***************************************-->
            <div class="realted_ads">
            <link href="{{ url('/frontend/slick/slick.css') }}" rel="stylesheet" />
        <link href="{{ url('/frontend/slick/slick-theme.css') }}" rel="stylesheet"/>
        <div class="heading">
          <h2>Related Products</h2>
        </div>
        <div class="slick-carousels">
              @foreach ($product->images as $img)
                  
             <div class="wrapslider_item">
             @if($product->id == $img->prod_id) 
              <div class="slider_img">
                <a href="#">
                  <img src="{{ url('http://localhost/local/public/files/'.$img->image) }}" alt="Slide 1">
                </a>
              </div>
              @endif 
                  
              <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
              <span class="featured">Featured</span>
              <a href="#"><div class="slider_caption">
                <h5>₹{{$product->price}}</h5>
                <p class="description">{{$product->dimension}}</p>
                <p class="description2">{{$product->subtitle}}</p>
              </div></a>

              </div>
              @endforeach

             
        </div>
              
        <script src="{{ url('/frontend/slick/jquery.min.js') }}"></script>
        <script src="{{ url('/frontend/slick/slick.min.js')}}"></script>
        <script type="text/javascript">
          $().ready(function(){
          $('.slick-carousels').slick({
            arrows: true,
            centerPadding: "20px",
            dots: true,
            infinite: true,
            slidesToShow: 3,
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
    </div>
<!--********************************************** right side****************************************************** -->
    <div class="col-md-4 col-lg-4 col-sm-4 col-12 right_side-wraps">
        <div class="make_offer">
          <h3>₹{{$product->price}}</h3>
         {{-- <button type="button" class="btn btn-primary offer_button">Make offer</button>  --}} 
        </div>

        <div class="sold_by-wrap">
          <p class="wrap_sold">SOLD BY</p>
          <h3 class="wrap_sold-heading">GENUINE PRODUCTS</h3>
          {{-- <p class="posted_on">Posted On : 01/22/2022</p> --}}
          <button type="button" class="btn btn-primary chat_with-seller">Chat with seller</button>
          <p class="phone_number-dealer"><svg width="26px" height="26px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-4K4Y7" d="M784.555 852.395c-331.435-14.635-598.315-281.515-612.949-612.949l149.973-59.989 91.691 183.424-70.997 35.499v26.453c0 141.653 115.243 256.896 256.896 256.896h26.453l11.861-23.637 23.68-47.36 183.381 91.733-59.989 149.931zM918.101 643.456l-256.939-128.469-57.472 19.2-30.037 60.032c-74.069-11.093-132.736-69.803-143.872-143.872l60.075-30.037 19.157-57.429-128.427-256.939-54.187-20.608-214.187 85.632-26.88 39.808c0 401.365 326.571 727.893 727.936 727.893l39.765-26.88 85.632-214.187-20.608-54.187z"></path></svg> <span>{{$vendor->contact}}</span></p>

         {{-- <div class="view_details">
            <div class="location">
              <div class="wrap_locaton">
                <img src="{{ url('/frontend/images/location_1x.png') }}" class="navi_img">
                
                <a href="#"><img src="{{ url('/frontend/images/map.png') }}" class="map_image"></a>
              </div>
              
              <p class="view-seller_details"><a href="#">View seller profile</a></p>
            </div>
          </div> --}}
        </div>
    </div>
    <!--********************************************** right side end****************************************************** -->
  </div>
</div>
</section>
            

<!--******************************************** slider end ********************************************************-->
<style>
    .right_side-wraps {
    position: sticky;
    top: 135px;
    height: 100%;
}
.fiiter_wrap-item {
    flex: 0 0 20%;
    max-width: 20%;
}
.product-wrapslider_item img {
    height: 500px;
    object-fit: cover;
}
@media (min-width: 1200px){
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1240px;
}
}
</style>
@endsection
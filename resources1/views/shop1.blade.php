@extends('frontlayouts.main')
@section('main-container')
<!-- Header Area End Here -->
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
   <div class="container">
      <div class="breadcrumb-content">
         <ul>
            <li><a href="{{url('/')}}">Home</a></li>
         </ul>
      </div>
   </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60 pt-sm-30">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 order-1 order-lg-2">
            <div class="shop-top-bar mt-30">
               <div class="shop-bar-inner">
                  <div class="toolbar-amount">
                     <span>Available Products</span>
                  </div>
               </div>
               <!-- product-select-box start -->
               <div class="product-select-box">
                  <div class="product-short">
                     <p>Sort By:</p>
                     <select class="nice-select">
                        <option value="trending">Relevance</option>
                        <option value="sales">Name (A - Z)</option>
                        <option value="sales">Name (Z - A)</option>
                        <option value="rating">Price (Low &gt; High)</option>
                        <option value="date">Rating (Lowest)</option>
                        <option value="price-asc">Model (A - Z)</option>
                        <option value="price-asc">Model (Z - A)</option>
                     </select>
                  </div>
               </div>
               <!-- product-select-box end -->
            </div>
            <!-- shop-top-bar end -->
            <!-- shop-products-wrapper start -->
            <div class="shop-products-wrapper">
               <div class="tab-content">
                  <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                     <div class="product-area shop-product-area">
                        <div class="row">
                           @foreach ($products as $product) 
                           <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                              <!-- single-product-wrap start -->
                              <div class="single-product-wrap">
                                 <div class="product-image">
                                    <a href="{{url('/singleproduct/'.$product->id)}}">
                                    @foreach ($images as $img)
                                    @if($product->id == $img->prod_id)                    
                                    <img src="{{ url('public/files/'.$img->image) }}" style="    height: 12rem;
                                       object-fit: cover;
                                       padding:0 1rem"/> 
                                    <?php break; ?>  
                                    @endif
                                    @endforeach
                                    </a>
                                    <span class="sticker">New</span>
                                 </div>
                                 <div class="product_desc">
                                    <div class="product_desc_info">
                                       <div class="product-review">
                                          <h5 class="manufacturer">
                                             <a href="product-details.html">Graphic Corner</a>
                                          </h5>
                                          <div class="rating-box">
                                             <ul class="rating">
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             </ul>
                                          </div>
                                       </div>
                                       <h4><a class="product_name" href="single-product.html">{{$product->title}}</a></h4>
                                       <div class="price-box">
                                          <span class="new-price">${{$product->price}}</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- single-product-wrap end -->
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- shop-products-wrapper end -->
         </div>
         <div class="col-lg-3 order-2 order-lg-1">
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
                  <h5 class="filter-sub-titel">Brand</h5>
                  <div class="categori-checkbox">
                     <form action="#">
                        <ul>
                           <li><input type="checkbox" name="product-categori"><a href="#">Prime Video (13)</a></li>
                           <li><input type="checkbox" name="product-categori"><a href="#">Computers (12)</a></li>
                           <li><input type="checkbox" name="product-categori"><a href="#">Electronics (11)</a></li>
                        </ul>
                     </form>
                  </div>
               </div>
               <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
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
               </div>
               <!-- filter-sub-area end -->
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Body Wrapper End Here -->
<!-- jQuery-V1.12.4 -->
<script src="frontend/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper js -->
<script src="frontend/js/vendor/popper.min.js"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="frontend/js/bootstrap.min.js"></script>
<!-- Ajax Mail js -->
<script src="frontend/js/ajax-mail.js"></script>
<!-- Meanmenu js -->
<script src="frontend/js/jquery.meanmenu.min.js"></script>
<!-- Wow.min js -->
<script src="frontend/js/wow.min.js"></script>
<!-- Slick Carousel js -->
<script src="frontend/js/slick.min.js"></script>
<!-- Owl Carousel-2 js -->
<script src="frontend/js/owl.carousel.min.js"></script>
<!-- Magnific popup js -->
<script src="frontend/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope js -->
<script src="frontend/js/isotope.pkgd.min.js"></script>
<!-- Imagesloaded js -->
<script src="frontend/js/imagesloaded.pkgd.min.js"></script>
<!-- Mixitup js -->
<script src="frontend/js/jquery.mixitup.min.js"></script>
<!-- Countdown -->
<script src="frontend/js/jquery.countdown.min.js"></script>
<!-- Counterup -->
<script src="frontend/js/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script src="frontend/js/waypoints.min.js"></script>
<!-- Barrating -->
<script src="frontend/js/jquery.barrating.min.js"></script>
<!-- Jquery-ui -->
<script src="frontend/js/jquery-ui.min.js"></script>
<!-- Venobox -->
<script src="frontend/js/venobox.min.js"></script>
<!-- Nice Select js -->
<script src="frontend/js/jquery.nice-select.min.js"></script>
<!-- ScrollUp js -->
<script src="frontend/js/scrollUp.min.js"></script>
<!-- Main/Activator js -->
<script src="frontend/js/main.js"></script>
</body>
<!-- shop-left-sidebar31:48-->
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   $(document).ready(function(){
      $('.vendor_data').click(function(){   
         var vendor_id = $(this).attr('data-vendor_id');
         $.ajax({
              url: 'shop',
              dataType: "json",
              type: "get",
              async: true,
              data: {'vendor_id': vendor_id},
              success: function (data) {
               $('.list-group').html(data);
              }
         });  
      });
   }); 
</script> 
@endsection
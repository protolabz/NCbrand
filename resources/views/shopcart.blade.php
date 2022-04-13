
@extends('frontlayouts.main')
@section('main-container')

            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="/savecart/{{$product->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-quantity">Quantity</th>
                                                <th class="li-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product->images as $img)
                                            <tr>
                                               
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                               
                                                <td class="li-product-thumbnail"><a href="#"><img src="{{ url('files/'.$img->image) }}" alt="Li's Product Image" height="60px" width="60px"></a></td>
                                              
                                                <td class="li-product-name"><a href="#">{{$product->title}}</a></td>
                                                <td class="li-product-price"><span class="amount">{{$product->price}}</span></td>
                                                <td> 
                                                 <label>Quantity</label>
                                                 <div class="container">
                                                 <input type="number" id="myNumber" min="0" name="number" value="1" style="width: 12%"> 
                                                 </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">{{$product->price}}</span></td>
                                            </tr>
                                          
                                            @endforeach
                                            {{-- <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="{{url('images/product/small-size/6.jpg')}}" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="#">Mug Today is a good day</a></td>
                                                <td class="li-product-price"><span class="amount">$71.80</span></td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$60.50</span></td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                {{-- <input class="button" name="update_cart" value="Update cart" type="submit"> --}}
                                                <button type="submit" class="btn btn-primary">Update Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>$130.00</span></li>
                                                <li>Total <span>$130.00</span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <!-- Begin Footer Area -->
            
            <!-- Footer Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="{{url('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- Popper js -->
        <script src="{{url('js/vendor/popper.min.js')}}"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <!-- Ajax Mail js -->
        <script src="{{url('js/ajax-mail.js')}}"></script>
        <!-- Meanmenu js -->
        <script src="{{url('js/jquery.meanmenu.min.js')}}"></script>
        <!-- Wow.min js -->
        <script src="{{url('js/wow.min.js')}}"></script>
        <!-- Slick Carousel js -->
        <script src="{{url('js/slick.min.js')}}"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{url('js/owl.carousel.min.js')}}"></script>
        <!-- Magnific popup js -->
        <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Isotope js -->
        <script src="{{url('js/isotope.pkgd.min.js')}}"></script>
        <!-- Imagesloaded js -->
        <script src="{{url('js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- Mixitup js -->
        <script src="{{url('js/jquery.mixitup.min.js')}}"></script>
        <!-- Countdown -->
        <script src="{{url('js/jquery.countdown.min.js')}}"></script>
        <!-- Counterup -->
        <script src="{{url('js/jquery.counterup.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{url('js/waypoints.min.js')}}"></script>
        <!-- Barrating -->
        <script src="{{url('js/jquery.barrating.min.js')}}"></script>
        <!-- Jquery-ui -->
        <script src="{{url('js/jquery-ui.min.js')}}"></script>
        <!-- Venobox -->
        <script src="{{url('js/venobox.min.js')}}"></script>
        <!-- Nice Select js -->
        <script src="{{url('js/jquery.nice-select.min.js')}}"></script>
        <!-- ScrollUp js -->
        <script src="{{url('js/scrollUp.min.js')}}"></script>
        <!-- Main/Activator js -->
        <script src="{{url('js/main.js')}}"></script>
    </body>
    
<!-- shopping-cart31:32-->
</html>

@endsection
@foreach ($products as $product)  
      
         <div class="col-md-4 col-lg-4 col-sm-12 col-12 itms_products">
        
						<div class="wrapslider_item">
			             	<div class="slider_img">
                       
				              <a href="{{url('singleproduct/'.$product->id)}}">
                         
                         
                             <img src="{{ url('http://localhost/local/public/files/'.$product->product_image ) }}" alt="Slide 3">
                             
                            
                           </a>
                        
				          </div>
				          <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
				          <span class="featured">Featured</span>
			              <a href="{{url('singleproduct/'.$product->id)}}"><div class="slider_caption">
				              	<h5>₹ {{$product->price}}</h5>
				              	<p class="description">{{$product->title}}</p>
				              	<!-- <p class="description2">{{$product->description}}</p> -->
				              </div></a>
                        
			             </div>
         
                      
				</div>
            @endforeach

            


            <!-- <script>
               $('document').ready(function(){

             
               $('#pagination a').on('click',function(e){
                     e.preventDefault();
                     var page = $(this).attr('href').split('page=')[1];
                     fetch_data(page);
               });
             
             function fetch_data(page){
               var l = window.location;

               $.ajax({
               url: l.origin + l.pathname + "?page=" + page,
               success: function(satwork) {
                  console.log(satwork);
               $('#product_details').html(satwork);
               }
               });
             }
            });
            </script> -->
 @if ($products->lastPage() > 1)
<ul class="pagination ml-auto">
   <li class="{{ ($products->currentPage() == 1) ? ' disabled' : '' }} page-item">
      <a class=" page-link " href="{{ $products->url(1) }}" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
      <span class="sr-only">Previous</span>
      </a>
   </li>
   @for ($i = 1; $i <= $products->lastPage(); $i++)
   <li class="{{ ($products->currentPage() == $i) ? ' active' : '' }} page-item">
      <a class=" page-link " href="{{ $products->url($i) }}">{{ $i }}</a>
   </li>
   @endfor
   <li class="{{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }} page-item">
      <a href="{{ $products->url($products->currentPage()+1) }}" class="page-link" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
      <span class="sr-only">Next</span>
      </a>
   </li>
</ul>
@endif
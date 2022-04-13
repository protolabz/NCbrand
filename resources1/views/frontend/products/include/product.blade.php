@foreach ($products as $product) 
<div class="col-md-4 col-lg-4 col-sm-2 col-12 itms_products">
                      <div class="wrapslider_item">
                            <div class="slider_img">
                              <a href="{{url('singleproduct/'.$product->id)}}">
                                 @foreach ($images as $img)
                                 @if($product->id == $img->prod_id)                    
                                 <img src="{{ url('public/files/'.$img->image) }}" class="img-thumbnail" style="height: 170px;"/> 
                                 <?php break; ?>  
                                 @endif
                                 @endforeach
                              </a>
                          </div>
                          <span class="heart_icon"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                          <span class="featured">Featured</span>
                           <a href="#"><div class="slider_caption">
                               <h5>${{$product->price}}</h5>
                               <p class="description">3 Bds - 3 Ba - 1400 ft2</p>
                               <p class="description2">{{$product->title}}</p>
                              </div></a>
                          </div>
                   </div>
@endforeach
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
@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="container">
      <div class="card mt-5">
         <div class="card-header">
            <h3 class="card-title">Edit Product</h3>
         </div>
         <div class="card-body">
            <form action="{{'/edit/update'}}/{{$products->id}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="" value="{{$products->title}}">
               </div>
               <div class="form-group">
                  <label for="">Subtitle</label>
                  <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="" value="{{$products->subtitle}}">
               </div>
               <div class="form-group">
                  <label for="">Price</label>
                  <input type="text" name="price" id="price" class="form-control" placeholder="" value="{{$products->price}}">
               </div>
               <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" name="description" id="description" class="form-control" placeholder="" value="{{$products->description}}">
               </div>
               <button type="submit" class="btn btn-primary">Update</button>
            </form>
         </div>
      </div>   
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $(".btn-success").click(function(){ 
         var lsthmtl = $(".clone").html();
         $(".increment").after(lsthmtl);
     });
     $("body").on("click",".btn-danger",function(){ 
         $(this).parents(".hdtuto").remove();
     });
   });
</script>
@endsection
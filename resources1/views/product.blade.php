@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="container">
      <div class="card mt-5">
         <div class="card-header">
            <h3 class="card-title">Add Product</h3>
         </div>
         <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
               @csrf
               @if(Auth::user()->usertype == 0)
               <div class="form-group">
                  <label for="">Vendor</label>
                  <select class="form-control" name="vendor" id="vendor">
                     @foreach($vendors as $vendor)
                     <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                     @endforeach
                  </select>
               </div>
               @else
               <input type="hidden" value="{{Auth::id()}}" name="vendor">
               @endif
               <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="">
                  @if ($errors->has('title'))
                  <span class="text-danger">{{ $errors->first('title') }}</span>
                  @endif
               </div>
               <div class="form-group">
                  <label for="">Subtitle</label>
                  <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="">
                  @if ($errors->has('subtitle'))
                  <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                  @endif
               </div>
               <div class="form-group">
                  <label for="">Image</label>
                  <div class="input-group hdtuto control-group lst increment" >
                     <input type="file" name="filenames[]" class="myfrm form-control">
                     <div class="input-group-btn"> 
                        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                     </div>
                  </div>
                  <div class="clone hide">
                     <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                        <input type="file" name="filenames[]" class="myfrm form-control">
                        <div class="input-group-btn"> 
                           <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="">Price</label>
                  <input type="text" name="price" id="price" class="form-control" placeholder="">
                  @if ($errors->has('price'))
                  <span class="text-danger">{{ $errors->first('price') }}</span>
                  @endif
               </div>
               <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" name="description" id="description" class="form-control" placeholder="">
                  @if ($errors->has('description'))
                  <span class="text-danger">{{ $errors->first('description') }}</span>
                  @endif
               </div>
               <div class="form-group">
                  <label for="">Dimension</label>
                  <select class="form-control"  multiple="multiple" name="dimension[]">
                     <option value="40*60">40*60</option>
                     <option value="60*90">60*90</option>
                     <option value="80*120">80*120</option>
                  </select>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>   
      </div>   
   </div>
</div>
{{-- <script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script> --}}
<

    
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


      //   CKEDITOR.replace('description', {
      //         height: 300,
      //       });
</script>
@endsection
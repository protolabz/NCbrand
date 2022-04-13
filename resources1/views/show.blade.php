@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="container">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Product List</h3>
            <span><a class="btn btn-primary float-right" href="{{ url('/product/new') }}">Add New</a></span>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
               <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Dimension</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
                </tr>
               </thead>
               <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->subtitle}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->dimension}}</td>
                    {{-- <td><img src="{{url('public/files/'.$product->image)}}" height="70px" width="70px"></td> --}}
                    <td> 
                    @foreach ($images as $img)  
                    @if($product->id==$img->prod_id)                       
                    <img src="{{ url('public/files/'.$img->image) }}" height="70px" width="70px"/>   
                    @endif  
                    @endforeach                 
                    </td>
                   
                    <td><a href="{{url('/edit/'.$product->id)}}">Edit</a></td>
                    <td><a href="{{url('/delete/'.$product->id)}}" onclick="return confirm('Are you sure to delete this')">Delete</a></td>
                </tr>
                @endforeach
               </tbody>
            </table>
         </div>
         <!-- /.card-body -->
      </div>
   </div>
</div>
@endsection
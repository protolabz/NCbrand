@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="container">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Vendor List</h3>
            <span><a class="btn btn-primary float-right" href="{{ url('/vendor/new') }}">Add New</a></span>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
               <thead>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Action</th>
               </thead>
               <tbody>
                  @foreach($vendors as $vendor)
                  <tr>
                     <td>{{$vendor->id}}</td>
                     <td>{{$vendor->name}}</td>
                     <td>{{$vendor->contact}}</td>
                     <td>{{$vendor->email}}</td>
                     <td>{{$vendor->password}}</td>
                     <td><a href="{{url('/editvendor/'.$vendor->id)}}">Edit</a>/<a href="{{url('/deletevendor/'.$vendor->id)}}" onclick="return confirm('Are you sure to delete this')">Delete</a></td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   $('#example').dataTable( {
     "searching": true
   } );
</script>
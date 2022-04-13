@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="container">
      <div class="card mt-5">
         <div class="card-header">
            <h3 class="card-title">Edit Vendor</h3>
         </div>
         <div class="card-body">
            <form action="/editvendor/update/{{$vendors->id}}" method="post" >
               @csrf
               <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="" value="{{$vendors->name}}">
                  @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
               </div>
               <div class="form-group">
                  <label for="">Contact</label>
                  <input type="text" name="contact" id="contact" class="form-control" placeholder="" value="{{$vendors->contact}}">
                  @if ($errors->has('contact'))
                  <span class="text-danger">{{ $errors->first('contact') }}</span>
                  @endif
               </div>
               <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="" value="{{$vendors->email}}">
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
               </div>
               <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="" value="{{$vendors->password}}">
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
               </div>
               <div class="form-group">
                  <label for="">Confirm Password</label>
                  <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="" value="{{$vendors->password}}">
                  @if ($errors->has('confirm_password'))
                  <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                  @endif
               </div>
               <button type="submit" class="btn btn-primary">Update</button>
            </form>
         </div>   
      </div>   
   </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50" align="center">Welcome {{ucfirst(Auth::user()->name)}}!</h1>
    </div>
@endsection

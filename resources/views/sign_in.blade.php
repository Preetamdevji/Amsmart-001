@extends('layout.master')
@section ('title')
    Sign In
@endsection
@section('main-content')

<section>
<div class="mt-5">
    @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
    @endif

  @if(session()->has('error'))
  <div class="alert alert-danger">{{session('error')}}</div>
  @endif
  
  @if(session()->has('success'))
  <div class="alert alert-success">{{session('success')}}</div>
  @endif
  </div>
<form class="container" action="{{route('sign_in')}}" method="GET" enctype="multipart/form-data">

@csrf
  <div class="mb-12">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" 
    name="email" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>
@endsection
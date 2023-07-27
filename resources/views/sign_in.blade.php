@extends('layout.master')
@section ('title')
    Sign In
@endsection
@section('main-content')

<section>
<form class="container" action="{{route('sign_in')}}" method= "Post" enctype="multipart/form-data">
@csrf
  <div class="mb-12">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" 
    name="email" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-12">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" name="password" id="password">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>
@endsection
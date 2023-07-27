@extends('layout.master')
@section ('title')
    Sign Up
@endsection
@section('main-content')

<section>
<form class="row g-3" action="{{route('sign_up')}}" method="Post" enctype="multipart/form-data">
@csrf
    <div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="col-md-6">
    <label for="last_name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
    </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="col-md-6">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="number" class="form-control" id="mobile" name="mobile">
  </div>

  <div class="col-md-6">
    <label for="country" class="form-label">Country</label>
    <input type="text" class="form-control" id="country" name="country">
  </div>
 
  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  
  <div class="col-6">
    <label for="address" class="form-label">Address</label>
    <textarea class="form-control" id="address" rows="4" cols="50" name="address" placeholder="1234 Main St"></textarea>
  </div>
  
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</section>


@endsection
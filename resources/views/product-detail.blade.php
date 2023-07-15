@extends('layout.master')
@section('page-title')
    Product Detail
@endsection
@section('main-content')

<style>
    *{
        font-family: 'Poppins', sans-serif;
        margin: 0px;
    }
    .container{
        max-width: 80%;
        margin: auto;
    }
    .content{
        margin-left: 30px;
    }
    .first-section{
        display: flex;
    }
    h3{
        font-size: 30px;
        font-weight: 600;
        margin: 0px 0 00px 0;
    }
    h5{
        /* margin-top: 10px; */
        font-weight: 500;
        font-size: 14px;
    }
    h5 b{
        font-weight: 400;
    }
    h4{
        margin-top: 10px;
        font-size: 20px;
    }
    h5 b:hover{
        color: #0984e3;
        cursor: pointer;
    }
    #seventy{
        color: #0984e3;
    }
    ul li{
        line-height: 30px;
    }
    #last{
        margin-top: 20px;
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Roboto&display=swap" rel="stylesheet">
    </head>
<body>
  
<section style="height:540px;" class="home-section">
<div class="container">
    <div class="first-section">
        <div class="img-one">    
        <img src="/uploads/{{$product->product_img}}" style="width: 350px; height: 350px;"> 
        </div>
    <div class="content">
   
    <form method="get" action="/cart">
        @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <h3 style="margin-top: 20px;">{{$product->product_name}}</h3>
        
    <h5>Brand : <b>{{$product->linkProductBrand->title}}</b></h5>
        
    <h4 style="margin-bottom: 20px;"><b id="seventy">Rs:{{$product->new_price}} </b> <span style="text-decoration: line-through">Rs:{{$product->old_price}}</s></h4>

    <h5 style="margin-bottom: 10px;">Color Family : <b>{{$product->color_family}}</b></h5>

    <h5 style="margin-bottom: 10px;">Availability : <b>{{$product->availability}}</b></h5>

    <h5 style="margin-bottom: 10px;">Category : <b>{{$product->linkProductCategory->title}}</b></h5>
    <!-- <h3 id="last">Product details of OPPO A16e 4+64GB Memory Mobile Phone</h3> -->
    <!-- <ul style="list-style: none"> -->
        <p style="font-size: 14px;">{{$product->description}}</p>
    <!-- </ul> -->
 
    <button  type = "submit" class="btn btn-warning">Add to Cart</button>
    <a href="#" class="btn btn-warning">Buy Now</a>
    </form>
  
    </div>
</div>
    </div>
</section>
@endsection




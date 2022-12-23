@extends('layout.master')
@section('page-title')
    Products
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
        font-size: 20px;
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
<SECTION class="home-section">
    <div class="container">

<div class="first-section">

<div class="img-one">
        
    <img src="/uploads/{{$product->product_img}}"> 
    </div>
    <div class="content">
        <h3>{{$product->product_name}}</h3>
        
        <h5>Brand : <b>{{$product->LinkProductBrand->title}}</b></h5>
        
        <h4><b id="seventy">Rs:{{$product->new_price}} </b> <strike>Rs:{{$product->old_price}}</strike></h4>
        <h5>Color Family : <b>{{$product->color_family}}</b></h5>
        <h5>Availability : <b>{{$product->availability}}</b></h5>
        <h5>Category : <b>{{$product->LinkProductCategory->title}}</b></h5>
        <!-- <h3 id="last">Product details of OPPO A16e 4+64GB Memory Mobile Phone</h3> -->
        <ul>
            <li>{{$product->description}}</li>
        </ul>
    </div>
</div>
    </div>
</SECTION>
@endsection
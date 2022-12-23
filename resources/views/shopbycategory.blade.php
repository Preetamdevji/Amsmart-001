@extends('layout.master')
@section('page-title')
    Product Category
@endsection
@section('main-content')

<section class="products">
    
    <h1 class="heading"> {{App\Models\Product_Category::where('id',$id)->first()->title}}</span> </h1>

    <div class="box-container">
    @foreach($shopby as $item)
        <a href="/product-detail/{{$item->id}}" class="box">
            <div class="image">
                <img src="/uploads/{{$item->product_img}}" class="main-img" alt="">
                <img src="/uploads/{{$item->product_img}}" class="hover-img" alt="">
               
            </div>
            <div class="content">
                <h3>{{$item->product_name}}</h3>
                <div class="price">Rs:{{$item->new_price}} <span>Rs:{{$item->old_price}}</span></div>
                
            </div>
        </a>
        @endforeach
    </div>
</section>

<section class="faq">





</section>

<!-- faq section ends -->
@endsection
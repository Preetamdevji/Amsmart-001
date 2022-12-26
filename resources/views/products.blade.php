@extends('layout.master')
@section('page-title')
    Products
@endsection
@section('main-content')

<!-- category section starts  -->

<section class="category">
    <h1 class="heading"> shop by <span>category</span> </h1>
     <div class="box-container">
          @forelse($Product_Cate as $item)
            <a href="/shopbycategory/{{$item->id}}" class="box">
              <i class="fa fa-bars" style="font-size:36px;"></i>
                <h3>{{$item->title}}</h3>
            </a>
          @empty
          <div style="color:red;">No Category available</div>
          @endforelse
    </div>
</section>

<!-- category section ends -->

<!-- products section starts  -->

<section class="products">

    <h1 class="heading"> All <span>Products</span> </h1>

    <div class="box-container">
        @forelse($product as $product)
        <a href="/product-detail/{{$product->id}}" class="box">
            <div class="image">
                <img src="/uploads/{{$product->product_img}}" style="width: 300px; height: 300px" class="main-img" alt="">
                <img src="/uploads/{{$product->product_img}}" style="width: 300px; height: 300px" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>{{$product->product_name}}</h3>
                <div class="price">${{$product->new_price}} <span>${{$product->old_price}}</span></div>
            </div>
        </a>

        @empty

        <div style="color:red;">No Matching Result Of Your Search Try Different Keywords</div>
        @endforelse

    </div>

</section>

<!-- products section ends -->

<!-- product banner section starts  -->

<section class="product-banner">

    <h1 class="heading"> <span>deal</span> of the day </h1>

    <div class="box-container">
        @forelse($DealBanner as $deal)
        <div class="box">
            <img src="/uploads/{{$deal->slider_image}}" style="width: 506px; height: 296px;" alt="">
            <div class="content">
                <span>{{$deal->top_title}}</span>
                <h3>{{$deal->title}}</h3>
                <a href="/contact" class="btn">{{$deal->button}}</a>
            </div>
        </div>

        @empty
        @endforelse

    </div>
    
</section>

@endsection
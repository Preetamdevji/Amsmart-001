@extends('layout.master')
@section('page-title')
    Home
@endsection
@section('main-content')

<!-- home section starts  -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">
        @forelse($sliders as $slider)
        <div class="swiper-slide slide">
            <div class="image">
                <img src="/uploads/{{$slider->slider_image}}" style="width: 300px; height: 300px;" alt="">
            </div>
            <div class="content">
                <span>{{$slider->top_title}}</span>
                <h3>{{$slider->title}}</h3>
                <a href="/contact" class="btn">{{$slider->button}}</a>
            </div>
        </div>
        @empty
        @endforelse


        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box-container">
        @forelse($HomeBanners as $banner)
        <a href="#" class="box">
            <img src="/uploads/{{$banner->slider_image}}" style="width: 329px; height: 246px;" alt="No Image Found">
            <div class="content">
                <span>{{$banner->top_title}}</span>
                <h3>{{$banner->title}}</h3>
            </div>
        </a>

        @empty
        @endforelse
        
    </div>

</section>

<!-- banner section ends -->

<!-- arrivals section starts  -->

<section class="arrivals">

    <h1 class="heading"> New <span>Arrivals</span> </h1>

    <div class="box-container">
        @forelse($NewArrivals as $newArrival)

        <a href="/product-detail/{{$newArrival->id}}" class="box">
            <div class="image">
                <img src="/uploads/{{$newArrival->product_img}}" style="width: 150px; height: 150px;" class="main-img" alt="">
                <img src="/uploads/{{$newArrival->product_img}}" style="width: 150px; height: 150px;" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>{{$newArrival->product_name}}</h3>
                <div class="price"> Rs:{{$newArrival->new_price}} <span>Rs:{{$newArrival->old_price}}</span> </div>
            </div>
        </a>
        @empty
        @endforelse

    </div>

</section>


<section class="products">

    <h1 class="heading"> Featured <span>Products</span> </h1>

    <div class="box-container">
        @forelse($FeaturedProducts as $Featured)
        <a href="/product-detail/{{$Featured->id}}" class="box"><span class="box" style="background-color: red; color: white; font-weight: bold; margin-top: 15px;">Hot</span>

            <div class="image">
                <img src="/uploads/{{$Featured->product_img}}" style="width: 270px; height: 300px;" class="main-img" alt="">
                <img src="/uploads/{{$Featured->product_img}}" style="width: 270px; height: 300px;" class="hover-img" alt="">

            </div>
            <div class="content">
                <h3>{{$Featured->product_name}}</h3>
                <div class="price">Rs:{{$Featured->new_price}} <span>Rs:{{$Featured->old_price}}</span></div>
            </div>
        </a>

        @empty
        @endforelse

        

    </div>

</section>

<!-- arrivals section ends -->
@endsection
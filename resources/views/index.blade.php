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
                <img src="/uploads/{{$slider->slider_image}}" alt="">
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
            <img src="/uploads/{{$banner->slider_image}}" width="825px" height="550px" alt="No Image Found">
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

    <h1 class="heading"> new <span>arrivals</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="/assets/images/arrival-1.jpg" class="main-img" alt="">
                <img src="/assets/images/arrival-1-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>HD television</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/assets/images/arrival-2.jpg" class="main-img" alt="">
                <img src="/assets/images/arrival-2-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>lenovo laptop</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/assets/images/arrival-3.jpg" class="main-img" alt="">
                <img src="/assets/images/arrival-3-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>new smartphone</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/assets/images/arrival-4.jpg" class="main-img" alt="">
                <img src="/assets/images/arrival-4-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>new printer</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/assets/images/arrival-5.jpg" class="main-img" alt="">
                <img src="/assets/images/arrival-5-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>new headphones</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/assets/images/arrival-6.jpg" class="main-img" alt="">
                <img src="/assets/images/arrival-6-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>new speakers</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- arrivals section ends -->
@endsection
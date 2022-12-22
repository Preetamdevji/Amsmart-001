@extends('layout.master')
@section('page-title')
    Home
@endsection
@section('main-content')

<!-- home section starts  -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="image">
                <img src="/assets/images/home-img-1.jpg" alt="">
            </div>
            <div class="content">
                <span>upto 50% off</span>
                <h3>smartphones</h3>
                <a href="/contact" class="btn">shop now</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="/assets/images/home-img-2.jpg" alt="">
            </div>
            <div class="content">
                <span>upto 50% off</span>
                <h3>smartwatch</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="/assets/images/home-img-3.jpg" alt="">
            </div>
            <div class="content">
                <span>upto 50% off</span>
                <h3>headphones</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box-container">

        <a href="#" class="box">
            <img src="/assets/images/banner-1.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
            </div>
        </a>

        <a href="#" class="box">
            <img src="/assets/images/banner-2.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
            </div>
        </a>

        <a href="#" class="box">
            <img src="/assets/images/banner-3.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
            </div>
        </a>
        
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
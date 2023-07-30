<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title') | AmSmart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="/home" class="logo"> <i class="fas fa-store"></i> AmSmart </a>
    

    <!-- <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form> -->

    <form class="search-form" action="{{ Route('search') }}" method="GET">
    <input value="{{$search}}" name="search" type="search" id="search-box" placeholder="search here...">
    <button for="search-box" class="fas fa-search"></button>	
    						
	</form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

</header>

<!-- header section ends -->

<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="/assets/images/amsmart.webp" style="width: 190px; height: 190px;" alt="">
        <h3>AmSmart Solution</h3>
    </div>

    <nav class="navbar">
        <a href="/home"> <i class="fas fa-angle-right"></i> Home </a>
        <a href="/about"> <i class="fas fa-angle-right"></i> About </a>
        <a href="/products"> <i class="fas fa-angle-right"></i> Products </a>
        <a href="/contact"> <i class="fas fa-angle-right"></i> Contact </a>
    
        @if(Auth::guard('buyer')->check())
        <a href="/logout"> <i class="fas fa-angle-right"></i> Logout </a>
        @else
        <a href="/sign_in"> <i class="fas fa-angle-right"></i> Login </a>
        <a href="/sign_up"> <i class="fas fa-angle-right"></i> Registration </a>
        @endif

        <span>
            @if(Auth::guard('buyer')->check())
                {{auth::guard('buyer')->user()->name}}
            @endif
        </span>
        <!-- <a href="#"> <i class="fas fa-angle-right"></i> cart </a> -->
    </nav>

</div>

<!-- side-bar section ends -->

    <!-- BEGIN MAIN CONTENT -->
    @yield('main-content')
    <!-- END MAIN CONTENT -->

<!-- footer section starts  -->

<section class="quick-links">

    <a href="/" class="logo"> <i class="fas fa-store"></i> AmSmart </a>

    <div class="links">
        <a href="/"> Home </a>
        <a href="/about"> About </a>
        <a href="/products"> Products </a>
        <a href="/contact"> Contact </a>
    </div>

    <div class="share">
        <a href="https://www.facebook.com/amsmartonline" class="fab fa-facebook-f"></a>
        <a href="https://wa.me/03452252254" class="fab fa-whatsapp"></a>
        <a href="https://www.instagram.com/umair_1985/" class="fab fa-instagram"></a>
    </div>

</section>

<section class="credit">

    <p> created by <span>SquadCloud Team</span> | all rights reserved by 2023! </p>

</section>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="/assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


   
</body>
</html>



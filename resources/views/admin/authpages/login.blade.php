<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="/assets/admin/dist/css/style.css">

</head>
<body>
    
<!-- header section starts  -->


<!-- side-bar section ends -->

<!-- login form section starts  -->

<section class="login">
    <div class="heading">
        <h1 style="margin-top: 20px; text-decoration: underline; color: black;">AmSmart Solution</h1>
    </div>

    <form method="POST" action="{{ route('login') }}" style="margin-top: 50px;">
        @csrf
        <h3>login now</h3>
        <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus class="box">
        <input id="password" type="password" name="password" required autocomplete="current-password" class="box">
        <div class="remember">
            <input type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember-me"> remember me </label>
        </div>
        <button type="submit" class="btn">login now</button>
        
        <!-- <a href="#" class="btn btn-google btn-user btn-block">
            <i class="fa-brands fa-google">Login With Google</i>
        </a> -->
    </form>

</section>

<!-- login form section ends  -->


<!-- footer section starts  -->




<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="/assets/admin/dist/js/script.js"></script>

</body>
</html>
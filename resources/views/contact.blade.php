@extends('layout.master')
@section('page-title')
    Products
@endsection
@section('main-content')
<!-- contact info section starts  -->

<section class="info-container">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map"></i>
            <h3>address</h3>
            <p>mumbai, india - 400104</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>shaikhanas@gmail.com</p>
            <p>anasbhai@gmail.com</p>
        </div>

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

    </div>

</section>

<!-- contact info section ends -->

<!-- contact section starts  -->

<section class="contact">

    <form action="">
        <h3>get in touch</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe provident nihil non unde, quia magnam quibusdam ad obcaecati nam animi?</p>
        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="email" placeholder="your email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1638365961619!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

</section>

<!-- contact section ends -->

@endsection
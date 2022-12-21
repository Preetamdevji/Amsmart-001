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

    <form action="/admin/contact" method="post">
        @csrf
        <h3>get in touch</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe provident nihil non unde, quia magnam quibusdam ad obcaecati nam animi?</p>
        <div class="inputBox">  
            <input name="name" id="name" type="text" value="{{old('name')}}" placeholder="your name">
            <input name="email" id="email" value="{{old('email')}}" type="email" placeholder="your email">
            @error('name')
                <span class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('email')
                <span class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="inputBox">
            <input name="number" id="number" value="{{old('number')}}" type="number" placeholder="your number">
            <input name="subject" id="subject" value="{{old('subject')}}" type="text" placeholder="subject">
            @error('number')
                <span class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('subject')
                <span class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <textarea name="message" id="message" placeholder="your message" id="" cols="30" rows="10">{{old('message')}}</textarea>
        <input type="submit" value="send message" class="btn">
    </form>

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1638365961619!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

</section>

<!-- contact section ends -->

@endsection
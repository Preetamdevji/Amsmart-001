@extends('layout.master')
@section('page-title')
    Contact
@endsection
@section('main-content')
<!-- contact info section starts  -->

<section class="info-container">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map"></i>
            <h3>address</h3>
            <p>North Nazimabad, Block M, Karachi, Pakistan</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>---</p>
            <p>amsmartsol@gmail.com</p>
        </div>

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>number</h3>
            <p>+92 345 2252254</p>
            <p>+92 312 1116383</p>
        </div>

    </div>

</section>

<!-- contact info section ends -->

<!-- contact section starts  -->

<section class="contact">
<div class="row">
    <div class="col-md-12" style="margin-bottom: 10px;">
    <form action="/admin/contact" method="post">
        @csrf
        <h3>Get In Touch</h3>
        <p style="font-weight: bold; color: red;">For Online Orders, Contact Us. If You Can't find the answer you are looking for? Contact us through below Contact Form. We will Response you as soon as Possible.</p>
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
    </div>
    <div class="col-12">
       <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1050&amp;height=350&amp;hl=en&amp;q=North Nazimabad, Block M, Karachi, Pakistan&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.gachacute.com/">Gacha Cute</a></div><style>.mapouter{position:relative;text-align:right;width:1050px;height:350px;}.gmap_canvas {overflow:hidden;background:none!important;width:1050px;height:350px;}.gmap_iframe {width:1050px!important;height:350px!important;}</style></div>
    </div>
    </div>
</section>

<!-- contact section ends -->

@endsection
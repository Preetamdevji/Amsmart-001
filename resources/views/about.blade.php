@extends('layout.master')
@section('page-title')
    About
@endsection
@section('main-content')

<!-- about section starts  -->

<section class="about">
@forelse($CrmAbout as $about)
    <div class="image">
        <img src="/uploads/{{$about->img}}" style="width: 520px; height: 370px;" alt="No image found">
    </div>

    <div class="content">
        <h3>{{$about->title}}</h3>
        <p>{{$about->body}}</p>
    </div>
@empty
@endforelse
</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> Questions & <span>Answers</span> </h1>

    <div class="accordion-container">
        @forelse($CmsFaq as $Faq)
        <div class="accordion">
            <div class="accordion-heading">
                <h3>{{$Faq->title}}</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                {{$Faq->body}}
            </p>
        </div>
        @empty
        @endforelse

    </div>

</section>

<!-- faq section ends -->
@endsection
@extends('layout.master')
@section('page-title')
    About
@endsection
@section('main-content')

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="/assets/images/about-img.png" alt="">
    </div>

    <div class="content">
        <h3>our story</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, distinctio et? Odio voluptatum eius reprehenderit saepe quisquam excepturi molestiae architecto.</p>
    </div>

</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> questions & <span>answers</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to make websites?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to place order online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to pay online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>is online payment safe?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to contact service center?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

    </div>

</section>

<!-- faq section ends -->
@endsection
@extends('front.base')
@section('head')
    <meta property="CSRF-token" content="{{ Session::token() }}"/>
@stop
@section('content')
    @include('partials.logoheader')
    @include('partials.pagenav')
    <section class="lead-video">
        <video id="video" src="/video/MYM_Solutions2.mp4" poster="/images/video/video_image.jpg" controls playsinline></video>
        @include('front.svgicons.play_button')
        @include('front.svgicons.pause_button')
    </section>
    <section id="about" class="about-section hp-section">
        <h2 class="section-title">ABOUT</h2>
        <p>You already know this but we’ll say it anyway - if you want to take your business to another level then having an online presence is essential. Agreed? Cool, then keep reading.</p>
        <p>Google processes over 40,000 search queries per second and Facebook has almost 2 billion active users. Make Your Mark (that’s us) will guide you in creating successful digital marketing campaigns ensuring that you stay ahead of your competition.</p>
        <p>We are specialists in Google advertising, social media management and web design and development.</p>
    </section>
    <section id="services" class="service-section hp-section">
        <h2 class="section-title">SERVICES</h2>
        <div class="service-box-wrapper">
            <div class="service-box">
                <h3><i class="fa fa-paint-brush"></i></h3>
                <h3>Social Media Management</h3>
                <p>The numbers speak for themselves. The amount of people using Social media in one form or another is staggering. Can your business afford to be left out? With the ability to target your audience, increase brand awareness and loyalty, get real-time results from campaigns and provide rich customer experiences a successful Social media strategy is essential to any business small or big.</p>
            </div>
            <div class="service-box">
                <h3><i class="fa fa-group"></i></h3>
                <h3>Google<br>Adwords</h3>
                <p>No matter what your business does, thousands of people are searching for your product or service every day online. Google Advertising is an online advertising service that ensures that your business gains the maximum amount of exposure online by analyzing these search queries and creating appropriate Google advertisements keeping your business ahead of the pack.</p>
            </div>
            <div class="service-box">
                <h3><i class="fa fa-gears"></i></h3>
                <h3>WEB<br>DESIGN</h3>
                <p>Need to connect? Then don't kid yourself, you need a website. No brand is complete without a web presence, and you will only benefit from this. From a simple landing page with your contact details to a multi-faceted, outright work horse, we can create the website you need to showcase your company's products, services and talent, making it easier for people to find you, and for you to stand out.</p>
            </div>
        </div>
        {{--<p class="service-prompt">Ready to get started? Hit the button and complete our brief.</p>--}}
        {{--<div class="start-prompt"> <a href="getstarted">GET STARTED</a> </div>--}}
    </section>
    <section id="contact" class="contact-section hp-section">
        <h2 class="section-title">CONTACT</h2>
        @include('partials.contactform')
        <p>-or-</p>
        <p>Feel free to call, text or email with any questions and enquiries <br>
            <br>
            <strong>Ryan Kiepiel</strong> <br>
            +27 83 257 9611 <br>
            &#114;y&#97;&#110;&#64;mym&#115;oluti&#111;&#110;s&#46;c&#111;&#46;&#122;&#97;</p>
    </section>
    @include('partials.footer')
@stop
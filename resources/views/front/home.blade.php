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
        <p>You already know this but we'll say it anyway - to be taken seriously in your industry you need to look the part.You've got the ideas and you've got the talent, now all you need is an awesome identity to make your presence truly felt. Agreed? Cool, then keep reading.</p>
        <p>Make Your Mark (that's us) wants to take your new or existing brand and make it look remarkable. We want to give it the personality it deserves, while maintaining stature and functionality. That's not always an easy balance to achieve, but don't worry, that's what we are here for.</p>
        <p>We specialise in logo design, corporate branding and web design and development.</p>
    </section>
    <section id="services" class="service-section hp-section">
        <h2 class="section-title">SERVICES</h2>
        <div class="service-box-wrapper">
            <div class="service-box">
                <h3><i class="fa fa-paint-brush"></i></h3>
                <h3>LOGOS</h3>
                <p>Your logo is the face of your organisation. People will look at it and judgement will instantly be made about you. For this reason your logo should represent what you do, why you do it and how you do it in a captivating, emotional, timeless way. Sounds complex, right? It is. But don't worry, we've got this. We take great pride in our logo craft and want nothing more than to help you make your everlasting mark in this world.</p>
            </div>
            <div class="service-box">
                <h3><i class="fa fa-group"></i></h3>
                <h3>IDENTITY</h3>
                <p>It's time to add some personality to your identity. You want to reach out to people and let them know who you are what you do. For this your branding needs to be clear, presentable and informative with just the right amount of charm. We offer superior branding identity solutions, from the all-important business card, to corporate stationery, clothing and gifting, to print and digital layout design. </p>
            </div>
            <div class="service-box">
                <h3><i class="fa fa-gears"></i></h3>
                <h3>WEB DESIGN</h3>
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

@section('bodyscripts')
    <script src="{{ asset('js/contactform.min.js') }}"></script>
    <script>
        myContactForm.init();

        var videoManager = {

            elems: {
                video: document.querySelector('#video'),
                container: document.querySelector('.lead-video'),
                play: document.querySelector('#play_btn'),
                pause: document.querySelector('#pause_btn')
            },

            init: function() {
                videoManager.elems.container.classList.add('can-control');

                videoManager.elems.container.addEventListener('click', videoManager.togglePlay, false);

                videoManager.elems.video.addEventListener('play', videoManager.handlePlay, false);
                videoManager.elems.video.addEventListener('pause', videoManager.handlePause, false);
            },

            togglePlay: function() {
                var video = videoManager.elems.video;
                if(video.paused) {
                    return video.play();
                }
                video.pause();
            },

            handlePlay() {
                var container = videoManager.elems.container;
                container.classList.remove('paused');
                container.classList.add('playing');
            },

            handlePause() {
                var container = videoManager.elems.container;
                container.classList.remove('playing');
                container.classList.add('paused');
            }
        }

        videoManager.init();
    </script>
@stop
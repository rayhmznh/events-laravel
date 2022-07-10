@extends('layouts.app')

@section('content')
<main>
    @guest
    <section class="hero" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12 m-auto">
                    <div class="hero-text">

                        <h1 class="text-white mb-4"><u class="text-info">Gunadarma</u> <br>Events 2022</h1>

                        <div class="d-flex justify-content-center align-items-center">  
                            <a target=_blank href="Register.html" class="nav-link custom-btn btn-light d-lg-block" >Register Now!</a>
                        </div>

                        <a href="#section_3" class="custom-link bi-arrow-down arrow-icon"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="{{ url('frontend/videos/seminar.mp4') }}" type="video/mp4">
            </video>
        </div>
    </section>
    
    <section class="highlight">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="highlight-thumb">
                        <img src="{{ url("frontend/images/highlight/duapuluh.jpg") }}" class="highlight-image img-fluid" alt="">

                        <div class="highlight-info">
                            <h3 class="highlight-title">2020 Highlights</h3>

                            <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="highlight-thumb">
                        <img src="{{ url('frontend/images/highlight/duasatu.jpg') }}" class="highlight-image img-fluid" alt="">

                        <div class="highlight-info">
                            <h3 class="highlight-title">2021 Highlights</h3>

                            <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="highlight-thumb">
                        <img src="{{ url('frontend/images/highlight/duadua.jpg') }}" class="highlight-image img-fluid" alt="">

                        <div class="highlight-info">
                            <h3 class="highlight-title">2022 Highlights</h3>

                            <a href="https://www.youtube.com/watch?v=6Pw7T3LSIQQ" class="bi-youtube highlight-icon"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
        @endguest

        <section class="contact section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <form class="custom-form contact-form bg-white shadow-lg" action="#" method="post" role="form">
                            <h2>About Us</h2>

                            <div class="row">
                                <p>Gunadarma Event is an information website intended for Gunadarma University Students.
                                    This website contains information in the form of webinars and workshops. 
                                    In addition to access to view information. Students can add their own events.</p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

</main>
@endsection

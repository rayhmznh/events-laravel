@extends('layouts.app')

@section('content')
<main>
    <div class="jumbotron jumbotron-fluid jumbotron-lomba">
        <div class="container text-center">
       <br>
       <h3 class="pb-3">Grab Fast Your Event!</h4>
       <br />
       </div>
 </div>
 <section class="event mb-4">
    <div class="row justify-content-lg-center">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ url('frontend/images/poster/posterficar.jpg') }}" class="card-img-top pb-0" height="400px" alt="Event">
                <div class="card-body">
                    <h5 class="card-title">Personal Branding</h5>
                    <p class="mb-0"><b>FIKTI Carrier</b></p>
                    <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
                        <a class="btn btn-outline-primary btn-sm mb-2 rounded-pill btn-category">General</a>
                        <a class="btn btn-outline-secondary btn-sm mb-2 rounded-pill btn-category">Webinar</a>
                        <br />
                        <a href="content.html" class="btn btn-dark btn-sm font-weight-bold rounded-pill">More Info <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ url('frontend/images/poster/posterficar.jpg') }}" class="card-img-top" height="400px" alt="event">
                <div class="card-body">
                    <h5 class="card-title">Big Data</h5>
                    <p class="mb-0"><b>Techno Fair 9.0</b></p>
                    <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
                        <a class="btn btn-outline-primary btn-sm mb-2 rounded-pill btn-category">FIKTI</a>
                        <a class="btn btn-outline-secondary btn-sm mb-2 rounded-pill btn-category">Webinar</a>
                        <br />
                        <a href="#" class="btn btn-dark btn-sm font-weight-bold rounded-pill">More Info <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

       <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ url('frontend/images/poster/posterficar.jpg') }}" class="card-img-top" height="400px" alt="event">
                <div class="card-body">
                    <h5 class="card-title">Mental Health</h5>
                    <p class="mb-0"><b>LEIPZIG</b></p>
                    <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
                        <a class="btn btn-outline-primary btn-sm mb-2 rounded-pill btn-category">General</a>
                        <a class="btn btn-outline-secondary btn-sm mb-2 rounded-pill btn-category">Webinar</a>
                        <br />
                        <a href="#" class="btn btn-dark btn-sm font-weight-bold rounded-pill">More Info <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-lg-center">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ url('frontend/images/poster/posterficar.jpg') }}" class="card-img-top" height="400px" alt="event">
                <div class="card-body">
                    <h5 class="card-title">CV Review</h5>
                    <p class="mb-0"><b>FIKTI Carrier</b></p>
                    <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
                        <a class="btn btn-outline-primary btn-sm mb-2 rounded-pill btn-category">FIKTI</a>
                        <a class="btn btn-outline-secondary btn-sm mb-2 rounded-pill btn-category">Workshop</a>
                        <br />
                        <a href="#" class="btn btn-dark btn-sm font-weight-bold rounded-pill">More Info <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ url('frontend/images/poster/posterficar.jpg') }}" class="card-img-top" height="400px" alt="event">
                <div class="card-body">
                    <h5 class="card-title">Digital Marketing</h5>
                    <p class="mb-0"><b>Business Talk</b></p>
                    <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
                        <a class="btn btn-outline-primary btn-sm mb-2 rounded-pill btn-category">FE</a>
                        <a class="btn btn-outline-secondary btn-sm mb-2 rounded-pill btn-category">Webinar</a>
                        <br />
                        <a href="#" class="btn btn-dark btn-sm font-weight-bold rounded-pill">More Info <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

       <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ url('frontend/images/poster/posterficar.jpg') }}" class="card-img-top" height="400px" alt="event">
                <div class="card-body">
                    <h5 class="card-title">UI/UX Design</h5>
                    <p class="mb-0"><b>DSC</b></p>
                    <p class="mb-2">Pendaftaran: 25 April - 12 Mei 2022</p>
                        <a class="btn btn-outline-primary btn-sm mb-2 rounded-pill btn-category">General</a>
                        <a class="btn btn-outline-secondary btn-sm mb-2 rounded-pill btn-category">Workshop</a>
                        <br />
                        <a href="#" class="btn btn-dark btn-sm font-weight-bold rounded-pill">More Info <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    </section>
</main>
@endsection
@extends('layouts.app')

@section('title')
    Detail Events - Gunadarma Event
@endsection

@section('detail-content')
<main>
    <main class="container mt-2">
        <div class="row">
            <div class="title col pt-5 pb-2">{{ $items->title }}</div>
        </div>

        <div class="d-flex gap-2 my-4">
            <div class="btn btn-outline-success btn-sm btn-tags px-3 mr-2">{{ $items->faculty }}</div>
            <div class="btn btn-outline-danger btn-sm btn-tags px-3 mr-2" style="width:auto !important;">
                {{ $items->category }}
            </div>
        </div>

        <div class="row">

            <!-- Left Content -->
            <div class="d-flex flex-column col-8">

                <div class="d-flex justify-content-center">
                    @if ($items->poster == NULL)
                        <img src="{{ url('frontend/images/poster/posterficar.jpg') }}" class="card-img-top pb-0 text-center" alt="Event">
                    @else
                        <img src="{{url(Storage::url('poster/'.$items->poster))}}" class="card-img-top pb-0 text-center" alt="Event">
                    @endif
                </div>

                <!-- Description -->
                <main class="row mt-4 info ">
                    <div class="col-lg-12">
                        <h6 style="font-size: 20px;"><b>Description</b></h6>
                        <p style="font-size: 16px; font-weight:500; text-align:justify !important;">
                        </p>
                        <div class="image_deskripsi" style="text-align:justify !important;">
                            <div class="content">
                                <p>{{ $items->description }}</p>
                            </div>

                            <div class="row mt-5 info ">
                                <div class="col-lg-12">
                                    <h6 style="font-size: 18px;"><b>Date and Time</b></h6>
                                    <p style="font-size: 16px; font-weight:500;">
                                        <i class="fa fa-calendar mt-2" aria-hidden="true"></i>{{ $items->date_and_time }}<br>
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-5 info ">
                                <div class="col-lg-12">
                                    <h6 style="font-size: 18px;"><b>Link Pendaftaran</b></h6>
                                    <p style="font-size: 16px; font-weight:500;">
                                        <i class="fa fa-map-marker mt-2 " aria-hidden="true"></i>
                                        <a href="{{ url( $items->registration_link )}}" target="_blank">{{ $items->registration_link }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>


            </div>

            <!-- Right Content -->
            <div class="col-4">
                <div class="card card-mob p-2 d-block d-lg-none" style="border-radius: 10px">

                    <div class="media px-3 align-items-center">
                        <img src="https://www.kreen.id/public//image/profile_akun.png"
                            onerror="this.src='https://www.kreen.id/public//image/profile_akun.png'" class="mr-3"
                            alt="Profile" width="45px">

                        <div class="media-body align-self-center">
                            <div>Hosted by</div>
                            <a style="color: black;" href="https://www.kreen.id/profileeo?eo=YXBBYVJUJCPMAEWUD854"
                                target="_blank">
                                <h6 class="mt-0 "><b>{{ $items->organizer }}</b></h6>
                            </a>
                            <small style="display: -webkit-box;-webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;overflow: hidden;">
                            </small>
                        </div>

                    </div>
                    <hr class="px-3">
                    <div class="font-weight-bold px-3"><b>Date</b></div>
                    <div class="mt-2"></div>
                    <div class="px-3" style="color: #7E7E7E;">

                        <span class="fa fa-calendar" aria-hidden="true"></span>{{ $items->date_and_time }}
                        <div class="mt-2"></div>
                    </div>
                    <div class="mt-3"></div>

                    <div class="font-weight-bold px-3"><b>Location</b></div>
                    <div class="d-flex align-items-center px-3">
                        <span class="mr-2"></span>
                        <div style="color: #7E7E7E;">
                            {{ $items->location }}
                        </div>
                    </div>
                    <div class="px-3">
                        <div class="mt-3"></div>
                        <div class="font-weight-bold"><b>Link Pendaftaran</b></div>
                        <div class="d-flex align-items-center ">
                            <span class="mr-2"></span>
                            <div style="color: #7E7E7E;">
                                <a href="{{ url( $items->registration_link )}}" target="_blank">{{ $items->registration_link }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</main>
@endsection

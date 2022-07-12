@extends('layouts.app')

@section('detail-content')
<main>
    <main class="container mt-2">
        <div class="row">
            <div class="title col">FIKTI Career</div>
        </div>

        <div class="d-flex gap-2 my-4">
            <div class="btn btn-outline-success btn-sm btn-tags px-3 mr-2">Online</div>
            <div class="btn btn-outline-danger btn-sm btn-tags px-3 mr-2" style="width:auto !important;">
                FIKTI
            </div>
        </div>

        <div class="row">

            <!-- Left Content -->
            <div class="d-flex flex-column col-8">

                <div class="d-flex justify-content-center">
                    <img class="rounded-3 thumbnail" src="{{ url('frontend/images/poster/raici.jpg') }}" alt="">
                </div>



                <!-- Description -->

                <main class="row mt-4 info ">

                    <div class="col-lg-12">

                        <h6 style="font-size: 20px;"><b>Description</b></h6>

                        <p style="font-size: 16px; font-weight:500; text-align:justify !important;">
                        </p>
                        <div class="image_deskripsi" style="text-align:justify !important;">
                            <div class="content">
                                <p>[ OPEN REGISTRATION FIKTI CAREER 2022 ]</p>
                                <br>
                                <p>Halo, Career Hunters!👋🏻</p>
                                <br>
                                <p>FIKTI Career merupakan program kerja inovasi BEM FIKTI UG Periode 2021/2022 yang
                                    diselenggarakan oleh Biro Hubungan Masyarakat berupa kegiatan Webinar, Workshop,
                                    dan Job
                                    Fair yang mengusung tema “Knowing Yourself To Start A Brilliant Career”.</p>

                                <p>Nah, ada kabar baik nih, FIKTI Career 2022 sudah mulai Open Registration lho
                                    untuk semua
                                    rangkaian acara! </p>

                                <p>Tanggal pelaksanaan:</p>
                                <p>✨ Webinar "Upgrade Your Personal Branding for Your Future Career" ✨</p>
                                <p>📆 Sabtu, 14 Mei 2022</p>
                                <p>⏰ 8.30 - 12.00 WIB</p>
                                <p>📍Zoom Cloud Meetings dan Live Streaming Youtube</p>
                                <br>
                                <p>✨ Workshop "The Secret Recipe to Make an Outstanding Curriculum Vitae" ✨</p>
                                <p>📆 Minggu, 15 Mei 2022</p>
                                <p>⏰ 8.30 - 11.55 WIB</p>
                                <p>📍Zoom Cloud Meetings</p>
                                <br>
                                <p>Periode Pendaftaran:</p>
                                <p>📆 8 - 12 Mei 2022</p>
                                <br>
                                <p>Biaya Pendaftaran:</p>
                                <p>💰 Free</p>

                                <p>Link Pendaftaran:</p>
                                <p href="www.fikticareer.com">www.fikticareer.com</p>
                            </div>

                            <div class="row mt-5 info ">

                                <div class="col-lg-12">

                                    <h6 style="font-size: 18px;"><b>Date and Time</b></h6>

                                    <p style="font-size: 16px; font-weight:500;">
                                        <i class="fa fa-calendar mt-2" aria-hidden="true"></i> Friday, 01 July
                                        2022, &nbsp; 09:00 - 17:00
                                        WIB<br>
                                    </p>
                                    <i class="fa fa-calendar mt-2" aria-hidden="true"></i> Saturday, 02 July
                                    2022, &nbsp; 09:00 - 17:00
                                    WIB<br>
                                    <p></p>


                                    <i class="fa fa-calendar mt-2" aria-hidden="true"></i> Sunday, 03 July 2022,
                                    &nbsp; 09:00 - 17:00
                                    WIB<br>
                                    <p></p>


                                </div>

                            </div>

                            <div class="row mt-5 info ">

                                <div class="col-lg-12">

                                    <h6 style="font-size: 18px;"><b>Link Pendaftaran</b></h6>

                                    <p style="font-size: 16px; font-weight:500;">

                                        <i class="fa fa-map-marker mt-2 " aria-hidden="true"></i>
                                        <!-- <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a> -->
                                        <a href="www.fikticareer.com">www.fikticareer.com</a>

                                    </p>
                                    <div class="mt-3"></div>
                                    <!-- <div class="font-weight-bold">Venue: JAKARTA CONVENTION CENTER, HALL B</div> -->

                                    <p></p>

                                </div>

                            </div>

                            <!-- Include:
                    📋 E - Certificate
                    🗒 Free Course by Dicoding
                    👫 Important Knowledge
                    🎁 Doorprize
                    📝 Live CV Review (Bagi peserta yang beruntung)*
                    
                    *Live CV Review hanya ada pada acara Workshop dan kuota terbatas ya!
                    
                    Selain mengikuti rangkaian acara FICAR 2022 ini, Career Hunters juga bisa mendapatkan voucher belanja lho dengan mengikuti Challenge Emina Cheese untuk membuat reels review produk Emina Cheese melalui Instagram dengan syarat: 
                    🔸 Follow akun instagram Emina Cheese 
                    🔸 Follow semua sosial media FIKTI Career 2022
                    🔸 Tag hasil reels ke instagram Emina Cheese dan FIKTI Career 
                    🔸 Menambahkan hashtag #CumadiEminaCheese #ChallengeFICAR2022
                    
                    Yuk, segera daftarkan diri Career Hunters sekarang juga ya 🤗 -->

                            <!-- Contact Person :
                    Line : fromanotherside (Nana)
                    Whatsapp : 085778157111 (Azka)
                     -->
                            <!-- Contact us on Instagram : @ficar_ug
                    
                    FIKTI CAREER 2022,
                    Biro Hubungan Masyarakat.
                    
                    Kolaborasi,
                    Satukan Asa,
                    Wujudkan Bersama.
                    
                    KABINET SATU FIKTI
                    BEM FIKTI UG Periode 2021/2022
                    fikti.bem.gunadarma.ac.id -->
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
                                <h6 class="mt-0 "><b>BEM FIKTI UG</b></h6>
                            </a>
                            <small style="display: -webkit-box;-webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;overflow: hidden;">
                            </small>
                            <div class="mt-1"></div>
                        </div>

                    </div>
                    <hr>
                    <div class="font-weight-bold px-3"><b>Date and Time</b></div>
                    <div class="mt-2"></div>
                    <div class="px-3" style="color: #7E7E7E;">

                        <span class="fa fa-calendar" aria-hidden="true"></span> 01 July 2022
                        -
                        03 July 2022
                        <div class="mt-2"></div>
                    </div>
                    <div class="mt-3"></div>

                    <div class="font-weight-bold px-3"><b>Location</b></div>
                    <div class="d-flex align-items-center px-3">
                        <span class="mr-2"></span>
                        <div style="color: #7E7E7E;">
                            Zoom Cloud Meetings
                        </div>
                    </div>
                    <div class="mt-3"></div>
                    <div class="font-weight-bold px-3"><b>Price</b></div>
                    <div class="px-3">
                        <span id="harga_tiket_all"><span class="font-weight-bold text-danger"
                                style="font-size:20px;">Free</span></span>
                        <div class="mt-3"></div>
                        <div class="font-weight-bold"><b>Link Pendaftaran</b></div>
                        <div class="d-flex align-items-center ">
                            <span class="mr-2"></span>
                            <div style="color: #7E7E7E;">
                                <a href="www.fikticareer.com">www.FIKTICareer.com</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</main>
@endsection

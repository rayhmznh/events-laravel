@extends('layouts.dash')

@section('title')
    Add Event - Gunadarma Event
@endsection

@section('add-event')
<main>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 pb-3">
                    <h4 class="page-title">Add Your Events</h4>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">

                        <!-- FORM -->
                        <form action="{{ route('all-event.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Organizer</div>
                                <input class="col-10 form-control fill-form rounded-5" id="organization" name="organizer" value="{{ old('organization') }}"type="text" required>
                            </div>

                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Title</div>
                                <input class="col-10 form-control fill-form rounded-5" id="title" name="title" value="{{ old('title') }}"type="text" required>
                            </div>

                            <div class="row mb-4">
                                <div class="col-2 title-form fw-semibold">Category
                                </div>
                                <div class="col-10">
                                    <div class="d-flex">
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="radio" name="category" value="Webinar"
                                                id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Webinar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" value="Workshop"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Workshop
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Faculty
                                </div>
                                <select class="form-select col-10" id="inputGroupSelect01" name="faculty" required>
                                    <option selected>Choose...</option>
                                    <option value="FIKTI">FIKTI</option>
                                    <option value="FE">FE</option>
                                    <option value="FTSP">FTSP</option>
                                    <option value="FPSI">FPSI</option>
                                    <option value="FSB">FSB</option>
                                    <option value="FIKOM">FIKOM</option>
                                    <option value="D3BK">D3BK</option>
                                    <option value="General">General</option>
                                </select>
                            </div>

                            <div class="d-flex align-items-start row ">
                                <div class="title-form fw-semibold col-2 pt-1">Date and Time
                                </div>

                                <div class="row mb-4 col-5 d-flex flex-column mr-2">

                                    <input class="form-control fill-form rounded-5 -ml-2" name="date_and_time" type="datetime-local" required>
                                </div>

                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Location</div>
                                <input class="col-10 form-control fill-form rounded-5" id="location"  name="location" value="{{ old('location') }}"type="text" required>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Registration Link</div>
                                <input class="col-10 form-control fill-form rounded-5" id="registration_link"  name="registration_link" value="{{ old('registration_link') }}"type="text" required>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">
                                    Description
                                </div>
                                <textarea class="col-10 form-control fill-form rounded-5" rows="5"
                                    cols="5" id="description"  name="description" value="{{ old('description') }}" type="textarea" required></textarea>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Your Poster
                                </div>
                                <input name="poster" class="col-10 form-control fill-form rounded-5 @error('poster') is-invalid @enderror" id="poster" value="{{ old('poster') }}" type="file" required>
                                @error('poster') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary text-right">Submit</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
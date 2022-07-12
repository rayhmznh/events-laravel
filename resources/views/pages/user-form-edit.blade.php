@extends('layouts.dash')
@section('user-form-edit')
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
                        <form action="" method="post">
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Organizer</div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" required>
                            </div>

                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Title
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" required>
                            </div>

                            <div class="row mb-4">
                                <div class="col-2 title-form fw-semibold">Category
                                </div>
                                <div class="col-10">
                                    <div class="d-flex">
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Webinar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
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
                                <select class="form-select col-10" id="inputGroupSelect01" required>
                                    <option selected>Choose...</option>
                                    <option value="1">FIKTI</option>
                                    <option value="2">FE</option>
                                    <option value="3">FTSP</option>
                                    <option value="4">FPSI</option>
                                    <option value="5">FSB</option>
                                    <option value="6">FIKOM</option>
                                    <option value="7">D3BK</option>
                                    <option value="8">Umum</option>
                                </select>
                            </div>

                            <div class="d-flex align-items-start row ">
                                <div class="title-form fw-semibold col-2 pt-1">Date and Time
                                </div>

                                <div class="row mb-4 col-5 d-flex flex-column mr-2">

                                    <input class="form-control fill-form rounded-5 -ml-2" type="date" required>
                                </div>

                                <div class="row mb-4 col-5 d-flex flex-column">

                                    <input class="form-control fill-form rounded-5 -mr-2" type="time" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Location
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" required>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Registration Link
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" required>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">
                                    Description
                                </div>
                                <textarea class="col-10 form-control fill-form rounded-5" rows="5" cols="5"
                                    required></textarea>
                            </div>

                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Contact Person
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" required>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Social Media
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" required>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Your Poster
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="file" required>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Status
                                </div>

                                <!-- Active Check -->
                                <div class="col-10 d-flex gap-1">
                                    <p class="fw-bold">Active</p>
                                    <div class="form-check form-switch ml-4">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked>
                                    </div>
                                    <p class="fw-bold text-black-50">Inactive</p>
                                </div>


                                <!-- InActive Check -->
                                <!-- Comment Active Check kalo mau liat Inactive Check -->
                                <div class=" col-10 d-flex gap-1">
                                    <p class="fw-bold text-black-50">Active</p>
                                    <div class="form-check form-switch ml-4">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked">
                                    </div>
                                    <p class="fw-bold">Inactive</p>
                                </div>


                            </div>

                            <div class=" d-flex justify-content-end">
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
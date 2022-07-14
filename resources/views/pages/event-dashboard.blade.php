@extends('layouts.dash')

@section('title')
    Event List - Gunadarma Event
@endsection

@section('event-dashboard')
<main>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title mb-3">My Events</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="d-flex justify-content-between mb-3">
                            <h3 class="box-title">My Events</h3>
                            <a href="{{url('event/create')}}" class="btn btn-primary">Add Events</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0"><b>Events</b></th>
                                        <th class="border-top-0"><b>Judul</b></th>
                                        <th class="border-top-0"><b>Status</b></th>
                                        <th class="border-top-0"><b>Action</b></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="img-thumbnail" src="{{ url('frontend/images/poster/posterficar.jpg') }}" style="max-width:75px" alt="">
                                        </td>
                                        <td>Personal Branding</td>
                                        <td> <a class="btn btn-success btn-sm mb-2 rounded-pill btn-category">Active</a></td>
                                        <td>
                                            <a href="user-edit.html" class="fas fa-pencil-alt"></a>
                                            <a href="user-delete.html" class="fas fa-trash-alt"></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><img class="img-thumbnail" src="{{ url('frontend/images/poster/posterficar.jpg') }}" style="max-width:75px" alt=""></td>
                                        <td>Big Data</td>
                                        <td><a class="btn btn-success btn-sm mb-2 rounded-pill btn-category">Active</a></td>
                                        <td>
                                            <a href="user-edit.html" class="fas fa-pencil-alt"></a>
                                            <a href="user-delete.html" class="fas fa-trash-alt"></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><img class="img-thumbnail" src="{{ url('frontend/images/poster/posterficar.jpg') }}" style="max-width:75px" alt=""></td>
                                        <td>Mental Health</td>
                                        <td><a class="btn btn-secondary btn-sm mb-2 rounded-pill btn-category">Non-Active</a></td>
                                        <td>
                                            <a href="user-edit.html" class="fas fa-pencil-alt"></a>
                                            <a href="user-delete.html" class="fas fa-trash-alt"></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><img class="img-thumbnail" src="{{ url('frontend/images/poster/posterficar.jpg') }}" style="max-width:75px" alt=""></td>
                                        <td>Digital Marketing</td>
                                        <td><a class="btn btn-secondary btn-sm mb-2 rounded-pill btn-category">Non-Active</a></td>
                                        <td>
                                            <a href="user-edit.html" class="fas fa-pencil-alt"></a>
                                            <a href="user-delete.html" class="fas fa-trash-alt"></a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
      
        </div>
    </div>
    </div>
</main>
@endsection

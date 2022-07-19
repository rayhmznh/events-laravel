@extends('layouts.dash')

@section('title')
    Profile - Gunadarma Event
@endsection

@section('profile')
<main>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title mb-3">Profile page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="container-fluid">
            
                <div class="row">
                    <form class="col-lg-12 col-xlg-9 col-md-12" action="{{ route('profile.update'), $profile }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="{{ $item->name }}"
                                                class="form-control p-0 border-0" value="{{ $profile->name }}"> 
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Username</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="{{ $item->username }}"
                                                class="form-control p-0 border-0" value="{{ $profile->username }}"> 
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Organization</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="{{ $item->organization }}"
                                                class="form-control p-0 border-0" value="{{ $profile->organization }}"> 
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" placeholder="{{ $item->email }}"
                                                class="form-control p-0 border-0" name="email"
                                                id="email" value="{{ $profile->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="phone" class="col-md-12 p-0">No HP</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="{{ $item->phone }}"
                                                class="form-control p-0 border-0" name="phone"
                                                id="phone" value="{{ $profile->phone }}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
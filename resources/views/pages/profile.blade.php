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
                    <div class="col-lg-12 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="{{ Auth::user()->name }}"
                                                class="form-control p-0 border-0"> 
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Username</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="{{ Auth::user()->username }}"
                                                class="form-control p-0 border-0"> 
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" placeholder="{{ Auth::user()->email }}"
                                                class="form-control p-0 border-0" name="email"
                                                id="email">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="phone" class="col-md-12 p-0">No HP</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="{{ Auth::user()->phone }}"
                                                class="form-control p-0 border-0" name="phone"
                                                id="phone">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('layouts.dash')

@section('title')
    Dashboard - Gunadarma Event
@endsection

@section('dash')
<main>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
   
        <div class="page-wrapper">
           
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title mb-3">My Events</h4>
                    </div>

                </div>
                
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li class="ms-auto"><span class="counter text-success">{{$event_view}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>  
</main>
@endsection
@extends('layouts.dashAdmin')

@section('DbUser')
<main>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

<div class="page-wrapper">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">All Users</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0"><b>Name</b></th>
                                    <th class="border-top-0"><b>Username</b></th>
                                    <th class="border-top-0"><b>Organization</b></th>
                                    <th class="border-top-0"><b>Action</b></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Muhamad Habibi</td>
                                    <td>habibi1701</td>
                                    <td>Us Creative</td>
                                    <td>
                                        <a class="fas fa-trash-alt"></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Alvinda Rafsanjani</td>
                                    <td>alraf30</td>
                                    <td>lulung palace</td>
                                    <td>
                                        <a class="fas fa-trash-alt"></a>
                                    </td>

                                 <tr>
                                    <td>Nadira Raihanah</td>
                                    <td>diraihanah</td>
                                    <td>LepKom</td>
                                    <td>
                                        <a class="fas fa-trash-alt"></a>
                                    </td>

                                </tr>
                               
                                <tr>
                                    <td>Early Indryana</td>
                                    <td>ui.early</td>
                                    <td>DSC UG</td>
                                    <td>
                                        <a class="fas fa-trash-alt"></a>
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

@endsection
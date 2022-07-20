@extends('layouts.dashAdmin')

@section('title')
    Database Event - Gunadarma Event
@endsection

@section('DbEvent')
<main>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title mb-3">All Events</h4>
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
                                            <th class="border-top-0"><b>Poster Events</b></th>
                                            <th class="border-top-0"><b>Judul</b></th>
                                            <th class="border-top-0"><b>Status</b></th>
                                            <th class="border-top-0"><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($items as $item)
                                        <tr>
                                            <td>
                                                <img class="img-thumbnail" src="{{url(Storage::url('poster/'.$item->poster))}}" style="max-width:75px" alt="">
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td> 
                                                @if ($item->status == 'Aktif')
                                                    <a class="btn btn-success btn-sm mb-2 rounded-pill btn-category">Active</a>
                                                @else
                                                    <a class="btn btn-secondary btn-sm mb-2 rounded-pill btn-category">Non-Active</a>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route('database-event.destroy', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                        @empty
                                        <tr>
                                            <td class="text-center">
                                                Data Kosong
                                            </td>
                                        </tr>
                                        @endforelse
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
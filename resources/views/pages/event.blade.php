@extends('layouts.app')

@section('title')
    All Events - Gunadarma Event
@endsection

@section('content')
<main>
    <div class="jumbotron jumbotron-fluid jumbotron-lomba">
        <div class="container text-center">
       <br>
       <h3 class="pt-5 pb-5">Grab Fast Your Event!</h4>
       <br />
       </div>
 </div>
 <section class="event mb-4">
    <div class=" d-flex flex-row flex-wrap gap-2 justify-content-center">
        @foreach ($items as $item)
            @if($item->status == 'Aktif')
                <div class="w-25">
                    <div class="card h-100">
                        @if ($item->poster == NULL)
                            <img src="{{ url('frontend/images/poster/posterficar.jpg') }}" class="card-img-top pb-0" height="400px" alt="Event">
                        @else
                            <img src="{{url(Storage::url('poster/'.$item->poster))}}" class="card-img-top pb-0" height="400px" alt="Event">
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="mb-0"><b>{{ $item->organizer }}</b></p>
                            <p class="mb-2">Dilaksanakan pada : {{ $item->date_and_time }}</p>
                        </div>
                        <div class="card-footer pt-0 pb-4 bg-white border-0">
                            <a class="btn btn-outline-primary btn-sm mb-2 rounded-pill btn-category">{{ $item->faculty }}</a>
                            <a class="btn btn-outline-secondary btn-sm mb-2 rounded-pill btn-category">{{ $item->category }}</a>
                            <br />
                            <a href="{{ url('detail-event', $item->id) }}" class="btn btn-dark btn-sm font-weight-bold rounded-pill">More Info <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @elseif($item->status == 'Non-Aktif')
            @endif
        @endforeach
                
    </div>
    </section>
</main>
@endsection
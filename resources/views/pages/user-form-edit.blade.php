@extends('layouts.dash')

@section('title')
    Edit Event - Gunadarma Event
@endsection

@section('user-form-edit')
<main>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 pb-3">
                    <h4 class="page-title">Edit Your Events</h4>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">

                        <!-- FORM -->
                        <form 
                        action="{{ route('all-event.update', $detail->id) }}" 
                        method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Organizer</div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" name="organizer" value="{{ $detail->organizer }}" >
                            </div>

                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Title
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" name="title" value="{{ $detail->title }}" >
                            </div>

                            <div class="row mb-4">
                                <div class="col-2 title-form fw-semibold">Category
                                </div>
                                <div class="col-10">
                                    <div class="d-flex">
                                        <div class="form-check mr-5"> 
                                            <input class="form-check-input" type="radio" name="category" value="Webinar" {{ $detail->category == 'Webinar' ? 'checked' : '' }}
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Webinar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" value="Workshop" {{ $detail->category == 'Workshop' ? 'checked' : '' }}
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
                                <select name="faculty" class="form-select col-10" id="inputGroupSelect01" >
                                    <option value="FIKTI" 
                                        {{ $detail->faculty == 'FIKTI' ? 'selected' : '' }}>FIKTI
                                    </option>
                                    <option value="FE" 
                                        {{ $detail->faculty == 'FE' ? 'selected' : '' }}>FE
                                    </option>
                                    <option value="FTSP" 
                                        {{ $detail->faculty == 'FTSP' ? 'selected' : '' }}>FTSP
                                    </option>
                                    <option value="FTI" 
                                    {{ $detail->faculty == 'FTI' ? 'selected' : '' }}>FTI
                                </option>
                                    <option value="FPSI" 
                                        {{ $detail->faculty == 'FPSI' ? 'selected' : '' }}>FPSI
                                    </option>
                                    <option value="FSB" 
                                        {{ $detail->faculty == 'FSB' ? 'selected' : '' }}>FSB
                                    </option>
                                    <option value="FIKOM" 
                                        {{ $detail->faculty == 'FIKOM' ? 'selected' : '' }}>FIKOM
                                    </option>
                                    <option value="D3BK" 
                                        {{ $detail->faculty == 'D3BK' ? 'selected' : '' }}>D3BK
                                    </option>
                                    <option value="General" 
                                        {{ $detail->faculty == 'General' ? 'selected' : '' }}>General
                                    </option>
                                </select>
                            </div>

                            <div class="d-flex align-items-start row ">
                                <div class="title-form fw-semibold col-2 pt-1">Date and Time
                                </div>

                                <div class="row mb-4 col-5 d-flex flex-column mr-2">

                                    <input class="form-control fill-form rounded-5 -ml-2" name="date_and_time" type="datetime-local" value="{{ $detail->date_and_time }}" >

                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Location
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" name="location" value="{{ $detail->location }}" equired>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Registration Link
                                </div>
                                <input class="col-10 form-control fill-form rounded-5" type="text" name="registration_link" value="{{ $detail->registration_link }}" >
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">
                                    Description
                                </div>
                                <textarea class="col-10 form-control fill-form rounded-5" rows="5" cols="5" id="description" name="description"
                                    >{{ $detail->description }}</textarea>
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Your Poster
                                </div>
                                <div class="form-group">
                                    <img src="{{url(Storage::url('poster/'.$detail->poster))}}" width="20%" alt="">
                                </div>
                                <input name="poster" class="col-10 form-control fill-form rounded-5 @error('poster') is-invalid @enderror" type="file" value="{{ $detail->poster }}">
                                @error('poster') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                            <div class="row mb-4">
                                <div class="title-form fw-semibold col-2">Status
                                </div>

                                <div class="col-10 d-flex gap-1">
                                    <p class="fw-bold">Active</p>
                                    <div class="form-check form-switch ml-4">
                                        <input name="status" class="form-check-input" type="checkbox" value="Aktif" role="switch" {{ $detail->status == 'Aktif' ? 'checked' : '' }}
                                            id="flexSwitchCheckChecked">
                                    </div>
                                    <p class="fw-bold text-black-50">Inactive</p>
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
@push('addon-script')

  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js" ></script>

  <script>
      ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
@endpush
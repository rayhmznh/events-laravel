@extends('layouts.auth')

@section('title', 'Register')
    
@section('content')
<div class="main-w3layouts wrapper">
    <h1>Get Ready to The Events!</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
          <form method="POST" action="{{ route('register') }}">
              @csrf
                <div>
                  <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus required>
                  @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                <br>
                <div>
                  <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"autofocus required>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <br>

                  <div>
                      <input id="password" type="password" placeholder ="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <br>

                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filled" id="filled">

                    <label class="form-check-label" for="filled" style="color: white;">
                        {{ __('I have filled the data above correctly.') }}
                    </label>
                </div>
                <input type="submit" value="SIGNUP">
            </form>
            <p>Don't have an Account? <a href="{{ url('login') }}" style="font-weight: 600;"> Login Now!</a></p>
        </div>
    </div>
    <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
@endsection

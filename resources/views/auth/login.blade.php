@extends('layouts.app-nonav')

@section('content')
<div class="row mr-0 ml-0" style="height:100vh">
    <div class="col-5 h-100 py-5 px-5 d-inline-block" style="background-color:#fff">
        <img class="pt-4" src="{{asset('/img/logo-login.png')}}" alt=""><br><br>
        <p class="font-weight-bold" style="font-size:50pt; color: #972225">
            BAGIKAN CERITAMU DISINI!
        </p>
    </div>
    <div class="col" style="background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(40,0,0,1) 0%, rgba(151,34,37,1) 20%, rgba(151,34,37,1) 100%);">
        <div class="col pt-5">
            <img class="mx-auto d-block" src="{{asset('/img/Ummadim-white.png')}}" width="200px">
        </div>
        <div class="col-7 mx-auto pt-4">
            <div class="card">
                <div class="card-body py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group col">
                            <label for="email" class="col col-form-label font-weight-bold">{{ __('Username') }}</label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="password" class="col col-form-label font-weight-bold">{{ __('Password') }}</label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group row mb-0 mx-auto">
                            <div class="col my-3">
                                <button type="submit" class="btn btn-rounded peach-gradient mx-auto d-block">
                                    {{ __('Login') }}
                                </button>

                                <!---->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col text-center mt-2">
            @if (Route::has('password.request'))
            <i style="color:white">Lupa password?</i><a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Help') }}
                </a>
                
            @endif
        </div>
        <div class="row mt-5 pt-2 w-75 text-center mx-auto" style="color:#fff">
            <div class="col">Home</div>
            <div class="col">Help</div>
            <div class="col">About</div>
            <div class="col">Support Us</div>
            <div class="col">Contact</div>
        </div>
        <div class="col text-center mt-2" style="color:white">&copy Ummadim - 2021</div>
    </div>
</div>

   <!--<div class="row justify-content-center">
        <div class="col-md-8">
        
        </div>
    </div> -->
@endsection

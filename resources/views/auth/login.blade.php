@extends('layouts.app')

@section('content')


<div class="mask rgba-orange-slight d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <!-- textos responsives -->
                <div class="col-md-6 text-white">
                  <h1 class="h1-responsive d-none d-md-block">Lorem, ipsum dolor.</h1>
                  <hr class="bg-light">
                  <p class="h4-responsive text-center text-md-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat eligendi architecto aspernatur. Eos, possimus accusantium ut ad tempore modi blanditiis voluptatem, vero, nesciunt vitae laudantium? Eaque nihil possimus beatae voluptate.</p>
                    <div class="text-center text-md-left">
                          <button class="btn btn-orange btn-lg">continuar
                        <i class="fas fa-play ml-2"></i>
                          </button>
                    </div>
                </div>
                
                <div class="col-md-6 mt-3">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="text-center orange-text" ><b>Ingresar</b></h3>
                      <hr>
                      <!-- formulario -->
                      <form method="POST" class="border border-light p-5" action="{{ route('login') }}">
                            @csrf
    
                            <div class="md-form">
                                <i class="fas fa-user prefix orange-text"></i>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
    
                            <div class="md-form">
                                <i class="fas fa-lock prefix orange-text"></i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="password" >{{ __('Password') }}</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
                            
                            <div class="d-flex justify-content-around">
                                    <div>
                                        <!-- Remember me -->
                                        <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                                <label class="custom-control-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Forgot password -->
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </div>
                            </div>

                            {{-- <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4"> --}}
                                    <button type="submit" class="btn orange-gradient btn-orange btn-block  my-4">
                                        {{ __('Login') }}
                                    </button>
                                    <p class="text-center">¿No es un miembro?
                                            <a href="{{ route('register') }}">Registrate</a>
                                    </p>
                                {{-- </div>
                            </div> --}}
                        </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>          
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
<br>
<br>
<br>

{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection

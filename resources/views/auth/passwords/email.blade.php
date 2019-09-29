@extends('layouts.app')

@section('content')

<div class="mask rgba-orange-slight d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <!-- textos responsives -->
                <div class="col-sm-3"></div>
			    <div class="col-sm-6">
                        <div class="card">
                                <div class="card-body">
                                  <h3 class="text-center orange-text" ><b>Ingresar</b></h3>
                                  <hr>
                                  <!-- formulario -->
                                  <form method="POST" action="{{ route('password.email') }}">
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
                                        {{-- <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4"> --}}
                                                <button type="submit" class="btn orange-gradient btn-orange btn-block  my-4">
                                                    {{ __('Send Password Reset Link') }}
                                                </button>
                                            {{-- </div>
                                        </div> --}}
                                    </form>
                                </div>
                              </div>
                </div>
                <div class="col-sm-3"></div>
              </div>
        </div>          
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection

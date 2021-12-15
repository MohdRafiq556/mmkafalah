@extends('layouts.login')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group"> <!-- class="row" -->
                            <label for="email" class="col-md-5 col-form-label text-md-left">{{ __('Alamat E-Mail') }}</label> <!-- class="col-md-4" text-md-right-->

                            <div> <!-- class="col-md-6" -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-user" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Alamat E-Mail Anda" autofocus> <!-- plus class="form-control-user" -->

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group"> <!-- class="row" -->
                            <label for="password" class="col-md-5 col-form-label text-md-left">{{ __('Kata Laluan') }}</label> <!-- class="col-md-4" class="text-md-right"-->

                            <div > <!-- class="col-md-6" -->
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-user" name="password" required autocomplete="current-password" placeholder="Masukkan Kata Laluan Anda"> <!-- plus class="form-control-user" -->

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group"> <!-- class="row" -->
                            <div > <!-- class="col-md-6" --><!-- class="offset-md-4" -->
                                <div class="custom-control custom-checkbox small"> <!-- class="form-check" -->
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>  <!-- class="form-check-input" -->

                                    <label class="custom-control-label" for="remember"><!-- class="form-check" -->
                                        {{ __('Ingat Saya!') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div ><!-- class="form-group row mb-0" -->
                            <div><!-- class="col-md-8 offset-md-4" and plus text-center-->
                                <button type="submit" class="btn btn-primary btn-user btn-block"> <!-- plus class="btn-user btn-block" -->
                                    {{ __('Log Masuk') }}
                                </button>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}"><!-- class="btn btn-link" -->
                                        {{ __('Lupa Kata Laluan?') }}
                                    </a>
                                @endif
                            </div>
                            </div>
                        </div>

                        <div ><!-- class="form-group row mb-0" -->
                            <div class="text-center"><!-- class="col-md-8 offset-md-4" and plus text-center-->
                                
                                    <a class="small" href="{{ url('register') }}"><!-- class="btn btn-link" -->
                                        {{ __('Cipta Akaun!') }}
                                </a>
                            </div>
                        </div>

                        <div ><!-- class="form-group row mb-0" -->
                            <div class="text-center"><!-- class="col-md-8 offset-md-4" and plus text-center-->
                                
                                    <a class="small" href="{{ url('/') }}"><!-- class="btn btn-link" -->
                                        {{ __('Batal!') }}
                                </a>
                            </div>
                        </div>

                    </form>
                <!--</div>
            </div>
        </div>
    </div>
</div> -->
@endsection

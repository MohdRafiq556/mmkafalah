@extends('layouts.forgot-password')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body"> -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group"><!-- class="row" -->
                            <label for="email" class="col-md-5 col-form-label text-md-left">{{ __('Alamat E-Mail') }}</label><!-- class="text-md-right" -->

                            <div ><!-- class="col-md-6" -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-user" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Alamat E-mail Anda" autofocus> <!-- class="form-control-user" -->

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div ><!-- class="form-group row mb-0" -->
                            <div ><!-- class="col-md-6 offset-md-4" -->
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Hantar Link Untuk Ubah Kata Laluan') }}
                                </button>
                            </div>
                        </div>
                        

                        <!-- <div > class="form-group row mb-0" 
                            <div class="text-center">  class="col-md-6 offset-md-4" 
                                <a href="{{ url('register') }}">
                                    {{ __('Create an Account!') }}
                                </a>
                            </div>
                        </div> -->

                        <div ><!-- class="form-group row mb-0" -->
                            <div class="text-center"><!-- class="col-md-6 offset-md-4" -->
                                <a class="small" href="{{ url('login') }}">
                                    {{ __('Log Masuk!') }}
                                </a>
                            </div>
                        </div>

                        <div ><!-- class="form-group row mb-0" -->
                            <div class="text-center"><!-- class="col-md-8 offset-md-4" and plus text-center-->
                                
                                    <a class="small" href="{{ url('/') }}"><!-- class="btn btn-link" -->
                                        {{ __('Batal') }}
                                </a>
                            </div>
                        </div>

                    </form>
                <!-- </div>
            </div>
        </div>
    </div>
</div> -->
@endsection

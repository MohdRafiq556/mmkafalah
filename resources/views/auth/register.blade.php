@extends('layouts.register')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body"> -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group"><!-- class="row" -->
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Nama Penuh') }}</label><!-- class="text-md-right" -->

                            <div ><!-- class="col-md-6" -->
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-control-user" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Your Full Name" autofocus> <!-- plus class="form-control-user" -->

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group"><!-- class="row" -->
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('Alamat E-Mail') }}</label><!-- class="text-md-right" -->

                            <div ><!-- class="col-md-6" -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-user" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your E-Mail Address"><!-- plus class="form-control-user" -->

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group"><!-- class="row" -->
                            <label for="address" class="col-md-4 col-form-label text-md-left">{{ __('Alamat Rumah') }}</label><!-- class="text-md-right" -->

                            <div ><!-- class="col-md-6" -->
                                <input id="address" type="text" class="form-control @error('name') is-invalid @enderror form-control-user" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Enter Your Address" autofocus> <!-- plus class="form-control-user" -->

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group"><!-- class="row" -->
                            <label for="phone_number" class="col-md-4 col-form-label text-md-left">{{ __('Nombor Telefon') }}</label><!-- class="text-md-right" -->

                            <div ><!-- class="col-md-6" -->
                                <input id="phone_number" type="number" class="form-control @error('name') is-invalid @enderror form-control-user" min="1" max="10000000000" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="Enter Your Number Phone" autofocus> <!-- plus class="form-control-user" -->

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group"><!-- class="row" -->
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Kata Laluan') }}</label><!-- class="text-md-right" -->

                            <div> <!-- class="col-md-6" -->
                                <input id="password" type="password" class="form-control  form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password"><!-- plus class="form-control-user" -->

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group"><!-- class="row" -->
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Sahkan Kata Laluan') }}</label><!-- class="text-md-right" -->

                            <div> <!-- class="col-md-6" -->
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Your Confirm Password"><!-- plus class="form-control-user" -->
                            </div>
                        </div>

                        <div class="form-group"><!-- class="row" -->
                            <label for="role_id" class="col-md-4 col-form-label text-md-left">{{ __('Staf/wakil') }}</label><!-- class="text-md-right" -->

                            <select name="user_roles" id="role_id" value="{{ old('user_roles') }}" placeholder="" required>
                                <option value="2">Staff</option>
                                <option value="3">Wakil Syarikat</option>
                            </select>
                        </div>

                        <div ><!-- class="form-group row mb-0" -->
                            <div ><!-- class="col-md-6 offset-md-4" -->
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Daftar Masuk') }}
                                </button>
                            </div>
                        </div>



                        <div><!-- class="form-group row mb-0" -->
                            <div class="text-center"><!-- class="col-md-6 offset-md-4" plus class="text-center" -->
                                <a class="small" href="{{ url('login') }}">
                                    {{ __('Sudah Mempunyai Akaun? Log Masuk!') }}
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
                <!--</div>
            </div>
        </div>
    </div>
</div> -->
@endsection

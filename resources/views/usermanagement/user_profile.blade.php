@extends('layouts.sbadmin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="/uploads/avatars/{{ $user->avatar }}"  style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>

            <form enctype="multipart/form-data" action="/profile" method="POST">

                <div >
                    <label for="">Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>

                
                <div class="form-group row">
                    <label for="">Email Address</label>
                    <input type="text" name="email" value="{{ $user->email}}" class="form-control form-control-user bg-gray-200" readonly>
                </div>

                <div class="form-group">
                    <label for="">Nama Penuh</label>
                    <input type="text" name="name" value="{{ $user->name}}" class="form-control form-control-user bg-gray-200">
                </div>
                
                <div class="form-group">
                    <label for="">Alamat Rumah</label>
                    <input type="text" name="address" value="{{ $user->address}}" class="form-control form-control-user bg-gray-200">
                </div>

                <div class="form-group">
                    <label for="">Nombor Telefon</label>
                    <input type="text" name="phone_number" value="{{ $user->phone_number}}" class="form-control form-control-user bg-gray-200">
                </div>

                <div class="form-group"><!-- class="row" -->
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label><!-- class="text-md-right" -->

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label><!-- class="text-md-right" -->

                            <div> <!-- class="col-md-6" -->
                                <input id="password-confirm" type="password" class="form-control form-control-user bg-gray-200" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Your Confirm Password"><!-- plus class="form-control-user" -->
                            </div>
                        </div>

                <button type="submit" class="btn btn-success btn-user ">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
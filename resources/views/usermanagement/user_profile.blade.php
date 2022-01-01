@extends('layouts.sbadmin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="/uploads/avatars/{{ $user->avatar }}"  style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>


            <form enctype="multipart/form-data" action="{{ route('updateAvatar') }}" method="POST">
                @method('PUT')
                @csrf

                <div >
                    <label for="">Update Profile Image</label> 
                    &nbsp;
                    <input type="file" name="avatar">
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

<!--
                <div class="form-group">
                    <label for="new_password" class="col-md-4 col-form-label text-md-left">{{ __('New Password') }}</label>

                    <div> 
                        <input type="password" class="form-control  form-control-user @error('password') is-invalid @enderror" name="password" required placeholder="Enter Your New Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm_password" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                    <div> 
                        <input type="password" class="form-control form-control-user @error('confirm_password') is-invalid @enderror bg-gray-200" name="confirm_password" required placeholder="Enter Your Confirm Password">
                            
                        @error('confirm_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
-->
                <button type="submit" class="btn btn-success btn-user float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

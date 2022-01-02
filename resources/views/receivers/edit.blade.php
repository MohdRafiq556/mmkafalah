@extends('layouts.sbadmin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="h2 mb-1 text-gray-900">Kemaskini Borang Penerima Hibah</h2>
                </div>

                <div class="card-body">

                    <!-- form start -->

                    <form action="{{ route('receiver:update', $receiver->id ) }}" method="POST"> <!-- bila update penerima, akan tambah jd penerima baru,, aku nak buat dia just update penerima tu je-->
                        @method('PUT')
                        @csrf
                        <h3 class=" text-center h3 mb-1 text-gray-800">Maklumat Penerima Hibah</h3>

                        <!-- <hr> -->

                        <div class="form-group">
                            <label for="" class="text-gray-800">Nama Penuh:</label>
                            <input name="nama_penerima" type="text" value="{{ $receiver->nama_penerima}}" class="form-control form-control-user bg-gray-200" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Nombor Kad Pengenalan:</label>
                            <input name="ic_penerima" type="number" value="{{ $receiver->ic_penerima}}" class="form-control form-control-user bg-gray-200" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nombor Telefon:</label>
                                <input name="no_tel_penerima" type="number" value="{{ $receiver->no_tel_penerima}}"  class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800" >Hubungan</label>
                                <input name="hubungan" type="text" value="{{ $receiver->hubungan}}" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Bahagian:</label>
                            <input name="bahagian" type="text" value="{{ $receiver->bahagian}}" class="form-control form-control-user bg-gray-200" required>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <a class="btn btn-danger btn-user" href="{{url ('/receivers', ['id' => $receiver->hibah_id] )}}">Cancel</a> <!-- tak boleh nak balik ke receiver index -->

                                <button type="submit" class="btn btn-success btn-user ">Submit</button>
                            </div>
                        </div>
                    </form>

                    <!-- form end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.landpage2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h2 mb-1 text-gray-900" style="color:Navy;">Borang Permohonan</h2>
                    </div>

                    <div class="card-body">

                        <!-- form start -->

                        <form method="POST">
                            @csrf
                            <h3  class=" text-center h3 mb-1 text-gray-800"style="color:Grey;">Maklumat Penerima Hibah</h3>

                            &nbsp;

                            <div class="form-group">
                                <label for="nama_penerima" style="color:grey; float:left; font-weight:bold;">Nama Penuh:</label>
                                <input name="nama_penerima" type="text" value="{{ $receiver->nama_penerima}}" placeholder="Nama Penuh Penerima Hibah" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            &nbsp;

                            <div class="form-group">
                                <label for="ic_penerima" style="color:grey; float:left; font-weight:bold;">Nombor Kad Pengenalan:</label>
                                <input name="ic_penerima" type="number" value="{{ $receiver->ic_penerima}}" placeholder="Nombor I/C Penerima" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            &nbsp;

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="no_tel_penerima" style="color:grey; float:left; font-weight:bold;">Nombor Telefon:</label>
                                    <input name="no_tel_penerima" type="number" value="{{ $receiver->no_tel_penerima}}" placeholder="Nombor Telefon Penerima"  class="form-control form-control-user bg-gray-200" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label for="hubungan" style="color:grey; float:left; font-weight:bold;" >Hubungan:</label>
                                    <input name="hubungan" type="text" value="{{ $receiver->hubungan}}" placeholder="Hubungan" class="form-control form-control-user bg-gray-200" readonly>
                                </div>
                            </div>

                            &nbsp;

                            <div class="form-group">
                                <label for="bahagian" style="color:grey; float:left; font-weight:bold;">Bahagian:</label>
                                <input name="bahagian" type="text" value="{{ $receiver->bahagian}}" placeholder="Bahagian %" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <a class="btn btn-warning" href="{{url ('receivers/share_view/{customer_id}', ['$hibah -> customer_id'])}}">Kembali ke Senarai Penerima</a>
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

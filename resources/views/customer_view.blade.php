@extends('layouts.landpage')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="h2 mb-1 text-gray-900">Borang Permohonan</h2>
                </div>

                <div class="card-body">
                    
                    <!-- form start -->

                    <form action="{{ route('customer:store')}}" method="POST">
                        @csrf
                        <h3 class=" text-center h3 mb-1 text-gray-800">Maklumat Pelanggan</h3>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nama Penuh</label>
                                <input name="nama_penuh" value="{{ $customer->nama_penuh}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">No Kad Pengenalan</label>
                                <input name="nombor_ic" value="{{ $customer->nombor_ic}}" readonly class="form-control form-control-user bg-gray-200">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Tarikh Lahir</label>
                                <input name="tarikhlahir" value="{{ $customer->tarikhlahir}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="" class="text-gray-800">Tempat Lahir</label>
                                <input name="tempat_lahir" value="{{ $customer->tempat_lahir}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Jantina</label>
                                <input name="jantina" value="{{ $customer->jantina}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Keturunan</label>
                                <input name="keturunan" value="{{ $customer->keturunan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="" class="text-gray-800">Agama</label>
                                <input name="agama" value="{{ $customer->agama}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Warganegara</label>
                                <input name="warganegara" value="{{ $customer->warganegara}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nombor Telefon</label>
                                <input name="nombor_telefon" value="{{ $customer->nombor_telefon}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Nombor HP</label>
                                <input name="nombor_hp" value="{{ $customer->nombor_hp}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Alamat</label>
                            <input name="alamat_rumah" value="{{ $customer->alamat_rumah}}" class="form-control form-control-user bg-gray-200" readonly>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Poskod</label>
                                <input name="poskod" value="{{ $customer->poskod}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="" class="text-gray-800">Bandar</label>
                                <input name="bandar" value="{{ $customer->bandar}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Negeri</label>
                                <input name="negeri" value="{{ $customer->negeri}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Pekerjaan</label>
                                <input name="pekerjaan" value="{{ $customer->pekerjaan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="" class="text-gray-800">Pendapatan (RM)</label>
                                <input name="pendapatan" value="{{ $customer->pendapatan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Jumlah Tanggungan</label>
                                <input name="jumlah_tanggungan" value="{{ $customer->jumlah_tanggungan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="" class="text-gray-800">Nama Majikan</label>
                                <input name="nama_majikan" value="{{ $customer->nama_majikan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">sektor</label>
                                <input name="sektor" value="{{ $customer->sektor}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="" class="text-gray-800">Tinggi (CM)</label>
                                <input name="tinggi" value="{{ $customer->tinggi}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Berat (KG)</label>
                                <input name="berat" value="{{ $customer->berat}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="" class="text-gray-800">Nombor Akaun</label>
                                <input name="nombor_akaun" value="{{ $customer->nombor_akaun}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Bank</label>
                                <input name="bank" value="{{ $customer->bank}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Pakej Pilihan</label>
                                <input name="pakej_pilihan" value="{{ $customer->pakej_pilihan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="" class="text-gray-800">Jumlah Simpanan (RM)</label>
                                <input name="jum_simpanan" value="{{ $customer->jum_simpanan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Jumlah Simpanan</label>
                                <input name="jumlah_simpanan" value="{{ $customer->jumlah_simpanan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Email Pelanggan</label>
                                <input name="email_pelanggan" value="{{ $customer->email_pelanggan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="" class="text-gray-800">Pegawai Perunding</label>
                                <input name="pegawai_perunding" value="{{ $customer->pegawai_perunding}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Tarikh Permohonan</label>
                                <input name="tarikh" value="{{ $customer->tarikh}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <a class="btn btn-primary" href="{{url ('customers')}}">Back</a>
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
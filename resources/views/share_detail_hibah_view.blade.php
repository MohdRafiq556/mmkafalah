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

                    <form  method="POST">
                        @csrf
                        <h3 class=" text-center h3 mb-1 text-gray-800" style="color:Grey;">Maklumat Pelanggan</h3>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="nama_penuh" style="color:grey; float:left; font-weight:bold;"> Nama Penuh:</label>
                                <input name="nama_penuh" value="{{ $customer->nama_penuh}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="nombor_ic" style="color:grey; float:left; font-weight:bold;"> No Kad Pengenalan:</label>
                                <input name="nombor_ic" value="{{ $customer->nombor_ic}}" readonly class="form-control form-control-user bg-gray-200">
                            </div>
                        </div>

                        &nbsp;

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="tarikhlahir" style="color:grey; float:left; font-weight:bold;"> Tarikh Lahir:</label>
                                <input name="tarikhlahir" value="{{ $customer->tarikhlahir}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="tempat_lahir" style="color:grey; float:left; font-weight:bold;"> Tempat Lahir:</label>
                                <input name="tempat_lahir" value="{{ $customer->tempat_lahir}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="jantina" style="color:grey; float:left; font-weight:bold;"> Jantina:</label>
                                <input name="jantina" value="{{ $customer->jantina}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="keturunan" style="color:grey; float:left; font-weight:bold;"> Keturunan:</label>
                                <input name="keturunan" value="{{ $customer->keturunan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="agama" style="color:grey; float:left; font-weight:bold;"> Agama:</label>
                                <input name="agama" value="{{ $customer->agama}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="warganegara" style="color:grey; float:left; font-weight:bold;"> Warganegara:</label>
                                <input name="warganegara" value="{{ $customer->warganegara}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="nombor_telefon" style="color:grey; float:left; font-weight:bold;"> Nombor Telefon:</label>
                                <input name="nombor_telefon" value="{{ $customer->nombor_telefon}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="nombor_hp" style="color:grey; float:left; font-weight:bold;"> Nombor HP:</label>
                                <input name="nombor_hp" value="{{ $customer->nombor_hp}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;

                        <div class="form-group">
                            <label for="alamat_rumah" style="color:grey; float:left; font-weight:bold;"> Alamat:</label>
                            <input name="alamat_rumah" value="{{ $customer->alamat_rumah}}" class="form-control form-control-user bg-gray-200" readonly>
                        </div>

                        &nbsp;

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="poskod" style="color:grey; float:left; font-weight:bold;"> Poskod:</label>
                                <input name="poskod" value="{{ $customer->poskod}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="bandar" style="color:grey; float:left; font-weight:bold;"> Bandar:</label>
                                <input name="bandar" value="{{ $customer->bandar}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="negeri" style="color:grey; float:left; font-weight:bold;"> Negeri:</label>
                                <input name="negeri" value="{{ $customer->negeri}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="pekerjaan" style="color:grey; float:left; font-weight:bold;"> Pekerjaan:</label>
                                <input name="pekerjaan" value="{{ $customer->pekerjaan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="pendapatan" style="color:grey; float:left; font-weight:bold;"> Pendapatan (RM):</label>
                                <input name="pendapatan" value="{{ $customer->pendapatan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="jumlah_tanggungan" style="color:grey; float:left; font-weight:bold;"> Jumlah Tanggungan:</label>
                                <input name="jumlah_tanggungan" value="{{ $customer->jumlah_tanggungan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nama_majikan" style="color:grey; float:left; font-weight:bold;"> Nama Majikan:</label>
                                <input name="nama_majikan" value="{{ $customer->nama_majikan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="sektor" style="color:grey; float:left; font-weight:bold;"> Sektor:</label>
                                <input name="sektor" value="{{ $customer->sektor}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="tinggi" style="color:grey; float:left; font-weight:bold;"> Tinggi (CM):</label>
                                <input name="tinggi" value="{{ $customer->tinggi}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="berat" style="color:grey; float:left; font-weight:bold;"> Berat (KG):</label>
                                <input name="berat" value="{{ $customer->berat}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nombor_akaun" style="color:grey; float:left; font-weight:bold;"> Nombor Akaun:</label>
                                <input name="nombor_akaun" value="{{ $customer->nombor_akaun}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="bank" style="color:grey; float:left; font-weight:bold;"> Bank:</label>
                                <input name="bank" value="{{ $customer->bank}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="pakej_pilihan" style="color:grey; float:left; font-weight:bold;"> Pakej Pilihan:</label>
                                <input name="pakej_pilihan" value="{{ $customer->pakej_pilihan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="jum_simpanan" style="color:grey; float:left; font-weight:bold;"> Jumlah Simpanan (RM):</label>
                                <input name="jum_simpanan" value="{{ $customer->jum_simpanan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="jumlah_simpanan" style="color:grey; float:left; font-weight:bold;"> Jumlah Simpanan:</label>
                                <input name="jumlah_simpanan" value="{{ $customer->jumlah_simpanan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        &nbsp;
                        
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="email_pelanggan" style="color:grey; float:left; font-weight:bold;"> Email Pelanggan:</label>
                                <input name="email_pelanggan" value="{{ $customer->email_pelanggan}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class=" col-sm-4">
                                <label for="pegawai_perunding" style="color:grey; float:left; font-weight:bold;"> Pegawai Perunding:</label>
                                <input name="pegawai_perunding" value="{{ $customer->pegawai_perunding}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="tarikh" style="color:grey; float:left; font-weight:bold;"> Tarikh Permohonan:</label>
                                <input name="tarikh" value="{{ $customer->tarikh}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <a class="btn btn-primary" href="{{url ('/')}}">Kembali ke Halaman Utama</a>
                                <a href="{{ route('customer-view',$customer->id) }}" class="btn btn-success">Senarai Hibah</a>
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
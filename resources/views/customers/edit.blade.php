@extends('layouts.sbadmin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="h2 mb-1 text-gray-900">Kemaskini Borang Pelanggan</h2>
                </div>

                <div class="card-body">
                    
                    <!-- form start -->

                    <form action="{{ route('customer:update', $customer->id )}}" method="POST">
                        @csrf
                        <h3 class=" text-center h3 mb-1 text-gray-800">Maklumat Pelanggan</h3>
                        
                        <div class="form-group">
                            <label for="" class="text-gray-800">Nama Penuh</label>
                            <input name="nama_penuh" type="text" value="{{ $customer->nama_penuh}}" class="form-control form-control-user bg-gray-200" readonly>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Nombor Kad Pengenalan</label>
                            <input name="nombor_ic" type="number" value="{{ $customer->nombor_ic}}" class="form-control form-control-user bg-gray-200" readonly>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Tarikh Lahir</label>
                                <input name="tarikhlahir" value="{{ $customer->tarikhlahir}}" class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Jantina</label>
                                <select name="jantina" id="jantina" class="form-control form-control-user bg-gray-200" required>
                                    <option>{{ $customer->jantina}}</option>
                                    <option value="Lelaki">Lelaki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Tempat Lahir</label>
                            <input name="tempat_lahir" type="text" value="{{ $customer->tempat_lahir}}" class="form-control form-control-user bg-gray-200" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Keturunan</label>
                                <input name="keturunan" type="text" value="{{ $customer->keturunan}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Agama</label>
                                <select name="agama" id="agama"  class="form-control form-control-user bg-gray-200" required>
                                    <option>{{ $customer->agama}}</option>
                                    <option value="Islam">Islam</option>
                                    <option value="bukan Islam">Bukan Islam</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Warganegara</label>
                            <select name="warganegara" id="warganegara"  class="form-control form-control-user bg-gray-200" required>
                                <option>{{ $customer->warganegara}}</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Bukan Warganegara">Bukan Warganegara</option>
                            </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nombor Telefon</label>
                                <input name="nombor_telefon" type="number" value="{{ $customer->nombor_telefon}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Nombor HP</label>
                                <input name="nombor_hp" type="number" value="{{ $customer->nombor_hp}}" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Alamat</label>
                            <input name="alamat_rumah" type="text" value="{{ $customer->alamat_rumah}}" class="form-control form-control-user bg-gray-200" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Poskod</label>
                                <input name="poskod" type="number" value="{{ $customer->poskod}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class=" col-sm-4">
                                <label for="" class="text-gray-800">Bandar</label>
                                <input name="bandar" type="text" value="{{ $customer->bandar}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Negeri</label>
                                <input name="negeri" type="text" value="{{ $customer->negeri}}" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4 ">
                                <label for="" class="text-gray-800">Pekerjaan</label>
                                <input name="pekerjaan" type="text" value="{{ $customer->pekerjaan}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-4 ">
                                <label for="" class="text-gray-800">Pendapatan</label>
                                <select name="pendapatan" id="pendapatan"  class="form-control form-control-user bg-gray-200" required>
                                    <option>{{ $customer->pendapatan}}</option>
                                    <option value="RM500-RM1000">RM500-RM1000</option>
                                    <option value="RM1100-RM2500">RM1100-RM2500</option>
                                    <option value="RM2500 keatas">RM2500 ke atas</option>
                                </select>
                            </div>

                            <div class="col-sm-4 ">
                                <label for="" class="text-gray-800">Jumlah Tanggungan (Anak)</label>
                                <input name="jumlah_tanggungan" type="number" value="{{ $customer->jumlah_tanggungan}}" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nama Majikan</label>
                                <input name="nama_majikan" type="text" value="{{ $customer->nama_majikan}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Sektor</label> 
                                <select name="sektor" id="sektor"  class="form-control form-control-user bg-gray-200" required>
                                    <option>{{ $customer->sektor}}</option>
                                    <option value="Awam">Awam</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Tinggi (CM)</label>
                                <input name="tinggi" type="number" value="{{ $customer->tinggi}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Berat (KG)</label>
                                <input name="berat" type="number" value="{{ $customer->berat}}" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nombor Akaun Bank</label>
                                <input name="nombor_akaun" type="number" value="{{ $customer->nombor_akaun}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Bank</label>
                                <input name="bank" type="text" value="{{ $customer->bank}}" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Pakej Pilihan</label>
                            <input name="pakej_pilihan" type="text" value="{{ $customer->pakej_pilihan}}" class="form-control form-control-user bg-gray-200" required>
                        </div>
                             
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Jumlah Simpanan (RM)</label>
                                <input name="jum_simpanan" type="number" value="{{ $customer->jum_simpanan}}" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Jumlah Simpanan</label>
                                <select name="jumlah_simpanan" id="jumlah_simpanan"  class="form-control form-control-user bg-gray-200" required>
                                    <option>{{ $customer->jumlah_simpanan}}</option>
                                    <option value="Tahunan">Tahunan</option>
                                    <option value="Setengah Tahun">Setengah Tahun</option>
                                    <option value="Suku Tahunan">Suku Tahunan</option>
                                    <option value="Bulanan">Bulanan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Email Pelanggan</label> 
                            <input name="email_pelanggan" type="email" value="{{ $customer->email_pelanggan}}" class="form-control form-control-user bg-gray-200"required>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Pegawai Perunding</label>
                                <input name="pegawai_perunding" type="text" value="{{ $customer->pegawai_perunding}}"  class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800" >Tarikh Kemaskini</label>
                                <input name="tarikh" type="date" value="{{ $customer->tarikh}}" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <a class="btn btn-danger btn-user" href="{{url ('customers')}}">Cancel</a>

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
@extends('layouts.sbadmin2')

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

                    <form action="{{ route('customer:store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <h3 class=" text-center h3 mb-1 text-gray-800">Maklumat Pelanggan</h3>

                        <hr>
                        
                        <div class="form-group">
                            <label for="" class="text-gray-800">Nama Penuh</label>
                            <input name="nama_penuh" type="text" placeholder="Nama Penuh" class="form-control form-control-user bg-gray-200" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="text-gray-800">No Kad Pengenalan</label>
                            <input name="nombor_ic" type="number" placeholder="Nombor I/C" class="form-control form-control-user bg-gray-200" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Tarikh Lahir</label>
                                <input name="tarikhlahir" type="date" placeholder="Tarikh Lahir" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Jantina</label>
                                <select name="jantina" id="jantina" class="form-control form-control-user bg-gray-200" required>
                                    <option value="Lelaki">Lelaki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Tempat Lahir</label>
                            <input name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="form-control form-control-user bg-gray-200" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Keturunan</label>
                                <input name="keturunan" type="text" placeholder="Keturunan" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Agama</label>
                                <select name="agama" id="agama" class="form-control form-control-user bg-gray-200" required>
                                    <option value="Islam">Islam</option>
                                    <option value="Bukan Islam">Bukan Islam</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="text-gray-800">Warganegara</label>
                            <select name="warganegara" id="warganegara" class="form-control form-control-user bg-gray-200" required>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Bukan Warganegara">Bukan Warganegara</option>
                            </select>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nombor Telefon</label>
                                <input name="nombor_telefon" type="number" placeholder="Nombor Telefon Rumah" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Nombor HP</label>
                                <input name="nombor_hp" type="number" placeholder="Nombor Telefon Bimbit" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Alamat</label>
                            <textarea name="alamat_rumah" type="text" placeholder="Alamat Rumah" class="form-control form-control-user bg-gray-200" required></textarea>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Poskod</label>
                                <input name="poskod" type="number" placeholder="Poskod" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class=" col-sm-4">
                                <label for="" class="text-gray-800">Bandar</label>
                                <input name="bandar" type="text" placeholder="Bandar" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-4">
                                <label for="" class="text-gray-800">Negeri</label>
                                <input name="negeri" type="text" placeholder="Negeri" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-4 ">
                                <label for="" class="text-gray-800">Pekerjaan</label>
                                <input name="pekerjaan" type="text" placeholder="Pekerjaan" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-4 ">
                                <label for="" class="text-gray-800">Pendapatan</label>
                                <select name="pendapatan" id="pendapatan" class="form-control form-control-user bg-gray-200" required>
                                    <option value="RM500-RM1000">RM500-RM1000</option>
                                    <option value="RM1100-RM2500">RM1100-RM2500</option>
                                    <option value="RM2500 keatas">RM2500 ke atas</option>
                                </select>
                            </div>

                            <div class="col-sm-4 ">
                                <label for="" class="text-gray-800">Jumlah Tanggungan (Anak)</label>
                                <input name="jumlah_tanggungan" type="number" placeholder="Bilangan Anak" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nama Majikan</label>
                                <input name="nama_majikan" type="text" placeholder="Nama Majikan" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Sektor</label> 
                                <select name="sektor" id="sektor" class="form-control form-control-user bg-gray-200" required>
                                    <option value="Awam">Awam</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Tinggi (CM)</label>
                                <input name="tinggi" type="number" placeholder="Tinggi" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Berat (KG)</label>
                                <input name="berat" type="number" placeholder="Berat" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Nombor Akaun Bank</label>
                                <input name="nombor_akaun" type="number" placeholder="Nombor Akaun Bank" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Bank</label>
                                <input name="bank" type="text" placeholder="Bank" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Pakej Pilihan</label>
                            <input name="pakej_pilihan" type="text" placeholder="Pakej Pilihan" class="form-control form-control-user bg-gray-200" required>
                        </div>
                             
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Jumlah Simpanan (RM)</label>
                                <input name="jum_simpanan" type="number" placeholder="Jumlah Simpanan (RM)" class="form-control form-control-user bg-gray-200" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800">Jumlah Simpanan</label>
                                <select name="jumlah_simpanan" id="jumlah_simpanan" class="form-control form-control-user bg-gray-200" required>
                                    <option value="Tahunan">Tahunan</option>
                                    <option value="Setengah Tahun">Setengah Tahun</option>
                                    <option value="suku Tahunan">Suku Tahunan</option>
                                    <option value="Bulanan">Bulanan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="text-gray-800">Email Pelanggan</label>
                            <input name="email_pelanggan" type="email" placeholder="Email Pelanggan" class="form-control form-control-user bg-gray-200" required>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="" class="text-gray-800">Pegawai Perunding</label>
                                <input name="pegawai_perunding" type="text" value="{{ Auth::user()->name }}"  class="form-control form-control-user bg-gray-200" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="text-gray-800" >Tarikh Permohonan</label>
                                <input name="tarikh" type="date" class="form-control form-control-user bg-gray-200" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="file" class="text-gray-800">Muat Naik Salinan I/C Pelanggan</label>
                            <input name="gambar_ic" type="file" class="form-control form-control-user bg-gray-200" required>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
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
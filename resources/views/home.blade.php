@extends('layouts.sbadmin2')

@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                <!-- Bilangan Pelanggan -->
                <div class="col-xl-6 col-md-6 mb-6">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Bilangan Pelanggan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><h3 class="font-weight-bold text-gray-800">{{ $count }} {{ __('Orang') }}</h3></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-600"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Hibah -->
                <div class="col-xl-6 col-md-6 mb-6">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Bilangan Penerima Hibah</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><h3 class="font-weight-bold text-gray-800">{{ $total }} {{ __('Orang') }}</h3></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-600"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            &nbsp;

            <div class="row">
                <!-- Bilangan Penerima Hibah -->
                <div class="col-xl-6 col-md-6 mb-6">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Jumlah Hibah</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><h3 class="font-weight-bold text-gray-800">{{ $calc }} {{ __('Hibah') }}</h3></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-list-alt fa-2x text-gray-600"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Simpanan Hibah -->
                <div class="col-xl-6 col-md-6 mb-6">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Jumlah Simpanan Hibah</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><h3 class="font-weight-bold text-gray-800">{{ __('RM') }} {{ $RM }}</h3></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-600"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

           
            
        </div>
    </div>
</div>
@endsection

@extends('layouts.landpage')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="color:Navy;">Senarai Pelanggan</h3>
                </div>

                <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>No I/C</th>
                        <th>Pakej Pilihan</th>
                        <th>Tindakan</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(count($customers) > 0)
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->nama_penuh }}</td>
                                <td>{{ $customer->nombor_ic }}</td>
                                <td>{{ $customer->pakej_pilihan }}</td>
                                <td>
                                    <a href="{{ route('customer-view-hibah_details',$customer->id) }}" class="btn btn-success btn-sm">Maklumat Pelanggan</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    @if(count($customers) == 0)
                    <tr>
                        <td colspan="5">None</td>
                    </tr>
                    @endif
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

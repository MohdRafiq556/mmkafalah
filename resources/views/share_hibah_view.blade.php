@extends('layouts.sbadmin2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Senarai Hibah</h3>
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
                                <th>ID Hibah</th>
                                <th>Nama Pelanggan</th>
                                <th>Nombor I/C</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($hibahs as $hibah)
                                <tr>
                                    <td>{{ $hibah->id }}</td>
                                    <td>{{ $hibah->customer->nama_penuh }}</td>
                                    <td>{{ $hibah->customer->nombor_ic }}</td>
                                    <td>
                                        <a href="{{route ('customer-view-receivers', ['hibah' => $hibah->id])}}" class="btn btn-warning btn-sm" ><i class="fas fa-list-ul"> Senarai Nama</i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $hibahs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

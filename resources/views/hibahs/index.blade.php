@extends('layouts.sbadmin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Index</h3>
                        <div class="float-right">
                            <a href="{{ url('/hibah/'.$customer_id.'/create') }}">Add new hibah</a><!-- url('/hibah/'.$customer_id.'/create') -->
                        </div>

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
                        <th>id</th>
                        <th>Nama Pelanggan</th>
                        <th>Nombor I/C</th>
                        <th>Task</th>

                    </tr>
                    </thead>

                    <tbody>
                        @foreach($hibahs as $hibah)
                        <tr>
                            <td>{{ $hibah->id }}</td>
                            <td>{{ $hibah->customer->nama_penuh }}</td>
                            <td>{{ $hibah->customer->nombor_ic }}</td>
                            <td><a href="{{route ('receiver:create')}}">Tambah Nama Penerima</a></td>
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

@extends('layouts.sbadmin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="h2 mb-1 text-gray-900">Indeks</h3>
                        <div class="float-right">
                            <form action="" class="form-inline" method="get" action="{{ route('customer:index')}}">
                                <input type="number" name="keyword" placeholder="Nombor I/C Sahaja!" class="form-control">
                                <button type="submit" class="btn btn-primary" title="IC number"><i class="fa fa-search">Carian</i></button>
                            </form>
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
                        <th>#</th>
                        <th>Nama Penuh</th>
                        <th>Email</th>
                        <th>Alamat Rumah</th>
                        <th>Nombor Telefon</th>
                        <th>Pilihan</th>
                        <th>Padam</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->address}}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"> Hibah</i></a>
                            <a href="" class="btn btn-success btn-sm"><i class="fa fa-list"> Lihat</i></a>
                            <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit</i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
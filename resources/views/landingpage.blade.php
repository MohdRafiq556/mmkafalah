@extends('layouts.landpage')

@section('content')
<div>
    &nbsp;
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Senarai Pelanggan</h3>

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
                        <th>Nama</th>
                        <th>No I/C</th>
                        <th>Show</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->nama_penuh }}</td>
                        <td>{{ $customer->nombor_ic }}</td>
                        <td>
                            <a href="{{ route('customer:show',$customer->id) }}" class="btn btn-success btn-sm"><i class="fa fa-list">show</i></a>
                        </td>     
                    </tr>
                    @endforeach
                    </tbody>
                </table>
 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
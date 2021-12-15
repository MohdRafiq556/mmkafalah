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
                        <th>Nama</th>
                        <th>No I/C</th>
                        <th>Pakej Pilihan</th>
                        <th>Pilihan</th>
                        <th>Padam</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->nama_penuh }}</td>
                        <td>{{ $customer->nombor_ic }}</td>
                        <td>{{ $customer->pakej_pilihan }}</td>
                        <td>
                            <a href="{{ route('hibah-index', [$customer->id]) }}" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"> Hibah</i></a>
                            <a href="{{ route('customer:show', $customer->id) }}" class="btn btn-success btn-sm"><i class="fa fa-list"> Lihat</i></a>
                            <a href="{{ route('customer:edit', $customer->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit</i></a>
                        </td>
                        <td><!-- form delete button -->
                            <form action="{{ route('customer:delete',$customer->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure to Delete IC number: {{$customer->nombor_ic}} ?')"><i class="fa fa-trash"></i> Padam</button>
                            </form>
                        </td><!-- form delete button -->
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $customers->links() }}   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

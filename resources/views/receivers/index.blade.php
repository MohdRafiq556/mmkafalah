@extends('layouts.sbadmin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Index</h3>
                        <!-- <div class="float-right">
                            <a href="{{ url('/hibah/'.$data->customer_id.'/create') }}">Add new hibah</a>
                        </div> -->

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
                        <th>Nama Penerima</th>
                        <th>Nombor I/C</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($data->receivers as $receiver)
                        <tr>
                            <td>{{ $receiver->id }}</td>
                            <td>{{ $receiver->nama_penerima }}</td>
                            <td>{{ $receiver->ic_penerima }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->receivers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

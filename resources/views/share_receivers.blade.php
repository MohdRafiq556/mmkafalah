@extends('layouts.landpage2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="" style="color:Navy;">Penerima Hibah</h3>
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
                                <th>Nama Penerima</th>
                                <th>Nombor I/C</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data->receivers as $receiver)
                                <tr>
                                    <td>{{ $receiver->id }}</td>
                                    <td>{{ $receiver->nama_penerima }}</td>
                                    <td>{{ $receiver->ic_penerima }}</td>
                                    <td>
                                        <a href="{{ route('customer-view-receiver_details', $receiver->id) }}" class="btn btn-success btn-sm"> Maklumat Penerima</a>
                                    </td>

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

@extends('layouts.landpage')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Penerima Hibah</h3>
                        <div class="float-right">
                            <a href="{{route ('hibah-index', '$receiver->id')}}">Kembali</a> <!-- aku tak dpt nak buat dia back ke hibah index -->
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
                                        <a href="{{ route('customer-view-receiver_details', $receiver->id) }}" class="btn btn-success btn-sm"><i class="fa fa-list"> Lihat</i></a>
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

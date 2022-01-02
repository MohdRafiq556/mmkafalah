@extends('layouts.sbadmin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Index</h3>
                        <div class="float-right">
                            <a href="{{url ('/hibah', ['$hibah->customer_id'])}}">Kembali</a> <!-- aku tak dpt nak buat dia back ke hibah index -->
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
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($data->receivers as $receiver)
                        <tr>
                            <td>{{ $receiver->id }}</td>
                            <td>{{ $receiver->nama_penerima }}</td>
                            <td>{{ $receiver->ic_penerima }}</td>
                            <td>
                                <a href="{{ route('receiver:show', $receiver->id )}}" class="btn btn-success btn-sm"><i class="fa fa-list"> Lihat</i></a>
                                <a href="{{ route('receiver:edit', $receiver->id )}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"> Edit</i></a>
                            </td>
                            <td><!-- form delete button -->
                                <form action="{{ route('receiver:delete',$receiver->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure to Delete IC number: {{$receiver->ic_penerima}} ?')"><i class="fa fa-trash"></i> Padam</button>
                                </form>
                            </td><!-- form delete button -->
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

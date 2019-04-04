@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Peminjaman {{ $peminjaman->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/peminjaman') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <a href="{{ url('/peminjaman/' . $peminjaman->id . '/edit') }}" title="Edit Peminjaman"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ubah</button></a>

                        <form method="POST" action="{{ url('peminjaman' . '/' . $peminjaman->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Peminjaman" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $peminjaman->id }}</td>
                                    </tr>
                                    <tr><th> Tanggal Pinjam </th><td> {{ $peminjaman->tanggal_pinjam }} </td></tr><tr><th> Tanggal Kembali </th><td> {{ $peminjaman->tanggal_kembali }} </td></tr><tr><th> Status </th><td> {{ $peminjaman->status }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

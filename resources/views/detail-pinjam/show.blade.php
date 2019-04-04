@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">DetailPinjam {{ $detailpinjam->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/detail-pinjam') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <a href="{{ url('/detail-pinjam/' . $detailpinjam->id . '/edit') }}" title="Edit DetailPinjam"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ubah</button></a>

                        <form method="POST" action="{{ url('detailpinjam' . '/' . $detailpinjam->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete DetailPinjam" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detailpinjam->id }}</td>
                                    </tr>
                                    <tr><th> Inventaris Id </th><td> {{ $detailpinjam->inventaris_id }} </td></tr><tr><th> Jumlah </th><td> {{ $detailpinjam->jumlah }} </td></tr><tr><th> Peminjaman Id </th><td> {{ $detailpinjam->peminjaman_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Inventari {{ $inventari->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/inventaris') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <a href="{{ url('/inventaris/' . $inventari->id . '/edit') }}" title="Edit Inventari"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ubah</button></a>

                        <form method="POST" action="{{ url('inventaris' . '/' . $inventari->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Inventari" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $inventari->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $inventari->nama }} </td></tr><tr><th> Kondisi </th><td> {{ $inventari->kondisi }} </td></tr><tr><th> Keterangan </th><td> {{ $inventari->keterangan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

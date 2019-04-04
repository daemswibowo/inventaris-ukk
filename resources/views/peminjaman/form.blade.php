<div class="form-group {{ $errors->has('tanggal_pinjam') ? 'has-error' : ''}}">
    <label for="tanggal_pinjam" class="control-label">{{ 'Tanggal Pinjam' }}</label>
    <input class="form-control" name="tanggal_pinjam" type="date" id="tanggal_pinjam" value="{{ isset($peminjaman->tanggal_pinjam) ? $peminjaman->tanggal_pinjam : ''}}" >
    {!! $errors->first('tanggal_pinjam', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_kembali') ? 'has-error' : ''}}">
    <label for="tanggal_kembali" class="control-label">{{ 'Tanggal Kembali' }}</label>
    <input class="form-control" name="tanggal_kembali" type="date" id="tanggal_kembali" value="{{ isset($peminjaman->tanggal_kembali) ? $peminjaman->tanggal_kembali : ''}}" >
    {!! $errors->first('tanggal_kembali', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="text" id="status" value="{{ isset($peminjaman->status) ? $peminjaman->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pegawai_id') ? 'has-error' : ''}}">
    <label for="pegawai_id" class="control-label">{{ 'Pegawai Id' }}</label>
    <select name="pegawai_id" id="" class="form-control">
      @foreach ($pegawais as $key=>$pegawai)
        <option value="{{ $key }}">{{ $pegawai }}</option>
      @endforeach
    </select>
    {!! $errors->first('pegawai_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Tambah' }}">
</div>

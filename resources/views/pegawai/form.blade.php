<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($pegawai->nama) ? $pegawai->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nip') ? 'has-error' : ''}}">
    <label for="nip" class="control-label">{{ 'Nip' }}</label>
    <input class="form-control" name="nip" type="number" id="nip" value="{{ isset($pegawai->nip) ? $pegawai->nip : ''}}" >
    {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <textarea class="form-control" rows="5" name="alamat" type="textarea" id="alamat" >{{ isset($pegawai->alamat) ? $pegawai->alamat : ''}}</textarea>
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Tambah' }}">
</div>

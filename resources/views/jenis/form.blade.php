<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($jeni->nama) ? $jeni->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kode') ? 'has-error' : ''}}">
    <label for="kode" class="control-label">{{ 'Kode' }}</label>
    <input class="form-control" name="kode" type="text" id="kode" value="{{ isset($jeni->kode) ? $jeni->kode : ''}}" >
    {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
    <label for="keterangan" class="control-label">{{ 'Keterangan' }}</label>
    <textarea class="form-control" rows="5" name="keterangan" type="textarea" id="keterangan" >{{ isset($jeni->keterangan) ? $jeni->keterangan : ''}}</textarea>
    {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Tambah' }}">
</div>

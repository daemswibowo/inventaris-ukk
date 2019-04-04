<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($inventari->nama) ? $inventari->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kondisi') ? 'has-error' : ''}}">
    <label for="kondisi" class="control-label">{{ 'Kondisi' }}</label>
    <input class="form-control" name="kondisi" type="text" id="kondisi" value="{{ isset($inventari->kondisi) ? $inventari->kondisi : ''}}" >
    {!! $errors->first('kondisi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
    <label for="keterangan" class="control-label">{{ 'Keterangan' }}</label>
    <input class="form-control" name="keterangan" type="text" id="keterangan" value="{{ isset($inventari->keterangan) ? $inventari->keterangan : ''}}" >
    {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jumlah') ? 'has-error' : ''}}">
    <label for="jumlah" class="control-label">{{ 'Jumlah' }}</label>
    <input class="form-control" name="jumlah" type="number" id="jumlah" value="{{ isset($inventari->jumlah) ? $inventari->jumlah : ''}}" >
    {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jenis_id') ? 'has-error' : ''}}">
    <label for="jenis_id" class="control-label">{{ 'Jenis' }}</label>
    {{-- <input class="form-control" name="jenis_id" type="number" id="jenis_id" value="{{ isset($inventari->jenis_id) ? $inventari->jenis_id : ''}}" > --}}
    <select name="jenis_id" id="" class="form-control">
      @foreach ($jenises as $key=>$jenis)
        <option value="{{ $key }}">{{ $jenis }}</option>
      @endforeach
    </select>
    {!! $errors->first('jenis_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ruang_id') ? 'has-error' : ''}}">
    <label for="ruang_id" class="control-label">{{ 'Ruang' }}</label>
    <select name="ruang_id" id="" class="form-control">
      @foreach ($ruangs as $key=>$ruang)
        <option value="{{ $key }}">{{ $ruang }}</option>
      @endforeach
    </select>
    {!! $errors->first('ruang_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kode_inventaris') ? 'has-error' : ''}}">
    <label for="kode_inventaris" class="control-label">{{ 'Kode Inventaris' }}</label>
    <input class="form-control" name="kode_inventaris" type="text" id="kode_inventaris" value="{{ isset($inventari->kode_inventaris) ? $inventari->kode_inventaris : ''}}" >
    {!! $errors->first('kode_inventaris', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div> --}}
<input class="form-control" name="user_id" type="hidden" id="user_id" value="{{ auth()->user()->id }}" >



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Tambah' }}">
</div>

<div class="form-group {{ $errors->has('inventaris_id') ? 'has-error' : ''}}">
    <label for="inventaris_id" class="control-label">{{ 'Inventaris Id' }}</label>
    <input class="form-control" name="inventaris_id" type="number" id="inventaris_id" value="{{ isset($detailpinjam->inventaris_id) ? $detailpinjam->inventaris_id : ''}}" >
    {!! $errors->first('inventaris_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jumlah') ? 'has-error' : ''}}">
    <label for="jumlah" class="control-label">{{ 'Jumlah' }}</label>
    <input class="form-control" name="jumlah" type="number" id="jumlah" value="{{ isset($detailpinjam->jumlah) ? $detailpinjam->jumlah : ''}}" >
    {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('peminjaman_id') ? 'has-error' : ''}}">
    <label for="peminjaman_id" class="control-label">{{ 'Peminjaman Id' }}</label>
    <input class="form-control" name="peminjaman_id" type="number" id="peminjaman_id" value="{{ isset($detailpinjam->peminjaman_id) ? $detailpinjam->peminjaman_id : ''}}" >
    {!! $errors->first('peminjaman_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Ubah' : 'Tambah' }}">
</div>

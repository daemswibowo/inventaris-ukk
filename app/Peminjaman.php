<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'peminjamen';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tanggal_pinjam', 'tanggal_kembali', 'status', 'pegawai_id'];

    
}

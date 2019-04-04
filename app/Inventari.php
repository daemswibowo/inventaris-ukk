<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventari extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventaris';

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
    protected $fillable = ['nama', 'kondisi', 'keterangan', 'jumlah', 'jenis_id', 'ruang_id', 'kode_inventaris', 'user_id'];

    
}

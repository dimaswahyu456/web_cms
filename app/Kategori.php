<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'mjenis';
    protected $fillable = [
        'kode', 'keterangan', 'klp'
    ];
    public $timestamps = false; //karena tabel register tidak terdapat field created_at dan updated_at
}

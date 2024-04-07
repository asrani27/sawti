<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang_belanja';
    public $timestamps = false;

    public function bibit()
    {
        return $this->belongsTo(Bibit::class, 'bibit_id');
    }
}

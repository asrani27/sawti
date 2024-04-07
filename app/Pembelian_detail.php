<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian_detail extends Model
{
    protected $table = 'pembelian_detail';
    public $timestamps = false;

    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class, 'pembelian_id');
    }

    public function bibit()
    {
        return $this->belongsTo(Bibit::class, 'bibit_id');
    }
}

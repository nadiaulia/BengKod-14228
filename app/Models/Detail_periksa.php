<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_periksa extends Model
{
    protected $fillable = [
        'id_periksa',
        'id_obat',
    ];
    
    //many-to-one
    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa');
    }

    public function obat()
    {
        return $this->belongsTo(Periksa::class, 'obat');
    }
}

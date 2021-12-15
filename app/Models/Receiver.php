<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penerima',
        'ic_penerima',
        'no_tel_penerima',
        'hubungan',
        'bahagian',
        'hibah_id'
    ];

    protected $table='receivers';

    public function hibah()
    {
        return $this->belongsTo(Hibah::class);
    } 

}

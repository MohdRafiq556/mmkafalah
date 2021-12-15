<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use App\Models\Customer;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penuh',
        'nombor_ic',
        'tarikhlahir',
        'tempat_lahir',
        'keturunan',
        'warganegara',
        'jantina',
        'agama',
        'nombor_telefon',
        'nombor_hp',
        'alamat_rumah',
        'poskod',
        'bandar',
        'negeri',
        'pekerjaan',
        'pendapatan',
        'nama_majikan',
        'sektor',
        'jumlah_tanggungan',
        'tinggi',
        'berat',
        'nombor_akaun',
        'bank',
        'pakej_pilihan',
        'jumlah_simpanan',
        'jum_simpanan',
        'email_pelanggan',
        'tarikh',
        'pegawai_perunding',
        'user_id'
    ];

    protected $table='customers';

    public function hibahs()
    {
        return $this->hasMany(hibah::class);
    } 

}

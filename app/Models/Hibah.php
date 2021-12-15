<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Hibah;

class Hibah extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    } 

    public function receivers()
    {
        return $this->hasMany(Receiver::class);
    } 

   
}

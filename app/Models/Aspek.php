<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function Soal()
    {
        return $this->hasMany(Soal::class, 'id_aspek', 'id');
    }
}

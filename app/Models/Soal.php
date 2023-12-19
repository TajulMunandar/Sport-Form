<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function Jawaban()
    {
        return $this->hasMany(Jawaban::class, 'id_soal', 'id');
    }

    public function Aspek()
    {
        return $this->belongsTo(Aspek::class, 'id_aspek', 'id');
    }
}

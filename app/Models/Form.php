<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function Jawaban()
    {
        return $this->hasMany(Jawaban::class, 'id_form', 'id');
    }

    public function Instrumen()
    {
        return $this->belongsTo(Instrumen::class, 'id_instrumen');
    }
}

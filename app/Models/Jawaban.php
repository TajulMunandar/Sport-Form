<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function Soal()
    {
        return $this->belongsTo(Soal::class, 'id_soal', 'id');
    }

    public function Form()
    {
        return $this->belongsTo(Form::class, 'id_form', 'id');
    }
}

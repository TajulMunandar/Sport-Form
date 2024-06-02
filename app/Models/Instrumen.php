<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrumen extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function Wasit()
    {
        return $this->belongsTo(Wasit::class, 'id_wasit');
    }

    public function AcaraLomba()
    {
        return $this->belongsTo(AcaraLomba::class, 'id_lomba');
    }

    public function Form()
    {
        return $this->hasMany(Form::class, 'id_instrumen', 'id');
    }
}

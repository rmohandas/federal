<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = ['id', 'proprietario', 'modelo', 'marca', 'ano', 'renavam'];
}

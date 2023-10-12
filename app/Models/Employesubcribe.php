<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employesubcribe extends Model
{
    use HasFactory;

    protected $fillable = [
        'employe_name',
        'note'
    ];
}

<?php

namespace App\Models;

use App\Events\ApplicationEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'position',
        'city',
        'email',
        'address',
        'phone'
    ];

    // public function event()
    // {
    //     return $this->hasMany(ApplicationEvent::class, 'application_id', 'id');
    // }
}

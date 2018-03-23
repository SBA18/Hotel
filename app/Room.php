<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Room extends Model
{
    protected $fillable = [
        'uuid', 'number', 'type', 'location', 'status',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'send'
    ];

    public function acount()
    {
        return $this->belongsTo(Acount::class);
        
    }
}

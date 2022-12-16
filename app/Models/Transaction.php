<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'send',
        'acountEnviar_id',
        'acountRecibir_id',
    ];

    public function acount()
    {
        return $this->belongsTo(Acount::class);
        
    }
}

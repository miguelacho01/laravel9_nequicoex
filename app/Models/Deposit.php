<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable=[
        'deposits',
        'acount_id'
    ];

    public function acount()
    {
        return $this->belongsTo(Acount::class);
        
    }

}

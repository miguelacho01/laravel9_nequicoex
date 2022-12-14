<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acount extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'password'
    ];


public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function deposits()
    {
        return $this->hasOne(Deposit::class);
    }
}

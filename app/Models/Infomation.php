<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infomation extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'pay_email',
        'phone',
        'facebook',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

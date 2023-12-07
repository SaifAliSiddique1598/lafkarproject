<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'name',
        'numbers',
        'item_code',
        'booking_price',
        'address',
        'special_note',
        'status',
    ];
     public function user(){
        return $this->belongsTo(User::class);
    }
}

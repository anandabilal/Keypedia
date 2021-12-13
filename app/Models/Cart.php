<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $primaryKey = 'cart_id';
    protected $fillable = [
        'user_id',
        'keyboard_id',
        'quantity'
    ];
    public $timestamps = false;

    // 'Cart' belongs to 'User'
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // 'Cart' belongs to 'Keyboard'
    public function keyboards()
    {
        return $this->belongsTo(Keyboard::class);
    }
}

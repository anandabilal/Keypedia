<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    use HasFactory;

    protected $table = 'keyboards';
    protected $primaryKey = 'keyboard_id';
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'description',
        'image'
    ];
    public $timestamps = false;

    // 'Keyboard' belongs to 'Category'
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    // One 'Keyboard' to many 'TransactionDetail'
    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    // One 'Keyboard' to many 'Cart'
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';
    protected $primaryKey = 'transaction_detail_id';
    protected $fillable = [
        'transaction_id',
        'keyboard_id',
        'quantity'
    ];
    public $timestamps = false;

    // 'TransactionDetail' belongs to 'Keyboard'
    public function keyboards()
    {
        return $this->belongsTo(Keyboard::class);
    }

    // 'TransactionDetail' belongs to 'Transaction'
    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }
}

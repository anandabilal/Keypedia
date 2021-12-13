<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'name',
        'image'
    ];
    public $timestamps = false;

    // One 'Category' to many 'Keyboard'
    public function keyboards()
    {
        return $this->hasMany(Keyboard::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function transdetail()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'stock'
    ];
}

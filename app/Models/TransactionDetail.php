<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function trans()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}

<?php

namespace App\Models;

use App\Models\Product;
use App\Models\HeaderTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $primaryKey = 'TransactionDetailID';
    protected $guarded = ['TransactionDetailID'];

    public function headerTransaction()
    {
        return $this->belongsTo(HeaderTransaction::class, 'HeaderID', 'HeaderTransactionID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID', 'ProductID');
    }
}

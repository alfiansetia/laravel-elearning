<?php

namespace App\Models;

use App\Models\User;
use App\Models\TransactionDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeaderTransaction extends Model
{
    use HasFactory;
    protected $primaryKey = 'HeaderTransactionID';
    protected $guarded = ['HeaderTransactionID'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, 'HeaderTransactionID');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $primaryKey = 'ProductID';
    protected $guarded = ['ProductID'];

    public function scopeFilter($query, array $filters) //untuk search
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' . $search . '%')
            //kalau mau berdasarkan isi deskripsi product juga, uncomment yg bawah
            ->orWhere('detail', 'like', '%' . $search . '%');
        });
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','CategoryID'); //ini masih bingung
    }

    public function isInCart($userId)
    {
        // Check if the product is in the user's cart
        if (!$userId) {
            return false; // If the user is not logged in, the product is not in the cart
        }

        return Cart::where('ProductID', $this->ProductID)
            ->where('UserID', $userId)
            ->exists();
    }

}
//     public function user()
//     {
//         return $this->belongsTo('App\Models\User', 'UserID');
//     }

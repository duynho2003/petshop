<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Order extends Model
{
    use HasFactory, SoftDeletes,Searchable;

    protected  $guarded = [];


    public function products() {
        return $this->belongsToMany(Product::class, 'order_products', 'order_id', 'product_id')
                    ->withTimestamps();
    }

    public function orderProduct() {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }


    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ];
    }
}

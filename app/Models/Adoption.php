<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
class Adoption extends Model
{
    use HasFactory, SoftDeletes,Searchable;
    protected  $guarded = [];


    public function products() {
        return $this->belongsToMany(Product::class, 'adoption_historys', 'adoption_id', 'product_id')
                    ->withTimestamps();
    }

    public function adoption() {
        return $this->hasMany(AdoptionHistory::class, 'adoption_id');
    }


    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'mail' => $this->mail,     
            'address' => $this->address,
            'created_at' => $this->created_at,
        ];
    }
}

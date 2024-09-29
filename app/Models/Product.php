<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Number;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'discount_price',
        'image'
    ];

    public function price(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  $value / 100,
            set: fn ($value) => $value * 100,
        );
    }

    protected function discount(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100,
        );
    }

    public function getPriceFormatAttribute()
    {
       $priceFormat =  Number::Currency($this->price,'EUR' , 'nl');

       return $priceFormat;
    }

    public function getDiscountFormatAttribute()
    {
       $discountFormat =  Number::Currency($this->discount,'EUR' , 'nl');

       return $discountFormat;
    }

    public function getProductStatusAttribute()
    {
        $productStatus = trans('shop.sold out');

        if ($this->stock <= 5){
            $productStatus = trans('shop.almost gone');
        }
        if ($this->stock > 5) {
            $productStatus = trans('shop.available');
        }

        return $productStatus;
    }

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(ProductType::class);
    }
}

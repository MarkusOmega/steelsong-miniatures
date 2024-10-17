<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Number;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Str;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

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

    protected function discount_price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100,
        );
    }

    public function getPriceFormatAttribute()
    {
        $priceFormat =  $this->price;
       // $priceFormat =  Number::Currency($this->price,'EUR' , 'nl');


        return $priceFormat;
    }

    public function getDiscountFormatAttribute()
    {
        $discountPriceCalc = $this->price - $this->discount_price;

        if($discountPriceCalc < 0) {
            $discountFormat =  null;
        }

        if($discountPriceCalc > 0) {
            //$discountFormat =  Number::Currency($discountPriceCalc,'EUR' , 'nl');
            $discountFormat =  $discountPriceCalc;
        }


        return $discountFormat;
    }

    public function getShortDescriptionAttribute()
    {
        $shortDescription =  STR::limit($this->description, 100, '...');

        return $shortDescription;
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

    public function types(): HasMany
    {
        return $this->hasMany(ProductType::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function Content(): HasMany
    {
        return $this->hasMany(Content::class);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('thumbnail')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }
}

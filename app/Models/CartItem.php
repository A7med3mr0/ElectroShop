<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'product_id', 'quantity'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getTotalPriceAttribute()
    {
        return $this->product ? ($this->product->price * $this->quantity) : 0;
    }

    public function incrementQuantity($amount = 1)
    {
        $this->quantity += $amount;
        $this->save();
    }

    public function decrementQuantity($amount = 1)
    {
        $this->quantity -= $amount;
        if ($this->quantity <= 0) {
            $this->delete();
        } else {
            $this->save();
        }
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        if ($this->quantity <= 0) {
            $this->delete();
        } else {
            $this->save();
        }
    }

    public function isAvailable()
    {
        return $this->product->stock >= $this->quantity;
    }

    public function getAvailabilityStatusAttribute()
    {
        return $this->isAvailable() ? 'Available' : 'Not Available';
    }

    public function getProductNameAttribute()
    {
        return $this->product->name;
    }

    public function getProductPriceAttribute()
    {
        return $this->product->price;
    }

    public function getProductImageAttribute()
    {
        return $this->product->primary_image;
    }

    public function getProductSpecsAttribute()
    {
        return $this->product->specs;
    }

    public function getProductSlugAttribute()
    {
        return $this->product->slug;
    }

    public function getProductCategoryAttribute()
    {
        return $this->product->category->name;
    }
}

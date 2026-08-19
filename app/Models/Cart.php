<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addItem($productId, $quantity = 1)
    {
        $item = $this->items()->where('product_id', $productId)->first();

        if ($item) {
            $item->quantity += $quantity;
            $item->save();
        } else {
            $this->items()->create([
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }
    }

    public function removeItem($productId)
    {
        $this->items()->where('product_id', $productId)->delete();
    }

    public function clear()
    {
        $this->items()->delete();
    }

    public function totalPrice()
    {
        $this->loadMissing('items.product');

    return $this->items->sum(function ($item) {
        return $item->product ? ($item->product->price * $item->quantity) : 0;
    });

    }

    public function totalItems()
    {
        return $this->items->sum('quantity');
    }

    public function hasItem($productId)
    {
        return $this->items()->where('product_id', $productId)->exists();
    }

    public function getItem($productId)
    {
        return $this->items()->where('product_id', $productId)->first();
    }

    public function updateItemQuantity($productId, $quantity)
    {
        if ($quantity <= 0) {
        return $this->removeItem($productId);
    }

    $item = $this->getItem($productId);
    if ($item) {
        $item->update(['quantity' => $quantity]);
    }
    }

    public function isEmpty()
    {
        return $this->items()->count() === 0;
    }

    public function getItemsWithProductDetails()
    {
        return $this->items()->with('product')->get();
    }

}

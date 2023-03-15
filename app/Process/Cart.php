<?php

namespace App\Process;

class Cart

{

    public $items = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function add($prod, $quantity = 1)
    {
        $item = [
            'id' => $prod->id,
            'name' => $prod->name,
            'price' => $prod->sale_price != 0 ? '$prod->sale_price' : '$prod->price',
            'image' => $prod->image,
            'quantity' => $quantity,
        ];
        $this->items[] = $item;
        dd($this->items);
    }
    public function update($prod, $quantity)
    {
        # code...
    }
    public function delete($prod)
    {
        # code...
    }
    public function clear()
    {
        # code...
    }
}
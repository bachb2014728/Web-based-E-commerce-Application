<?php
namespace App\Helper;
class Cart{
    public $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct(){
        $this->items = session("cart") ? session("cart") : [];
        $this->total_quantity = $this->getTotalQuantity();
        $this->total_price = $this->getTotalPrice();
    }
    //lay danh sach
    public function list(){
        return $this->items;
    }
    //thêm
    public function add($product, $quantity = 1): void
    {
        $item = [
            "productId"=> $product->id,
            'name'=> $product->name,
            'slug'=>$product->slug,
            'price'=> $product->sale>0 ? $product->sale : $product->price,
            'image'=>$product->image,
            'quantity'=> $quantity
        ];
        if(isset($this->items[$product->id])){
            $this->items[$product->id]['quantity'] += $quantity;
        }else{
            $this->items[$product->id] = $item;
        }
        session(['cart'=>$this->items]);
    }
    // Xóa 1 sản phẩm với số lượng
    public function remove($id): void
    {
        if(isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['cart'=>$this->items]);
    }


    // Cập nhật sản phẩm trong giỏ hàng
    public function update($productId, $quantity = 1): void
    {
        if(isset($this->items[$productId])){
            $this->items[$productId]['quantity'] = $quantity;
        }
        session(['cart'=>$this->items]);
    }
    //tang san pham
    public function updateUp($productId, $quantity = 1): void
    {
        if(isset($this->items[$productId])){
            $this->items[$productId]['quantity'] += $quantity;
        }
        session(['cart'=>$this->items]);
    }
    //giam so luong
    public function updateDown($productId, $quantity = 1): void
    {
        if(isset($this->items[$productId])){
            $this->items[$productId]['quantity'] -= $quantity;
            if($this->items[$productId]['quantity'] == 0){
                unset($this->items[$productId]);
            }
        }
        session(['cart'=>$this->items]);
    }


    // Xóa tất cả sản phẩm
    public function clear(): void
    {
        $this->items = [];
        session(['cart'=>$this->items]);
    }


    //tổng tiền
    public function getTotalPrice(): float|int
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }

    //tong hang
    public function getTotalQuantity(): mixed
    {
        $totalQuantity =0;
        foreach ($this->items as $item) {
            $totalQuantity += $item['quantity'];
        }
        return $totalQuantity;
    }

}


<?php

class ShoppingCart{
    protected $products;
    protected $amount;

    public function __construct(Product ...$products)
    {
        $this->products = $products;
    }

    public function addProduct(Product $newProduct, int $quantity = 1) : void{
        for ( $i = 0 ; $i < $quantity ; $i++){
            $this->products[] = $newProduct;
        }
    }

    public function removeProduct(Product $productToFind){
        $foundIndex = null;
        $removedElement = null;

        foreach ($this->products as $index => $product) {
            if ($product->name === $productToFind->name ){
                $foundIndex = $index;
                break;
            }
        }

        if (!is_null($foundIndex)){
            $removedElement = $this->products[$foundIndex];
            $this->products = array_splice($this->products, $foundIndex, 1);
        }

        return $removedElement;
    }

    public function getProducts(){
        return $this->products;
    }

    public function cleanCart(): void{
        $this->products = [];
        $this->amount= 0.0;
    }

    public function getTotalPrice() : float{
        return $this->amount;
    }

}
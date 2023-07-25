<?php
include_once __DIR__.'/../model/product.php';
class ProductController extends Product{

    public function getProducts(){
        return $this->getProductsList();
    }
}
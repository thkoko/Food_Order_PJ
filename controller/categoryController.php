<?php
include_once __DIR__.'/../model/category.php';
class CategoryController extends Category{

    public function getCategories(){
        return $this->getCategoriesList();
    }
}
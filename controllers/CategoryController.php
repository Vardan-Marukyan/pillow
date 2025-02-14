<?php

class CategoryController
{
    public function actionIndex($id)
    {
        $categorys = Category::getCategory();
        $selectedCategory = Category::getCategoryByID($id);
        $types = Type::getType();
        $products = Product::getProductsByCategoryID($id);
        require_once ROOT."/views/category/index.php";
        return true;
    }
}
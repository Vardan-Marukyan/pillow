<?php

class TypeController
{
    public function actionIndex($id)
    {
        $categorys = Category::getCategory();
        $selectedType = Type::getTypeByID($id);
        $types = Type::getType();
        $products = Product::getProductsByTypeID($id);
        require_once ROOT."/views/type/index.php";
        return true;
    }
}
<?php

class ProductController
{
    public function actionView($id)
    {
        $product = Product::getProductByID($id);
        require_once ROOT."/views/product/view.php";
        return true;
    }

    public function actionAjaxAdd()
    {
        var_dump(['asdasd' => 'asdasdasd']);
        return true;
    }
}
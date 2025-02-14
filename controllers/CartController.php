<?php

class CartController
{
    public function actionIndex()
    {
        require_once ROOT."/views/cart/index.php";
        return true;
    }
}
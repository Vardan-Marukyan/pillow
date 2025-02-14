<?php

class CatalogController
{
    public function actionIndex()
    {

        $categorys = Category::getCategory();
        $types = Type::getType();
        $products = Product::getProducts();

        require_once ROOT."/views/catalog/index.php";
        return true;
    }

    public function actionMore()
    {
            $response = ["message" => "Запрос выполнен!", "data" => 'asdasdasdasd'];

            echo json_encode($response);
            exit;
    }

    public function actionSearch()
    {
        var_dump(['asdasdasd'=>'asdasd']);
    }
}
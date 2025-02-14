<?php

class BlogController
{
    public function actionIndex()
    {
        $blogCategorys = Blog::getCategory();
        require_once ROOT."/views/blog/index.php";
        return true;
    }
}
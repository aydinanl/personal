<?php

class Article extends Controller
{
    public function index($articleID="",$articleName="")
    {
        //Connect to Model
        $system = $this->model('System');
        $articles = $this->model('Articles');

        //Load data due to Model
        $getArticle    = $articles->getArticleById($articleID);

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "article/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}
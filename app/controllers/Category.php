<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Category extends Controller
{
    public function index($catID="",$catName="")
    {
        if(empty($catID)){
            //Category ID yoksa Ana sayfaya yönlendir.
            header('location: '.URL);
        }
        //Connect to Model
        $system = $this->model('System');
        $categories = $this->model('Categories');
        $articles = $this->model('Articles');

        //Load data due to Model
        $getCategories = $categories->getCat();
        $getArticles    = $articles->getAllArticlesByCatID($catID);

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "category/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}
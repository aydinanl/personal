<?php

class Blog extends Controller
{
    public function index()
    {
        /*
         * Methoda model kullanılması için gerekenler:
        $user = $this->model('user');
        $user->name = $name;
        echo $name;

        //Seflink yap.
        $sef = "Swift 3 - PopUp Nasıl Yapılır ? - XCode 8 (Blur Effect)";
        $sef_convert = $system->seflink($sef);
        echo $sef_convert;
        */

        //Connect to Model
        $system = $this->model('System');
        $categories = $this->model('Categories');
        $articles = $this->model('Articles');

        //Load data due to Model
        $getCategories  = $categories->getCat();
        $getArticles    = $articles->getAllArticles();

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "blog/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
    public function Category($catID="",$catName){

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "blog/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}
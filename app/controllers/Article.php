<?php

class Article extends Controller
{
    public function index($articleID="",$articleName="")
    {
        /*
         * Methoda model kullanılması için gerekenler:
        $user = $this->model('user');
        $user->name = $name;
        echo $name;
        */
        $system = $this->model('System');


        /*
        $sef = "Swift 3 - PopUp Nasıl Yapılır ? - XCode 8 (Blur Effect)";
        $sef_convert = $system->seflink($sef);
        echo $sef_convert;
        */
        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "article/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}
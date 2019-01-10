<?php

namespace Henri\controller;

class HomeController
{
    public function index()
    {
        require DIR . 'view/_templates/header.php';
        require DIR . 'view/home/index.php';
        require DIR . 'view/_templates/footer.php';
    }
}

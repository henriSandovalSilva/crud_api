<?php

namespace Henri\controller;

class ErrorController
{
    public function index()
    {
        require DIR . 'view/_templates/header.php';
        require DIR . 'view/error/index.php';
        require DIR . 'view/_templates/footer.php';
    }
}

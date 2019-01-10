<?php

namespace Henri\core;

class Application
{
    private $controller;
    private $action;
    private $params;

    public function __construct()
    {
        //separa URL em controller/action/param/param/param/...
        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);

            $this->controller = isset($url[0]) ? $url[0] : null;
            $this->action = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);

            $this->params = array_values($url);
        }

        //se tiver controller, instacia, se não home fica como padrão
        if ($this->controller) {
            $this->controller = "Henri\\controller\\" . ucfirst($this->controller) . "Controller";

            //chama o controller se existir, se não chama página de erro
            if (class_exists($this->controller)) {
                $this->controller = new $this->controller();

                //se o método existe, chama com parametro ou sem
                if (method_exists($this->controller, $this->action)) {
                    if (empty($this->params)) {
                        $this->controller->{$this->action}();
                    } else {
                        call_user_func_array(array($this->controller, $this->action), $this->params);
                    }
                } else {
                    //se o método não existe, verifica se o usuário definiu o método, se não definiu, chama a index
                    if (strlen($this->action) == 0) {
                        $this->controller->index();
                    } else {
                        $error = "\\Henri\\controller\\ErrorController";
                        $page = new $error();
                        $page->index();
                    }
                }
            } else {
                $error = "\\Henri\\controller\\ErrorController";
                $page = new $error();
                $page->index();
            }
        } else {
            $this->controller = "Henri\\controller\\HomeController";
            $this->controller = new $this->controller();
            $this->controller->index();
        }
    }
}
<?php

class Controller
    {
        private $router;

        public function __construct($router)
        {
            $this->router = $router;
        }

        public function title($title)
        {
            if (array_key_exists($title, ROUTE_NAMES)) {
                $titre = ROUTE_NAMES[$title];
            } else {
                $titre = "404 not found";
            }
            $this->render($titre);
        }

        public function render($titre)
        {
            $pageLink = CSS . "/" . $this->router->getPage() . ".css";
            if (file_exists(PAGES . $this->router->getPage() . ".php")) {
                $template = PAGES . $this->router->getPage() . ".php";
            } else {
                $template = PAGES . "page404.php";
            }
            include TEMPLATE . '/base.php';
        }
    }

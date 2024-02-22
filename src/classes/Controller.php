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
            $cssFiles = [];
            $jsFiles = [];
    
            // Chargement des dépendances si elles existent
            $dependencies = include_once './src/config/dependencies.php';
            $page = $this->router->getPage();
            if (isset($dependencies[$page])) {
                $cssFiles = $dependencies[$page]['css'] ?? [];
                $jsFiles = $dependencies[$page]['js'] ?? [];
            }
    
            if (file_exists(PAGES . $this->router->getPage() . ".php")) {
                $template = PAGES . $this->router->getPage() . ".php";
            } else {
                $pageLink = CSS . "/404.css";
                $template = PAGES . "page404.php";
            }
            include TEMPLATE . '/base.php';
        }
    }

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
            $page = $this->router->getPage();
            $pageLink = CSS . "/" . $page . ".css";
            $cssFiles = [];
            $jsFiles = [];
    
            // Chargement des dépendances si elles existent
            $dependencies = include_once './src/config/dependencies.php';
            
            if (isset($dependencies[$page])) {
                $cssFiles = $dependencies[$page]['css'] ?? [];
                $jsFiles = $dependencies[$page]['js'] ?? [];
            }
    
            if (file_exists(PAGES . "/" . $page . ".php")) {
                $template = PAGES . "/" . $page . ".php";
            } else {
                $pageLink = CSS . "/404.css";
                $template = PAGES . "/page404.php";
            }
            include TEMPLATE . '/base.php';
            $titre = $titre;
        }
    }

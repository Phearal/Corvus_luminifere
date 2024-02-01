<?php
class Router
{
    private $page;

    public function __construct()
    {
        $this->page = isset($_GET["page"]) ? $_GET["page"] : "accueil";
    }

    public function getPage(): string
    {
        return $this->page;
    }
}

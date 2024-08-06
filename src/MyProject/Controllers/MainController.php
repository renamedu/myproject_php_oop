<?php

namespace MyProject\Controllers;
use MyProject\View\View;

class MainController
{
    private $view;
    private $title = "MoN 6lor";

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }
    public function main()
    {
        $articles = [
            ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        ];
        $this->view->renderHtml('main/main.php', ['title' => $title, 'articles' => $articles]);
    }
    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['title' => $title, 'name' => $name]);
    }
}
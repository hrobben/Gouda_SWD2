<?php

class Render
{
    // variabelen declaratie
    public $filename = 'web.html';
    private $name = 'Hrobben';
    public $title = 'dit is uit de class als object';

    // method declaration
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function index()
    {
        //echo file_get_contents($this->filename);
        echo "
            <!DOCTYPE html>
            <html lang=\"\">
              <head>
                <meta charset=\"utf-8\">
                <title>$this->title</title>
              </head>
              <body>
                <h1>Welkom op mijn site, groeten van Henry aan $this->name</h1>
                <nav></nav>
                <header></header>
                <main></main>
                <footer></footer>
              </body>
            </html>
        ";
    }
}

$site = new Render();
echo $site->getName();
$site->setName($_GET['name']);
$site->title = 'les 2 php';

$site->index();
?>
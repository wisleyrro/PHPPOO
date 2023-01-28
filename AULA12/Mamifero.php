<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;

    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>som de mamifero</p>";
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

}
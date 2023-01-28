<?php
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;

    public function alimentar() {
        echo "<p>Comendo Frutas</p>";
    }

    public function emitirSom() {
        echo "<p>som de ave</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }      
    public function fazerNinho(){
        echo "<p>Construiu um ninho</p>";
    } 
}
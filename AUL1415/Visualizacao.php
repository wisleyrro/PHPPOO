<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViewes($this->filme->getViewes()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
    }

    public function avaliar() {
        $this->filme->setAvalicao(5);
    }

    public function avaliarNota($nota){
        $media = ($this->avalicacao + $avaliacao)/$this->viewes;
        $this->avaliacao = $media;
    }

    public function avaliarPorc($porc) {
        $nova = 0;
        if($porc <= 20){
            $nova = 3;
        }elseif ($porc <= 50){
            $nova = 5;
        }elseif ($porc <= 90){
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvalicao($nova);
    }

    public function getEspectador () {
        return $this->espectador;
    }

    public function setEspectador($espectador){
        $this->espectador =  $espectador;
    }

    public function getFilme () {
        return $this->filme;
    }

    public function setFilme($filme){
        $this->filme =  $filme;
    }

}
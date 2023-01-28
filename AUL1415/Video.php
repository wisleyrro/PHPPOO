<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $viewes;
    private $curtidas;
    private $reproduzindo;

    public function __construct ($titulo) {
        $this->titulo=$titulo;
        $this->avaliacao=1;
        $this->viewes=0;
        $this->curtidas=0;
        $this->reproduzindo=false;
    }

    public function getTitulo () {
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo =  $titulo;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function setAvalicao($avaliacao){
        $this->avaliacao = $avaliacao;
    }

    public function getViewes (){
        return $this->viewes;
    }

    public function setViewes ($viewes) {
        $this->viewes = $viewes;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }

    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }

    public function getReproduzindo(){
        return $this-> reproduzindo;
    }

    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }
    public function like(){
        $this->curtidas ++;
    }
    
    public function pause(){
        $this->reproduzindo = false;
    }

    public function play(){
        $this->reproduzindo = true;

    }


}
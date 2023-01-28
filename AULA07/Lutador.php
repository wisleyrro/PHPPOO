<?php

class Lutador {
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //metodos especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    public function getNome() {
        return $this->nome;
    }

    private function setNome($nome) {
        $this->nome = $nome;
    }

    private function getNacionalidade() {
        return $this->nacionalidade;
    }

    private function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    private function getIdade() {
        return $this->idade;
    }

    private function setIdade($idade) {
        $this->idade = $idade;
    }
    private function getAltura() {
        return $this->altura;
    }

    private function setAltura($altura) {
        $this->altura = $altura;
    }
    private function getPeso() {
        return $this->peso;
    }

    private function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function getCategoria() {
        return $this->categoria;
    }

    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Invalido";
        }elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        }elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        }else {
            $this->categoria = "Invalido";
        }
    }
    private function getVitorias() {
        return $this->vitorias;
    }

    private function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    private function getDerrotas() {
        return $this->derrotas;
    }

    private function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    private function getEmpates() {
        return $this->empates;
    }

    private function setEmpates($empates) {
        $this->empates = $empates;
    }
    

    //metodos
    public function apresentar(){
        echo "<p>------------------------------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo " tem " .  $this->getIdade() . " anos e pesa " .  $this->getPeso() . "KG";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.";
    }
    public function status(){
        echo "<p>------------------------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpates();

    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }



}
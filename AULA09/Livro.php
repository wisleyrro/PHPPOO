<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        echo "<p>-----DETALHAMENTO DE LIVRO-----</P>";
        echo "<br> Titulo: " . $this->titulo;
        echo "<br> Autor: " . $this->autor;
        echo "<br> Total Paginas: " . $this->totPaginas . " atual: " .  $this->pagAtual;
        echo "<br> Atual Leitor: " . $this->leitor->getNome();
    }
    //metodo construtor
    public function __construct($ti, $au, $tt ,$lt){
        $this->titulo = $ti;
        $this->autor = $au;
        $this->totPaginas = $tt;
        $this->aberto = false;
        $this->pagAtual = 0 ;
        $this->leitor = $lt;
    }
    public function getTotPaginas() {
        return $this->totPaginas;
    }

    private function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    private function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getAutor() {
        return $this->autor;
    }

    private function setAutor($autor) {
        $this->autor = $autor;
    }
    
    public function getPagAtual() {
        return $this->pagAtual;
    }

    private function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }

    private function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }

    private function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    //metodos da interface
    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        $this->pagAtual++;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        }else {
            $this->pagAtual = $p;
        }
    }
    public function voltarPag(){
        $this->pagAtual--;
    }
}
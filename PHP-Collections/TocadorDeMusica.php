<?php

class TocadorDeMusica {

    private $musicas;
    private $historico;

    public function __construct() {
        $this->musicas = new SplDoublyLinkedList();
        $this->historico = new SplStack();
    }

    public function adicionarMusicas(SplFixedArray $musicas) {
        for($musicas->rewind(); $musicas->valid(); $musicas->next()) {
            $this->musicas->push($musicas->current());
        }

        $this->musicas->rewind();
    }

    public function tocarMusica() {

        if($this->musicas->count()===0){
            echo "Erro, nenhuma musica no tocador";
        }else {
            echo "Tocando musica: ".$this->musicas->current()."<br>";
            $this->historico->push($this->musicas->current());
        }
    }

    public function adicionarMusica($musica) {
        $this->musicas->push($musica);
    }

    public function avancarMusica() {
        $this->musicas->next();
        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    public function voltarMusica() {
        $this->musicas->prev();
        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    public function tocarTodas() {
        for($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()) {
            echo "Musica: ". $this->musicas->current()."<br>";
        }
    }

    public function exibirQuantidadeDeMusicas() {
        echo "Existem ". $this->musicas->count(). " musicas no tocador";
    }

    public function adicionarMusicaNoComeco($musica) {
        $this->musicas->unshift($musica);
    }

    public function removerMusicaDoComeco() {
        $this->musicas->shift();
    }

    public function removerMusicaDoFinal() {
        $this->musicas->pop();
    }

    public function tocarUltimaMusicaTocada() {
        echo "Tocando do historico: ". $this->historico->pop(). "<br>";
    }
}
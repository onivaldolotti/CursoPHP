<?php

class TocadorDeMusica {

    private $musicas;
    private $historico;

    public function __construct() {
        $this->musicas = new SplDoublyLinkedList();
        $this->historico = new SplStack();
        $this->filaDeDownloads = new SplQueue();
        $this->musicas->rewind();
        $this->ranking = new Ranking();
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
            $this->musicas->current()->tocar();
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

    public function baixarMusicas() {

        if($this->musicas->count() >0){
            for($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()) {
                $this->filaDeDownloads->push($this->musicas->current());
            }

            for($this->filaDeDownloads->rewind(); $this->filaDeDownloads->valid(); $this->filaDeDownloads->next()) {
                echo "Baixando: ".$this->filaDeDownloads->current()."<br>";
            }
        }else {
            echo "Nenhuma musica para baixar";
        }
    }

    public function exibeRanking() {
        foreach($this->musicas as $musica) {
            $this->ranking->insert($musica);
        }

        foreach ($this->ranking as $musica) {
            echo $musica->getNome() . " - " . $musica->getVezesTocada(). "<br>";
        }
    }


}
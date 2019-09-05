<?php

class Ranking extends SplHeap {

    public function compare(Musica $musica1, Musica $musica2) {

        if($musica1->getVezesTocada() === $musica2->getVezesTocada()) {
            return 0;
        }

        if($musica1->getVezesTocada() < $musica2->getVezesTocada()) {
            return -1;
        } else {
            return 1;
        }
    }
}
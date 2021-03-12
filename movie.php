<?php

class Movie{
    public $titolo;
    public $genere;
    public $anno;
    public $valutazione;
    public $girato_in;
    public $costo_produzione;


    public function __construct($_titolo, $_genere){

        $this->titolo = $_titolo;
        $this->genere = $_genere;

      }
    }
    
}
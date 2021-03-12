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

    $film_1 = new Movie('Creed II') ;
    $film_1 ->genere ="Azione/Sportivo";
    $film_1 ->durata ="110min";
    $film_1 ->anno ='2017';
    $film_1 ->valutazione = 8;
    $film_1 ->girato_in ='Serbia';
    $film_1 ->costo_produzione = '25M$';


    $film_2 = new Movie('Il Re Leone') ;
    $film_2 ->genere ="Animazione";
    $film_2 ->durata ="105min";
    $film_2 ->anno ='1994';
    $film_2 ->valutazione = 7;
    $film_2 ->girato_in ='Africa';
    $film_2 ->costo_produzione = '500K$'


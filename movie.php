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

        $film_1 = new Movie('Creed II', 2017) ;
        $film_1 ->genere ="Azione/Sportivo";
        $film_1 ->durata ="110min";
        $film_1 ->anno ='2017';
        $film_1 ->valutazione = 8;
        $film_1 ->girato_in ='Serbia';
        $film_1 ->costo_produzione = '25M$';
       


        $film_2 = new Movie('Il Re Leone', 1994) ;
        $film_2 ->genere ="Animazione";
        $film_2 ->durata ="105min";
        $film_2 ->anno ='1994';
        $film_2 ->valutazione = 7;
        $film_2 ->girato_in ='Africa';
        $film_2 ->costo_produzione = '500K$';

        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
        
    <h2><?php echo $film_1->titolo .' - ' .$film_1->anno ;?></h2>
    <ul>
        <li><?php echo 'Genere: ' . $film_1->genere;?></li>
        <li><?php echo 'Durata: ' . $film_1->durata;?></li>
        <li><?php echo 'Valtuazione: ' . $film_1->valutazione .'&#9733;' ;?></li>
        <li><?php echo 'Girato in: ' . $film_1->girato_in;?></li>
        <li><?php echo 'Costo Produzione: ' . $film_1->costo_produzione;?></li>


    </ul>
    <h2><?php echo $film_2->titolo .' - ' .$film_2->anno ;?></h2>
    <ul>
        <li><?php echo 'Genere: ' . $film_2->genere;?></li>
        <li><?php echo 'Durata: ' . $film_2->durata;?></li>
        <li><?php echo 'Valtuazione: ' . $film_2->valutazione .'&#9733;' ;?></li>
        <li><?php echo 'Girato in: ' . $film_2->girato_in;?></li>
        <li><?php echo 'Costo Produzione: ' . $film_2->costo_produzione;?></li>


    </ul>
    



    
    
</body>
</html>


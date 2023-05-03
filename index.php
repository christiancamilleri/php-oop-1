<!DOCTYPE html>
<html lang="en">
<?php

// creo classe MOVIE 
class Movie
{
    // dichiaro variabili d istanza
    public $titolo;
    public $genere;
    public $descrizione;
    public $trailer = "www.youtube.com";
    public $limiteEta = 'Consigliato a tutti';

    // inizializzo costruttore
    function __construct(string $_titolo, string $_genere, string $_descrizione)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->descrizione = $_descrizione;
        $this->getLimiteEta($_genere);


    }

    public function getLimiteEta($genere)
    {
        if ($genere == 'horror') {
            $this->limiteEta = 'vietato ai minori di 16 anni';
        }
    }

}
;

// creo primo oggetto movie
$fast_and_furios = new Movie("Fast and Furios", "corsa", "ddskfykjfbuykfbkewfvbwefberwb");
$profondo_rosso = new Movie('Profondo rosso', 'horror', 'fdsbddbvdbdsbffiusdbiuo');

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php var_dump($fast_and_furios);
        var_dump($profondo_rosso) ?>
    </div>
</body>

</html>
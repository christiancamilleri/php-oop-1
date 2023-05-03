<?php

class Movie
{
    // dichiaro variabili d istanza
    public $titolo;
    public $genere = [];
    public $descrizione;
    public $trailer = "https://www.youtube.com/";
    public $limiteEta = 'Si';

    // inizializzo costruttore
    function __construct(string $_titolo, array $_genere, string $_descrizione)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->descrizione = $_descrizione;
        $this->getLimiteEta($_genere);


    }

    public function getLimiteEta($genere)
    {
        if (in_array('horror', $genere)) {
            $this->limiteEta = 'No';
        }
    }

}
;
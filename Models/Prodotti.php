<?php

class Prodotto
{
    public $categoriaAnimale;
    public $tipologiaProdotto;
    public $titolo;
    public $prezzo;

    function __construct($_categoriaAnimale, $_tipologiaProdotto, $_titolo, $_prezzo)
    {
        $this->categoriaAnimale = $_categoriaAnimale;
        $this->tipologiaProdotto = $_tipologiaProdotto;
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
    }
}
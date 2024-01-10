<?php
require_once __DIR__ . '/Sconto.php';
class Prodotto
{
    use Sconto;
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

    public function verifica_fondi($portafoglio) {
        if ($this->prezzo <= $portafoglio){
            echo 'Hai completato il tuo acquisto. Saldo disponibile: ' . $portafoglio -= $this->prezzo;
        } else {
            throw new Exception();
        }
    }
}

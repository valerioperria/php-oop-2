<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Sconto.php';
class Igene extends Prodotto
{
    use Sconto;
    private $zona_corpo;

    function __construct($_categoriaAnimale, $_titolo, $_prezzo, $_zona_corpo)
    {
        parent::__construct($_categoriaAnimale, 'Igene', $_titolo, $_prezzo);
        $this->zona_corpo = $_zona_corpo;
    }

    public function get_zona_corpo()
    {
        return $this->zona_corpo;
    }

    public function print_info()
    {
        return $this->titolo . ', ' . 'Prodotto per: ' . $this->categoriaAnimale . ', Tipologia prodotto: ' . $this->tipologiaProdotto . ', ' . 'Prezzo: ' . $this->prezzo . '€, ' . 'Zona del corpo indicata: ' . $this->zona_corpo;
    }
}

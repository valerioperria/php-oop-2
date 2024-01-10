<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Sconto.php';
class Cibo extends Prodotto
{
    use Sconto;
    private $origine;

    function __construct($_categoriaAnimale, $_titolo, $_prezzo, $_origine)
    {
        parent::__construct($_categoriaAnimale, 'Cibo', $_titolo, $_prezzo);
        $this->origine = $_origine;
    }

    public function get_origine()
    {
        return $this->origine;
    }

    public function print_info()
    {
        return $this->titolo . ', ' . 'Prodotto per: ' . $this->categoriaAnimale . ', Tipologia prodotto: ' . $this->tipologiaProdotto . ', ' . 'Prezzo: ' . $this->prezzo . '€, ' . 'Origine: ' . $this->origine;
    }
}

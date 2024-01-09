<?php
require_once __DIR__ . '/Prodotti.php';
class Cuccia extends Prodotto
{
    private $materiale;

    function __construct($_categoriaAnimale, $_titolo, $_prezzo, $_materiale)
    {
        parent::__construct($_categoriaAnimale, 'Cuccia', $_titolo, $_prezzo);
        $this->materiale = $_materiale;
    }

    public function get_materiale()
    {
        return $this->materiale;
    }

    public function print_info()
    {
        return $this->titolo . ', ' . 'Prodotto per: ' . $this->categoriaAnimale . ', Tipologia prodotto: ' . $this->tipologiaProdotto . ', ' . 'Prezzo: ' . $this->prezzo . '€, ' . 'Materiale: ' . $this->materiale;
    }
}

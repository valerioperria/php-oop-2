<?php


trait Sconto
{

    public function calcola_sconto()
    {
        if ($this->categoriaAnimale == 'Cani') {
            return $this->prezzo /= 4;
        } else if ($this->categoriaAnimale == 'Gatti') {
            return $this->prezzo /= 2;
        } else {
            return $this->prezzo;
        }
    }
}

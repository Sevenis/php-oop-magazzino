<?php
require_once '../traits/Autorizzazione.php'
class Phone{
    public $modelloItem;
    public $marcaItem;
    public $disponibilitaItem;
    public $prezzoAcquisto;
    public $prezzoVenditaNetto;

    public function __construct($_autorizzazione, $_modelloItem, $_marcaItem, $_prezzoVenditaNetto){
        $this->modelloItem = $_modelloItem;
        $this->marcaItem = $_marcaItem;
        $this->prezzoVenditaNetto = $_prezzoVenditaNetto;
    }

    // GET & SET //
    public function getModelloItem($_modelloItem){
        if(empty($this->modelloItem)){
            die('Modello non presente!');
        }
        return $this->modelloItem;
    }

    public function setModelloItem($_modelloItem){
        $this->modelloItem = $_modelloItem;
    }

    public function getMarcaItem($_marcaItem){
        if(empty($this->marcaItem)){
            die('Marca non presente!');
        }
        return $this->marcaItem;
    }

    public function setMarcaItem($_marcaItem){
        $this->marcaItem = $_marcaItem;
    }

    public function getPrezzoAcquisto($_prezzoAcquisto){
        if(empty($this->prezzoAcquisto)){
            die('Prezzo di acquisto non disponibile!');
        }
        return $this->prezzoAcquisto;
    }

    public function setPrezzoAcquisto($_prezzoAcquisto){
        $this->prezzoAcquisto = $_prezzoAcquisto;
    }

    public function getPrezzoVendita($_prezzoVenditaNetto){
        if(emtpy($this->prezzoVenditaNetto)){
            die('Prezzo di acquisto non disponibile!');
        }
        return $this->prezzoVenditaNetto;
    }

    public function setPrezzoVendita($_prezzoVenditaNetto){
        $this->prezzoVendita = $_prezzoVenditaNetto;
    }
    // FINE GET & SET //

    public function calcoloPrezzoVenditaFinale ($_prezzoVenditaNetto){
        if(empty($this->prezzoVenditaNetto)){
            die('non hai inserito il prezzo!');
        }
        return $this->prezzoVenditaNetto * 0.22;
    }
}

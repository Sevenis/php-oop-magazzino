<?php
class Phone{
    public $modelloItem;
    public $marcaItem;
    public $disponibilitaItem;
    public $prezzoAcquisto;
    public $prezzoVendita;

    public function __construct($_modelloItem){
        $this->modelloItem = $_modelloItem;
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

    public function getPrezzoVendita($_prezzoVendita){
        if(emtpy($this->prezzoVendita)){
            die('Prezzo di acquisto non disponibile!');
        }
        return $this->prezzoVendita;
    }

    public function setPrezzoVendita($_prezzoVendita){
        $this->prezzoVendita = $_prezzoVendita;
    }
    // FINE GET & SET //

    public function calcoloPrezzoVendita ($_prezzoVendita){
        if(empty($this->prezzoVendita)){
            die('non hai inserito il prezzo!');
        }
        return $this->prezzoVendita * 0.22;
    }
}

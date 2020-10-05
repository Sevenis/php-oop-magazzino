<?php
require_once 'Phone.php';

class Iphone extends Phone {
    private $iOsVersion;

    public function __construct ($_modelloItem, $_marcaItem, $_prezzoVenditaNetto, $_iOsVersion){
        parent::__construct($_modelloItem, $_marcaItem, $_prezzoVenditaNetto);
        $this->iOsVersion = $_iOsVersion;
    }

    public function getVersion(){
        if(empty($this->iOsVersion)){
            die('Non è presente la versione del sistema!');
        } else {
            return $this->iOsVersion;
        }
    }

    public function setVersion($_iOsVersion){
        $this->iOsVersion = $_iOsVersion;
    }
}

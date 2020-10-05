<?php
require_once 'phone.php';

class Iphone extends phone {
    private $iOsVersion;

    public function __construct ($_modello, $_iOsVersion){
        parent::__construct($_modello);
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

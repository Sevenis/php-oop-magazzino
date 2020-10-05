<?php
trait Autorizzazione {
    public $autorizzato;

    public function getAutorizzazione($_stringa){
        if(!empty($_stringa)){
            $this->autorizzato = true;
        }
    }
}
 ?>

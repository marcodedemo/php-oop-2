
<?php

trait Durability {

    public $durabilityYears;


    // funzione che controlla se il valore assegnato alla durabilità dell'oggetto rientri nei parametri
    public function setDurability($years){

        if( $years <= 10 && $years >= 1){

            $this->durabilityYears = $years;

        }else{
            throw new Exception("Inserire un valore di durabilità compreso tra 1 e 10");
        }
    }

    // funzione che restituisce la durabilità
    public function getDurability(){

        return $this->durabilityYears . " years";
    }
    
}
<?php

class Siak extends Human{

    private $asalUniv, $emailEdu;

    public function __construct($asalUniv = "", $emailEdu = ""){
        $this->asalUniv = $asalUniv;
        $this->emailEdu = $emailEdu;
    }

    public function setEmailEdu($emailEdu){
        $this->emailEdu = $emailEdu;
    }
    public function getEmailEdu(){
        return $this->emailEdu;
    }

    public function setAsalUniv($asalUniv){
        $this->asalUniv = $asalUniv;
    }
    public function getAsalUniv(){
        return $this->asalUniv;
    }

    public function __destruct(){
        
    }
}
?>
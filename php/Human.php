<?php

class Human{
    private $nik, $nama, $jenisKelamin;

    public function __construct($nik = 0, $nama = "", $jenisKelamin = ""){
        $this->nik = $nik;
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
    }

    
    public function setNik($nik){
        $this->nik = $nik;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }
    
    public function setJenisKelamin($jenisKelamin){
        $this->jenisKelamin = $jenisKelamin;
    }


    public function getNik(){
        return $this->nik;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getJenisKelamin(){
        return $this->jenisKelamin;
    }

    public function __destruct(){
        
    }
}

?>
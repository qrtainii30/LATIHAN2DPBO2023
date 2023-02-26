<?php
class Mahasiswa extends Siak{
    private $nim, $prodi, $fakultas;

    public function __construct($nim = 0, $prodi = "", $fakultas = ""){
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }
    public function getNim(){
        return $this->nim;
    }

    public function setProdi($prodi){
        $this->prodi = $prodi;
    }
    public function getProdi(){
        return $this->prodi;
    }

    public function setFakultas($fakultas){
        $this->fakultas = $fakultas;
    }
    public function getFakultas(){
        return $this->fakultas;
    }

    public function __destruct(){

    }
}
?>
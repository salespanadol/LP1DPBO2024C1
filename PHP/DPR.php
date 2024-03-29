<?php
class DPR {
    private $id;
    private $nama;
    private $bidang;
    private $partai;
    private $foto;

    public function __construct($id, $nama, $bidang, $partai, $foto) {
        $this->id = $id;
        $this->nama = $nama;
        $this->bidang = $bidang;
        $this->partai = $partai;
        $this->foto = $foto;

    }

    public function get_id() {
        return $this->id;
    }

    public function get_nama() {
        return $this->nama;
    }

    public function get_bidang() {
        return $this->bidang;
    }

    public function get_partai() {
        return $this->partai;
    }

    public function set_nama($nama) {
        $this->nama = $nama;
    }

    public function set_bidang($bidang) {
        $this->bidang = $bidang;
    }

    public function set_partai($partai) {
        $this->partai = $partai;
    }

     public function set_foto($foto){
        $this->foto = $foto;
    }
    public function get_foto(){
        return $this->foto;
    }
}

?>
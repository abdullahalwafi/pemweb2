<?php 
class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function getLuas()
    {
        $hasil = $this->panjang * $this->lebar;
        return $hasil;
    }

    public function getKeliling()
    {
        $hasil = 2 * ($this->panjang * $this->lebar);
        return $hasil;
    }
}

?>
<?php 
require_once('Mahasiswa.php'); 
class IPK extends Mahasiswa 
{
    public $ipk;

    public function __construct($nim, $name, $programStudy, $tahunAngkatan, $ipk)
    {
        $this->ipk = $ipk;
        parent::__construct($nim, $name, $programStudy, $tahunAngkatan);
    }

    public function getInfo()
    {
        parent::getInfo();
        echo "IPK mahasiswa : ". $this->ipk . "<br>";
        echo "Predikat Mahasiswa : " . $this->predikat();
    }
    public function predikat()
    {
        if ($this->ipk < 2.0) {
            return "Cukup";
        } elseif ($this->ipk >= 2.0 and $this->ipk < 3.0) {
            return "Baik";
        } elseif ($this->ipk >= 3.0 and $this->ipk < 3.75) {
            return "Memuaskan";
        } elseif ($this->ipk >= 3.75) {
            return "Cum Laude";
        }else {
            return "error!";
        }
    }
}
$mahasiswa2 = new IPK("0110222103", "Abdullah AL Wafi", "Teknik Informatika", 2022, 3.8);
$mahasiswa2->getInfo();
?>
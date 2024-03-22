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
    }
}
$mahasiswa2 = new IPK("0110222103", "Abdullah AL Wafi", "Teknik Informatika", 2022, 3.8);
$mahasiswa2->getInfo();
?>
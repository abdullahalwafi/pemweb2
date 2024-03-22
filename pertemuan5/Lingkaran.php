<?php
class Lingkaran
{
    public $jariJari;
    const PHI = 3.14;

    public function __construct($jari)
    {
        $this->jariJari = $jari;
    }

    public function luas()
    {
        $luas = self::PHI * $this->jariJari * $this->jariJari;
        return $luas;
    }

    public function keliling()
    {
        $keliling = 2 * self::PHI * $this->jariJari;
        echo 'Keliling dari lingkaran dengan jari jari ' . $this->jariJari . " adalah $keliling";
    }
}

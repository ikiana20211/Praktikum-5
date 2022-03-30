<?php
// membuat class lingkaran 
class Lingkaran{
    // membuat proerty
    private  $jari;
    const PHI = 3.14;

    //  method
    function __construct ($r)
    {
        $this -> jari =$r;
    }
    // buat method untuk menghitung get luas
    function getluas(){
        return self::PHI * $this -> jari * $this -> jari;
    }
    // buat method get keliling untuk menghitung kwaliling lingkaran 
    function getkeliling(){
        return 2 * self::PHI * $this -> jari;
    }
}
?>
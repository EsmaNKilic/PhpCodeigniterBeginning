<?php
class Detay extends CI_Controller{

    public function index(){
        echo "Detay Controllerinin index metodu";
    }
    public function urun(){
        echo "Detay Controllerinin urun metodu";
    }
    public function getParams($param1, $param2){
        echo $param1."<br>";
        echo $param2;
        //echo $param1 + $param2;
    }
    public function getParameters(){//farklı yol
        $sayi1 = $this -> uri segment(1);
        echo $sayi1;
    }
}
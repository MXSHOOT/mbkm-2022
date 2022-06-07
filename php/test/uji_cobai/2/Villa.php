<?php
require_once 'Asset.php';
class Villa extends Asset{
    //member1 variabel
    private $total;
    //member2 konstruktor
    public function __construct($total)
    {
        parent::__construct($total);
        $this->total = $total;
    }
    //member3 method
    public function cetak(){
        parent::cetak();
        echo '<br/>NIDN :'.$this->nidn;
    }
}
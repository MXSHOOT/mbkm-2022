<?php
require_once 'Person.php';
class Total extends Person{
    //member1 variabel
    private $total;
    //member2 blank constructor
    public function __construct()
    {
    }
    //member3 method
    public function setTotal($total){
        $this->total = $total;
    }
    public function getTotal(){
        return $this->total;
    }

    //member3 method
    public function cetak(){
        parent::cetak();
        echo '<tr>';
        echo '<td>'.$this->total.'</td>';
        echo '</tr>';
    }
}
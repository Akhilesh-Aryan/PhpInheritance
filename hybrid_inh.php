<?php
class GrandFather{
    public $a;
    public $b;
    public function getValue($x, $y){
        $this->a = $x;
        $this->b = $y;
    }
}
class Father extends Father{
    public $c = 40;
    public $sum;
    public function add(){
        $this->c;
        $this->sum = $this->a + $this->b + $this->c;
    }
}
class Daughter extends Father{
    public $d = 10;
    public $mult;
    public function mult(){
        $this->d;
        $this-> mult = $this->a * $this->b * $this->c * $this->d;
    }
}
class Son extends Father{
    public $e = 20;
    public $div;
    public function div(){
        $this
    }
}
?>
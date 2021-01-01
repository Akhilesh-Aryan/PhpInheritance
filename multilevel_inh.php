<?php 
class Father{
    public $a;
    public $b;
    public function getValue($x, $y){
        $this->a = $x;
        $this->b = $y;
    }
}
class Son extends Father{
    public $c = 30;
    public $sum;
     public function add(){
       $this->sum = $this->a + $this->b + $this->c;
         return $this->sum;
    }
}
class GrandSon extends Son{
    public function display(){
        echo "value of A: $this->a <br>";
        echo "value of B: $this->b <br>";
        echo "value of C: $this->c <br>";
        echo "value of Sum: ".$this->add();
    }
}
$get = new GrandSon;
$get->getValue(10,20);
$get->display();
?>
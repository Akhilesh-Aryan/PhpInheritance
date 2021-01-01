<?php 
class MusicPlayer{
    public $name = "sony";
}
class Ipod extends MusicPlayer{
    public function getName(){
        echo $this->name;
    }
}
class Mp3 extends Ipod{
    public function SetName($name){
        $this->name = $name;
    }
}
$sony = new Mp3();

$sony->getName();
$sony->SetName("Apple");
$sony->getName();

?>
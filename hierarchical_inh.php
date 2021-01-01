<?php
class Person{
    public function walking(){
        echo "Walking & also <br>";
    }
 public function eating(){
        echo "eating";
    }
 public function talking(){
        echo "talking";
    }
}
class Cricketer extends Person{
    public function Play(){
       echo "he can play";
    }
}
class Dancer extends Person{
    public function dance(){
      echo "he can dance";
    }
}
class Singer extends Person{
    public function sing(){
        echo "he can sing a song";
    }
}
$sachin = new Cricketer();
$sachin->walking();
$sachin->Play();

?>
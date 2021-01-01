<?php
$animal = ["ox","cow","bull","dog", "cow","dog","cow","ox","deer"];
$result = array();
foreach($animal as $value){
    if(isset($result[$value])){
        $result[$value] +=1;
    }
    else{
        $result[$value]=1;
    }
}

//$result = print_r(array_count_values($animal)); thid variable done the task of avove code !


foreach($result as $key=>$value){
    if($value>1){
        echo "<h3> $key($value)";
    }
    else{
        echo "<h3> $key </h3>";
    }
}
?>

<?php 
    $a=array(10,20,5,18,27,29);
    sort($a);
    print_r($a);

    echo "<br>";
    echo "============================";
    echo "<br>";

    $person=array("mohit"=>20,"lalu"=>100,"kalu"=>80,"mayank"=>21);
    asort($person);
    print_r($person);
     echo "<br>";
    echo "============================";
    echo "<br>";

    echo count($person);
      echo "<br>";
    echo "============================";
    echo "<br>";

    $person2=array("name"=>"mahek","age"=>"20","weight"=>"80");
    extract($person2); 
     print_r($person2); 

      echo "<br>";
    echo "============================";
    echo "<br>";

    $info=array('coffee','brown','caffeline');
    list($drink,$color,$power)=$info;
    
     echo "<br>";
    echo "============================";
    echo "<br>";

    $stack= array("orange","banana");
    array_push($stack,"apple");
    print_r($stack);
     echo "<br>";
    echo "============================";
    echo "<br>";

    $stack= array("orange","banana","apple","melody");
    $fruit=array_pop($stack);
  
    print_r($stack);



    





?>
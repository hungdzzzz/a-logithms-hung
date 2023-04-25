<?php
 function find($arrArray,$txtTarget)
 {
  for($j=0;$j<count($arrArray);$j++){
    if($arrArray[$j][1]==$txtTarget){
      return $j;
    };
  }return -1;
 };
 $array =array(array('John','price=750'),
 array('Johns','price'),
 array('Johna','price'),);
            
             
             
 
 
 echo"<PRE>";
    print_r($array);
    echo"</PRE>";
        
              $txtFind="categoryID:3";
              echo "tim kiem" .$txtFind."<Br>";

              $x=Find($array,$txtFind);
              if($x>=0){
echo $array[$x][0]." " . $array[$x][1] . $array[$x][2]. "</Br>";   
echo $array[$x][0]." " . $array[$x][1] . $array[$x][2]. "</Br>";             }else{
                echo"notfound";
              };
 
 
 ?>;
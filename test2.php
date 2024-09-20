<?php
  //catch data
   $age = $_POST["age"];

   $name = $_POST["nm"];

   //condition
   if($age<18){
       echo $name," you are a child";
   }
   else{
       echo "you are not a child";
   }

?>
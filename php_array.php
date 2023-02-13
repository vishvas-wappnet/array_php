<?php
echo "------------------------PHP ARRAY FUNCTION--------------------" . "<br>";


$array_names = array(" Vishvas" , "Ronak" , "Isha" , "Arpit"); //creating  INDEX array of names  

echo "getting first element of array is: :" . $array_names[0]  . "<br>"; //retrivniig first element of  array 


echo "getting second element of array is: :" . $array_names[1]  . "<br>"; //retrivniig Second element of  array 
  


$age_array = array("vishvas" => 80 , "Ronak" =>  50, "isha" => 52 , "arpit" => 30 ); //creating associative array
 print_r (array_change_key_case($array_age , CASE_UPPER)) ; //tranfering  name key values into upper case 

?>
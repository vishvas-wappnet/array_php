<?php
echo "------------------------PHP ARRAY FUNCTION--------------------" . "<br>";


                    $names_array = array(" Vishvas" , "Ronak" , "Isha" , "Arpit"); //creating  INDEX array of names  

                    echo "getting first element of array is: :" . $names_array[0]  . "<br>"; //retrivniig first element of  array 


                    echo "getting second element of array is: :" . $names_array[1]  . "<br>"; //retrivniig Second element of  array 
                    

                    echo "------------------------ASSOCIATIVE ARRAY--------------------" . "<br>";


                     $age_array = array("vishvas"=>"80" , "Ronak"=>"50", "isha"=>"52" , "arpit"=>"30"); //creating associative array

                     echo "vishvas is " . $age_array["vishvas"] . " years old.". "<br>"; //printing single element 

                     echo "chunk function:" ; 
                     print_r(array_chunk($age_array ,2));  "<br>"; //array chunk functoin 
 
                     "<br>";
                     echo"count function :" . count($names_array) . "<br/>";


                     echo"using sort_fuc of array function :" . "</br>" ;
                     sort($names_array); //array sort function
                     foreach($names_array as $names) //printing sorted array using fore each loop

                         {
                            echo("$names<br/>") ;
                        }
                     
                     echo "revesing array :" . "<br>" ;
                     $rev_array = array_reverse($names_array);
                     foreach ($rev_array as $reverse)
                        {
                            echo"printin array as reverse order :" .$reverse . "<br>";
                        }

                    echo "search function array :" . "<br>" ;   

                    $search_ele = array_search("Ronak", $names_array);

                    echo "searching element is at :" . $search_ele . "<br>";
                    
?>
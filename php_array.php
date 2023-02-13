<?php
echo "------------------------PHP ARRAY FUNCTION--------------------" . "<br>";


                    $names_array = array("Vishvas" , "Ronak" , "Isha" , "Arpit"); //creating  INDEX array of names  
                    $names_array_2 = array(" dixita" , "jayprakash" , "Vishvas" , "Ronak" , "Isha" , "Arpit"); //second array
                    $age = array("20" ,"30" ,"40", "50");
                    echo "getting first element of array is: :" . $names_array[0]  . "<br>"; //retrivniig first element of  array 


                    echo "getting second element of array is: :" . $names_array[1]  . "<br>"; //retrivniig Second element of  array 
                    

                    echo "------------------------ASSOCIATIVE ARRAY--------------------" . "<br>";


                     $age_array = array("vishvas"=>"80" ,"Ronak"=>"50", "isha"=>"52" , "arpit"=>"30"); //creating associative array
                     $age_array_2 = array("vishvas"=>"80" ,"Ronak"=>"50"); //creating  second associative array


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
                    $search_ele = array_search("Ronak", $names_array); //search fucntoin 
                    echo "searching element is at :" . $search_ele . "<br>";
                    
                    echo "intersect function array :" . "<br>" ;  
                    $names_array_3  = array_intersect($names_array ,$names_array_2); //array intersect fucntoin 
                    foreach($names_array_3 as $names3)
                        {
                            echo"value returnedc by intersect functoin is:" . $names3 . "<br>" ;
                        }

                    echo "combine  function array :" . "<br>" ; 

                    $array_combine = array_combine($names_array ,$age);
                    print_r($array_combine). "</br>"; //printing  combined array 


                   "<br>"; echo "diff  function array :" . "<br>" ; //it find difference between twov array valies
                    $diff_array = array_diff($age_array, $age_array_2);
                    print_r($diff_array);


                    echo "flip  function array :" . "<br>" ; 
                    $flip = array_flip($diff_array);
                    print_r($flip);

                    echo "key_exixst  function array :" . "<br>" ; 
                    if(array_key_exists("Vishvasss",$names_array))
                        {
                            echo"vishvasss is exist in names";
                        }

                    else
                        {
                          
                            echo"vishvasss does not exist in names" . "<br>";  
                        }    
                    


            

                        echo "merge  function array :" . "<br>" ; 
                        $color_1=array("red","green");
                        $color_2=array("blue","yellow");

                        print_r(array_merge($color_1 , $color_2)); //it will merge two array color_1 & color_2 


                        echo "pad  function array :" . "<br>" ; 

                        print_r(array_pad($color_1 , 3, "dark_yellow") )

                    
?>
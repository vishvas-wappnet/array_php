<html>

<body>
<center>
         <?php      


                echo "basic for loop example" . "<br>"  ;

                 for ($i=0 ; $i<=10 ;$i++) //for loop
                        {
                            echo"printing 10 users from database  : user" . $i . "</br>";
                        }

                
                        echo "</br>";
                        echo "</br>";
                        echo "</br>";
                        echo "</br>";
                        echo "</br>";        

                echo "while loop example". "<br>";
                $number = 1;
                while ($number <= 10 )//while loop fro printing 10 user 
                {
                        echo"printing   user" . $number. "</br>";
                        $number++;
                }
                 


                echo "</br>";
                echo "</br>";
                echo "</br>";
                echo "</br>";
                echo "</br>";

                echo "while loop example". "<br>";
                $number = 1;
               //while loop fro printing 10 user 
               do 
                  {
                        echo"printing   user using do while loop" . $number. "</br>";
                        $number++;
                  }
                while ($number <= 10 ); 

                echo "</br>";
                echo "</br>";
                echo "</br>";
                echo "</br>";
                echo "</br>";




                echo "printing names using fore each loop:"  . "<br>" ;  
                $names_array = array(" dixita" , "jayprakash" , "Vishvas" , "Ronak" , "Isha" , "Arpit");
                foreach($names_array as $names) //printing users  using fore each loop

                {
                echo("$names<br/>") ;
                }
    
         ?>
</center>

</body>
</html>

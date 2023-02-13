<html>

<body>
<center>
         <?php      


                echo "basic for loop example" . "<br>"  ;

                 for ($i=0 ; $i<=10 ;$i++)
                        {
                            echo"printing 10 users from database  : user" . $i . "</br>";
                        }
                echo "printing names using fore each loop:"  . "<br>" ;  
                $names_array = array(" dixita" , "jayprakash" , "Vishvas" , "Ronak" , "Isha" , "Arpit");
                foreach($names_array as $names) //printing sorted array using fore each loop

                {
                echo("$names<br/>") ;
                }
    
         ?>
</center>

</body>
</html>

<html>

<body>

<center>
            <?php
                    echo "---------------------------------------------------------PHP STRING FUNCTION-------------------------------------------------" . "<br>";

                    $str = "welcome to the phplaravel development section"; //creating string variable 

                    echo $str; //printing string 

                    echo "sting addcslashes functoin :" ; 
                    echo addcslashes ($str , 'l') . "<br>" ;  


                    $str1 = "this string will be converted intovh  HEXA-DECIMAL fomat" . "<br>";
                    echo "printing hexa value of  str1 : " . hexdec($str1)  . "<br>"; 



                
             ?>       
</center>
</body>

</html>
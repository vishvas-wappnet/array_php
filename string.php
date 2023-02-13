<html>

<body>

<center>
            <?php
                    echo "---------------------------------------------------------PHP STRING FUNCTION-------------------------------------------------" . "<br>";

                    $str = "welcome to the phplaravel development section"; //creating string variable 

                    echo $str; //printing string 

                    echo "sting addcslashes functoin :" ; 
                    echo addcslashes ($str , 'l') . "<br>" ;  


                    $str1 = "This string will be converted intovh  HEXA-DECIMAL format" . "<br>";
                    echo "printing hexa value of  str1 : " . hexdec($str1)  . "<br>"; 

                    echo "using bin hez  value of  str1 : " . $str_bin_hrx = bin2hex($str1)  . "<br>"; 

                    echo "  revoming charachetr from righ side of the string using  chop functoin of $str: " . chop($str, "section")  . "<br>"; 
            

                    echo "tihs functoin will return character from ASCII VALUE of 65:". chr(65) . "<br>"; // Decimal value

                    echo "using  chunk_spit string functoin : " . chunk_split($str,6 , "--") ;

                    $str2 = "Welcome to the phplaravel development section";    
                    print_r (explode(" ",$str2)); 
                    echo "<br>";

                    print_r (get_html_translation_table());
                    echo "<br>";

                    $str3= array("hello" , "we" , "are" , "wappnet" , "team" ); 
                    echo "using string join functoin:" . join("-",$str3  ). "<br>";

                    echo " string functoin lcfstring using here ,it convert first letter into lower case: " . lcfirst($str1);


                    $str4 = "    whitespces  will be removed from this string using ltrinm";

                    echo ltrim($str4) . "<br>"; 

                    $str5 = "this secrate message will be encrpted using  md5 function" ;
                    
                    echo "hash value of secrate message is :"  . md5($str5) . "<br>";


                    $num = 1999.9;
                    echo "number fomate function is used here of 1999.9:" . $formattedNum = number_format($num)."<br>";

                    echo "ord function will return the ASCII value of first chatacter of string " . ord("message") . "<br>" ;

                    parse_str("username:anon1277&password:secureme",$credential);

                    echo "parste str functoin used her" . print_r($credential) . "<br>";

                    $r_trim = "hello we are wappnet team    ";
                    echo"Rtrim functoin used here which removevwhite spce from right side" . rtrim($r_trim) . "<br>";

                    echo "sha-1 value of credential is :" . sha1($r_trim) . "<br>";

                    echo "strlen functoin used here" . strlen($str) . "<br>" ;

                    echo "compare stinrg is used here:" . strcmp($st1 ,$str1) . "<br>";

                    echo "string will converted into upper case :". strtoupper($r_trim) . "<br>" ;

                    $upr_case = "HELLO WE ARE ANON TEAM" ;

                    echo "string will converted into lower case :" . strtolower($upr_case) . "<br>"; 

                    echo "reverse stinrg functoin used here:" . strrev($upr_case). "<br>";



                    



                
             ?>       
</center>
</body>

</html>
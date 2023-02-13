

                    <?php

                                         echo "-----------------------------------------------database connection program-----------------------------------------------" ."<br>" ; 



                                               
                                         $reg_username = 'anon_1277';
                                         $reg_user_email='anon@hacker.com';
                                         $reg_user_password='youarehacked';                                     
                                                                                                            
                                               $servername = "localhost";
                                               $username = "root";
                                               $password = "";
                                               $database = "test";

                                                // Create connection
                                               $conn =  mysqli_connect($servername, $username, $password ,$database);

                                               // Check connection
                                                 if (!$conn) 
                                                      {
                                                         die("Connection failed: " . mysqli_connect_error());
                                                      }
                                                else
                                                     {
                                                        echo " Database Connected successfully" . "<br>";
                                                     }                 

                                                 
                                                 $sql1 = 'INSERT INTO user VALUES (1, "anon1277", "anon1277hacker.com", "hackme")' ;
                                                 mysqli_query($conn, $sql1); 
                                                                
                                                if($conn->query($sql1 == TRUE))
                                                   {
                                                      echo "user registred successfully " ;
                                                   }
                                    
                                                else 
                                                {
                                                   echo "Error: " . $sql1 . "<br>" . $conn->error;
                                                }
                    ?>

 





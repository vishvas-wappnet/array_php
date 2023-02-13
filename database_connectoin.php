<html>

<body> 
    <center>

                    <?php

                                         echo "-----------------------------------------------database connection program-----------------------------------------------" ."<br>" ; 




                                                                                                            
                                               $servername = "localhost";
                                               $username = "root";
                                               $password = "";
                                               $database = "test";

                                                // Create connection
                                               $conn = mysqli_connect($servername, $username, $password ,$database);

                                               // Check connection
                                                 if (!$conn) 
                                                      {
                                                         die("Connection failed: " . mysqli_connect_error());
                                                      }
                                                echo " Database Connected successfully";
                                                                


                    ?>

 
<center>

</body>

</html>
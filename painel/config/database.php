<?php

class Banco {


    function conexao() { 
        $servername = "localhost";
        $database = "LocMinas";
        $username = "root";
        $password = "root";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // echo "Connected successfully";
    //    print( mysqli_close($conn));
    //    print_r($conn);
    return $conn;
    }
}
?>
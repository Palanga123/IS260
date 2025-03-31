<?php

        $servername = "localhost";
        $username = "u298594719_Smarttrunk";
        $password = "Trunk@677";
        $dbname = "u298594719_smarttrunk";

        // Connect to the database using servername, username, password and database name
        $conn = new mysqli($servername, $username, $password, $dbname);

        // If connection doesn tgo through kill the connection else say connected successfully
        if ($conn -> connect_error) {
            die("Connection error: ".$conn -> connect_error);
        }else{
            $secure = "Connected succesfullly";        
        }

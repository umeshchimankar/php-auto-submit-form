<?php

//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ttn_demo_db";

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "demo");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    // Escape user inputs for security
    $node_ID = mysqli_real_escape_string($link, $_POST['nodeID']);
    $sensor_ID = mysqli_real_escape_string($link, $_POST['sensorID']);
    $para_ID = mysqli_real_escape_string($link, $_POST['paraID']);
    $para_value = mysqli_real_escape_string($link, $_POST['paravalue']);
    $time_stamp = mysqli_real_escape_string($link, $_POST['timestamp']);

    // attempt insert query execution
    $sql = "INSERT INTO pollution_monitor (nodeID, sensorID, paraID, paravalue, timestamp) VALUES ('$node_ID', '$sensor_ID', '$para_ID', '$para_value', '$time_stamp')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>
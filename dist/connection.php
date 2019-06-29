<?php
    // create connection 
    $conn = mysqli_connect('localhost','','','portfolio');
    // check connection 
    if(mysqli_connect_errno()){
        //connection failed
        echo 'failed to connect'. mysqli_connect_errno();
    }
?>
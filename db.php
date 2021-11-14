<?php
    $server = "sql301.epizy.com";
    $username = "epiz_30355334";
    $password = "SgB1jWwa8ld";
    $dbname = "epiz_30355334_dialectica";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }

?>
<?php
    $Name = $_POST['Name'];
    $conn = new mysqli('localhost', 'root','','login');
    if ($conn->connect_error){
        die('Connection Falied : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into regristration(Name,)")
        $stmt->execute();
        echo "regristration succecful";
        $stmt->close();
        $conn->close();
    }
?>

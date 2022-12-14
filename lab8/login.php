<?php
    $servername = "localhost";
    $user ="root";
    $password = "";
    $dbname = "users";
    
    $conn = new mysqli($servername,$user,$password,$dbname);
    $error = $conn->connect_error;
    
    if($error){
        die("Error" . $error);
    }

    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $sql = "select * from `studens` where name like '$name' and password like '$password'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    if($count){
        echo("Succses");
    }else{
        echo ("User or password is incorrect");
    }
?>
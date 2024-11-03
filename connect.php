<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    //Database Connection
    $conn = new mysqli('localhost', 'root', '', '', 'cara');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into signin(fullname, email, password, repeat_password)values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fullname, $email, $password, $repeat_password);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $stmt->close();
    }

?>
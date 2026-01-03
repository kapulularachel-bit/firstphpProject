<?php

  if($_SERVER["REQUEST_METHOD"]==="POST"){
        $fullname = $_POST['customername'];
        $email = $_POST['email'];   
        $password = $_POST['pswrd'];

        require_once 'dbh.inc.php';

        $sql = "INSERT INTO customers(customername, email, pswrd) VALUES (:customername, :email, :pswrd)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':customername',$fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pswrd', $password);

        $stmt->execute();
        echo "New record created successfully";

  }

 else{
    header("Location: ../page.php?error=invalidrequest");
    echo "Invalid request method.";
  }
<?php
 $dns ="mysql:host=localhost;dbname=customerdatabasee";
 $username ="root";
 $password ="";


 try{

    $pdo = new PDO($dns, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 } catch(PDOException $e){
    echo "Connection failed:" . $e->getMessage();

 };
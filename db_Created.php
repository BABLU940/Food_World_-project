<?php
require_once 'db_conn.php';

// Created  mysqli localserver database in php programming...
$sql_create_database = "CREATE DATABASE IF NOT EXISTS food_world_database";

$result_connection = $conn->query($sql_create_database);
//mysqli_query($conn,$sql_create_database);
 if($result_connection == true){
     //echo('Your Database have Succesfully Created Now!');
    
 }
 else{
   //echo('Your Database have not Created yet');
 }
 // connection closed
// mysqli_close($conn);

//  CREATE DATABASE IF NOT EXISTS food_world;
//  CREATE DATABASE food_world;
//  SHOW DATABASES;
//  USE database_name(food_world);
//  USE classicmodels(food_world);
//  DROP DATABASE IF EXISTS food_world;
?>
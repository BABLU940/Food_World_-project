<?php
require_once 'db_conn.php';
// require_once 'db_Created.php';
// require_once 'db_order_contact_table.php';
// require 'db_created_table.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $textarea = $_POST['textarea'];

    $check_duplicate = $conn->query("SELECT * from `food_world_database`.`contact_table` where `email_address` = $email");
    if($check_duplicate == true){
        echo 'Please Try with Another Email_address';
        exit();
    }

    $submit_data_into_contact_table = "INSERT INTO `food_world_database`.`contact_table`(
        `customer_name`,`email_address`,`phone`,`textarea`) VALUES
         ('$name','$email','$phone','$textarea')";

    $result = $conn->query($submit_data_into_contact_table);
    if($result == true){
        session_start();
        $_SESSION['contact_message']='Your contact form succssfully submit to Admin!';
        header("Location:index.php?contact_message='Your contact form succssfully submit to Admin!'");
    }
}
?>
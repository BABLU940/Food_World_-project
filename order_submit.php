<?php
require_once 'db_conn.php';
// require_once 'db_Created.php';
// require_once 'db_order_contact_table.php';
// require 'db_created_table.php';

if(($_SERVER['REQUEST_METHOD']== 'POST') || isset($_POST['submit_order']) ){
    $username = $_POST['username'];
    $email_address = $_POST['email_address'];
    $phone = $_POST['phone'];
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];

    // testing code 
    // echo '<pre>';
    // print_r($username,$email_address);
    // exit('12');
    // $check_duplicate = "SELECT * from `food_world_database`.`order_table` where `email_address` = '$email_address'";

    // $check_result = $conn->query($check_duplicate);
    // $row = mysqli_num_rows($check_result);
    // $row = mysqli_fetch_assoc($check_result);
    // echo $row;
    // print_r($row);
    // exit('');
    // $conn->query();
    // if($check_duplicate){
    //     echo 'Please Try with Another Email_address';
    //     exit();
    // }
    /*   */


    $sql_insert_data_into_order_table = " INSERT INTO `food_world_database`.`order_table`(
        `customer_name`,`email_address`,`customer_contact`,`item_name`,`quantity_number`,`order_address`)
        VALUES('$username','$email_address','$phone','$item_name','$quantity','$address')";

    $result = $conn->query($sql_insert_data_into_order_table);
    
    if($result == true ){
        $last_id = $conn->insert_id;

    //     print_r($last_id);
    //     print_r($result);
    // exit('123');

        session_start();
        $_SESSION['id']= $last_id;
        $_SESSION['order_message']='Your order form succssfully submit';
        //echo 'your order is successfully';
        // print_r($_SESSION['id']);
        // exit('32');
        $_SESSION['username'] = $username;
        $_SESSION['email_address']= $email_address; 
        $_SESSION['phone']= $phone;
        
        
        //echo 'Your order successfully Submit';
        header("Location:Orderlist.php?order_message='Your order successfully Submit'");
       //header("Location: $locationpage?message=success")
    }
    //echo 'your order is successfully';
}   
?>
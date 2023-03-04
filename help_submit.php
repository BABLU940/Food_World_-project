<?php

require_once 'db_conn.php';

if(($_SERVER['REQUEST_METHOD']== 'POST')){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['mobilenumber'];
    $address = $_POST['address'];
    $Share = $_POST['Share'];
    $Quantity = $_POST['Quantity'];
    $location = $_POST['location'];
    $view = $_POST['view'];
    // testing code 
    // echo '<pre>';
    // print_r($username,$email_address);
    // exit('12');
    // $check_duplicate = $conn->query("SELECT * from `food_world_database`.`help_table` where `email_address` = '$email_address' ");
    // if($check_duplicate == true){
    //     echo 'Please Try with Another Email_address';
    //     exit();
    // }

    $sql_insert_data_into_order_table = " INSERT INTO `food_world_database`.`help_table`(
        `helper_name`,`email_address`,`mobile_number`,`helper_address`,`share_location`,`quantity`,`donation_location`,`view`)
        VALUES('$name','$email','$mobilenumber','$address','$Share','$Quantity','$location','$view')";

    $result = $conn->query($sql_insert_data_into_order_table);

    if($result == true ){
        $last_id = $conn->insert_id;
        session_start();
        $_SESSION['id']= $last_id;
        $_SESSION['helper_message']='Your helper form succssfully submit to Admin!';
        
        // print_r($_SESSION['id']);
        // exit('32');
        $_SESSION['username'] = $name;
        $_SESSION['email_address']= $email; 
        $_SESSION['phone']= $mobilenumber;
        
        //echo 'Your order successfully Submit';
        // header("Location:food-ad-min?order_message='Your helper form succssfully submit to Admin!'");
        header("Location:helppage.html?order_message='Your helper form succssfully submit to Admin!'");
       // header("Location: $locationpage?message=success")
    }
}

?>
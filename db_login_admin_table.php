<?php
require_once 'db_conn.php';
require_once 'db_Created.php';
// require_once 'db_created_table.php';


// sql to create table
$sql_created_table = "CREATE TABLE if not exists food_world_database.login_admin(
order_number int(101) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
customer_name varchar(30) NOT NULL,
email_address VARCHAR(30) NOT NULL unique,
customer_contact varchar(10) NOT NULL,
item_name VARCHAR(30) NOT NULL,
quantity_number VARCHAR(50) NOT NULL,
order_address varchar(50) NOT NULL,
order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )
-- ENGINE = InnoDB DEFAULT CHARSET = utf8 ";
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// $result_table = mysqli_query($conn,ql_created_table);
// Expand Requery Edit Bookmark Database : Queried time : 14:32:43
// create database databasename
// drop TABLE food_world.order_customer;
// ALTER TABLE food_world.order_table add COLUMN contact int(101) not null
// ALTER TABLE food_world.order_table CHANGE COLUMN contact contact_number varchar(10);
// TRUNCATE TABLE food_world.order_customer
// drop table order_customer
// create table order_customer as (select * from order_table1)

//check (city_name in ('noida','delhi','Ghazibad'))
             
// // ENGINE = InnoDB,
// //DEFAULT CHARSET =utf8
 if (mysqli_query($conn, $sql_created_table)) {
  echo 'Yes Your Admin  Table Created Successfully NOW!';
} else {
  echo 'NO Your tabel not Created yet'. mysqli_error($conn);
}

mysqli_close($conn);
?>
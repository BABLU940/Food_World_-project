<?php
require_once 'db_conn.php';
require_once 'db_Created.php';

// sql to create table
// $sql_created_table = "CREATE TABLE if not exists food_world_database.contact_table(
//              contact_id INT(101) PRIMARY KEY AUTO_INCREMENT,
//              first_name varchar(30) NOT null,
//              last_name varchar(30) not null,
//              usernmae varchar(30) NOT NULL UNIQUE,
//              city_name varchar(30) check (city_name like ('noida','delhi','Ghazibad')
//              ),
//              age varchar(3) check(age>=18),
//              phone_number varchar(10) not null,
//              website varchar(50) default 'www.techitsolutionacademy.in',
//              feedback varchar(500) NOT NULL,
//              created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
//              ENGINE = InnoDB DEFAULT CHARSET = utf8
//              ";
// ENGINE = InnoDB,
// //DEFAULT CHARSET =utf8

$sql_created_Contact_table = "CREATE TABLE if not exists food_world_database.contact_table(
table_id int(101) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
customer_name varchar(30) NOT NULL,
email_address VARCHAR(30) NOT NULL unique,
phone varchar(10) NOT NULL,
textarea varchar(300) NOT NULL,
submit_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )
ENGINE = InnoDB DEFAULT CHARSET = utf8 ";

 if (mysqli_query($conn,$sql_created_Contact_table)) {
  //echo 'Yes Your Table Created Successfully NOW!';
} else {
  //echo 'NO Your tabel not Created yet'. mysqli_error($conn);
}

mysqli_close($conn);

?>
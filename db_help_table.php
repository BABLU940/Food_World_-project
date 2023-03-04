<?php
require_once 'db_conn.php';
require_once 'db_Created.php';

$sql_created_Contact_table = "CREATE TABLE if not exists food_world_database.help_table(
help_id int(101) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
helper_name varchar(30) NOT NULL,
email_address varchar(30) NOT NULL,
mobile_number VARCHAR(10) NOT NULL,
helper_address varchar(30) NOT NULL,
share_location varchar(30) NOt NULL,
quantity varchar(10) NOT NULL,
donation_location varchar(50) NOT NULL, 
view varchar(300) NOT NULL,
submit_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )
ENGINE = InnoDB DEFAULT CHARSET = utf8 ";

 if (mysqli_query($conn,$sql_created_Contact_table)) {
  //echo 'Yes Your Table Created Successfully NOW!';
} else {
  //echo 'NO Your tabel not Created yet'. mysqli_error($conn);
}

mysqli_close($conn);

?>
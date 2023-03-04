<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "food_world_database";

// CREATE CONNECTION
$conn = new mysqli($servername,$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `order_table`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{

        echo "<table border='1'>

<tr>

<th>Order number</th>

<th>Costumer Name</th>

<th>Email_address</th>

<th>Customer_contact</th>

<th>Item_name</th>

<th>Order_date</th>


</tr>";

 

while($row = $result->fetch_assoc())

  {

  echo "<tr>";

  echo "<td>" . $row['order_number'] . "</td>";

  echo "<td>" . $row['customer_name'] . "</td>";

  echo "<td>" . $row['email_address'] . "</td>";

  echo "<td>" . $row['customer_contact'] . "</td>";

  echo "<td>" . $row['item_name'] . "</td>";

  echo "<td>" . $row['order_date'] . "</td>";

  echo "</tr>";

  }

echo "</table>";


		// OUTPUT DATA OF EACH ROW

        // echo "order no-------customer_name";
        // echo "<br>";

		// while($row = $result->fetch_assoc())
		// {   
		// 	echo $row["order_number"];
        //     echo "----------";
        //     echo $row["customer_name"];
        //     echo "<br>";
		// }
	}
	else {
		echo "0 results";
	}

$conn->close();

?>

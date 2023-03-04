<!DOCTYPE html>
<html lang="en">

<head>
    <title>food_world</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
* {
    margin: 0;
    padding: 0;
}

#menu ul {
    list-style: none;
    z-index: 1000;
}

#menu ul li {
    background-color: black;
    border: 2px solid white;
    width: 298px;
    height: 50px;
    text-align: center;
    line-height: 40px;
    float: left;
    position: relative;
}

#menu ul li a {
    text-decoration: none;
    color: white;
    display: block;
}

#menu ul li a:hover {
    background-color: grey;
}

#menu ul ul {
    position: absolute;
    display: none;
}


#menu ul li:hover>ul {
    display: block;
}

table {
    height: 470px;
    border-radius: 25px;
}

input {
    width: 95%;
    height: 35px;
    font-size: 20px;
}

textarea {
    width: 95%;
    height: 98px;
    font-size: 20px;
}

button {
    width: 95%;
    height: 35px;
    font-size: 20px;
}

button:hover {
    color: white;
    background-color: purple;
    border-radius: 25px;
}

input[type=button] {
    width: 95%;
    height: 35px;
    font-size: 20px;
}

input[type=button]:hover {
    background-color: red;
    color: white;
    border-radius: 25px;
}

select {
    width: 95%;
    height: 35px;
    font-size: 20px;
}

#footer {
    height: 250px;
    width: 100%;
    background-color: black;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

#fb {
    height: 180px;
    width: 100%;
    float: left;
    color: white;
    text-align: center;
}

#fb a {
    text-decoration: none;
    display: block;
}

body {
    background: linear-gradient(red, blue);
}

table {
    border: 5px groove pink;
    background-color: grey;
}

tr {
    text-align: center;
}

th,
td {
    text-align: center;

}

.message {
    color: green;
    text-align: center;
    background-color: yellow;
    border: 2px groove pink;

}
</style>

<body>
    <div id="menu">
        <ul>
            <li><a href="food_world.html">HOME</a></li>
            <li><a href="About us in food world.html">ABOUT US</a></li>
            <li><a href="menu.html">MENU</a>
                <ul>
                    <li><a href="menu.html">Veg Thali</a>
                    <li><a href="non veg thali.html">Non-Veg Thali</a>
                    <li><a href="chaat.html">Chaat</a>
                    <li><a href="fast food.html">Fast Food</a>
                    <li><a href="soup.html">Soup</a>
                    <li><a href="pasta.html">Pasta</a>
                </ul>
            </li>
            <li><a href="order.html">ORDER</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
    </div>
    <br><br><br><br>

    <!-- here Start listing code--->
    <div class="container">
        <?php
        if (!empty($_SESSION['cancleorder_message'])) {
            echo '<p class="message"> '.$_SESSION['cancleorder_message'].'</p>';
            unset($_SESSION['cancleorder_message']);
        }
        
        ?>
        <h2>Your CancleOrder List:</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime necessitatibus eum similique.</p>
        <table class="table">
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>Order_id</th>
                    <th>CancleOrder</th>
                    <th>Customer_name</th>
                    <th>email_address</th>
                    <th>phone</th>
                    <th>item_name</th>
                    <th>quantity</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once 'db_conn.php';
                    session_start();
                    $username =  $_SESSION['username'];
                    $id =  $_SESSION['id'];
                    $email = $_SESSION['email_address'];
                    $phone = $_SESSION['phone'];
                   
              
                    $select_customer_cancleorder = "SELECT * from `food_world_database`.`cancleorder_table` 
                    where `customer_name` = '$username' order by `cancleorder_date` desc" ;
                    //or 'email_address' = '$email'
                    $result = mysqli_query($conn,$select_customer_cancleorder);
                    // print_r($result);
                    //        exit('hum');
                    $num = mysqli_num_rows($result);
                    //  exit('123');
                    $sno =1;
                    if($num > 1){
                        while($row = mysqli_fetch_assoc($result)){
                        echo" <tr>
                            <th>$sno</th>
                            <th>".$row['cancleorder_number']."</th>
                            <th>".$row['customer_name']."</th>
                            <th>".$row['email_address']."</th>
                            <th>".$row['customer_contact']."</th>
                            <th>".$row['item_name']."</th>
                            <th>".$row['quantity_number']."</th>
                            <th>".$row['cancleorder_address']."</th>
                        </tr>";
                        $sno++;
                        }
                    }
                    //  session_destroy();
                    //  session_unset($_session['username']);
                    // if (!empty($_SESSION['message'])) {
                    //     echo '<p class="message"> '.$_SESSION['message'].'</p>';
                    //     unset($_SESSION['message']);
                    // }

                    ?>

            </tbody>
        </table>
    </div>

    <!-- here  End  listing code--->
    <br>
    <br>
    <br>
    <div id="footer">
        <div id="fb">
            <b>Quick link: </b>
            <br><br><br>
            <a href="food_world.html">Home</a><br>
            <a href="About us in food world.html">About</a><br>
            <a href="menu.html">Menu</a><br>
            <a href="order.html">Order </a><br>
            <a href="contact.html">Contact</a><br>
        </div>
        <div id="fb">
            <b>Menu: </b>
            <br><br> Veg-Thali
            <br> Non-Veg Thali<br> Chaat
            <br> Fast Food<br> Soup
            <br> Pasta
            <br>
        </div>
        <div id="fb">
            <b>Address: </b>
            <br><br><br> 120, Pune Jalandhar, <br> Email: example@gmail.com<br> Mobile: 978543210 <br> Time: 9:00 AM to
            5:00 PM<br>
        </div>
    </div>

</body>

</html>
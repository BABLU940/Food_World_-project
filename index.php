<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food_world</title>
</head>
<style type="text/css">
* {
    margin: 0;
    padding: 0;
}

#menu ul {
    list-style: none;
    z-index: 1000;
    position: fixed;
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

#top {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

#sub {
    width: 370px;
    height: 250px;
    float: left;
    margin-top: 30px;
    margin-bottom: 30px;
    box-shadow: 5px 5px 4px 4px black;
    transition: transform 2s;
}

#sub:hover {
    transform: scale(1.15);
}

#footer {
    height: 200px;
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

.message {
    color: green;
    text-align: center;
    background-color: yellow;
    border: 2px groove pink;

}
</style>

<body>
    <!-- code for nav bar -->
    <div class="container-fluid">
        <?php
        if (!empty($_SESSION['contact_message'])) {
            echo '<p class="message"> '.$_SESSION['contact_message'].'</p>';
           // unset($_SESSION['contact_message']);
        }
        
        ?>
    </div>
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
    <!--code for nav bar -->

    <!-- code for slider -->
    <marquee scrollamount="15" direction="left" bgcolor="yellow" behavior="alternate">
        <image src="img/pasta.jpg" height="400" width="350">
            <image src="img/soup.jpg" height="400" width="350">
                <image src="img/veg.jpg" height="400" width="350">
                    <image src="img/chaat.jpg" height="400" width="350">
                        <image src="img/pasta.jpg" height="400" width="350">
                           <image src="img/fastfood1.jpg" height="400" width="350">
                                <image src="img/nonveg1.jpg" height="400" width="350">
                                     <image src="img/soup1.jpg" height="400" width="350">
                                        <image src="img/ch.jpg" height="400" width="350">
                                            <image src="img/chowmein.jpg" height="400" width="350">
    </marquee>
    <!-- code for slider -->

    <!--code for top cat -->
    <br><br><br>
    <h1 align="center">
        <font size="700px">Top Food Items</font>
    </h1>
    <br><br>
    <div id="top">
        <div id="sub">
            <image src="img/12.jpg" width="100%">
                <p align="center">
                    <font size="6px">Veg-Thali</font>
                </p>
        </div>
        <div id="sub">
            <image src="img/2.jpg" width="100%">
                <p align="center">
                    <font size="6px">Burgar</font>
                </p>
        </div>
        <div id="sub">
            <image src="img/ch8.jpg" width="100%">
                <p align="center">
                    <font size="6px">Chaat</font>
                </p>
        </div>
    </div>
    <div id="top">
        <div id="sub">
            <image src="img/fast8.jpg" width="100%">
                <p align="center">
                    <font size="6px">Fast-Food</font>
                </p>
        </div>
        <div id="sub">
            <image src="img/pasta2.jpg" width="100%">
                <p align="center">
                    <font size="6px">Pasta</font>
                </p>
        </div>
        <div id="sub">
            <image src="img/s1.jpg" width="100%">
                <p align="center">
                    <font size="6px">Soup</font>
                </p>
        </div>
    </div>
    <!--end of code for top cat -->

    <!--code for footer -->
    <div id="footer">
        <div id="fb">
            <b>Quick link: </b>
            <br><br><br>
            <a href="food_world.html">Home</a><br>
            <a href="About us in food world.html">About</a><br>
            <a href="menu.html">Menu</a><br>
            <a href="order.html">Order</a><br>
            <a href="contact.html">Contact</a><br>
           
        </div>
        <div id="fb">
            <b>Menu: </b>
            <br><br><br> Veg-Thali
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
    <!--end code for footer-->

</body>

</html>
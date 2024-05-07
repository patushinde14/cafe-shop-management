<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'mytutor';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = " INSERT INTO student(name,email,mobile,city) values ('$name','$email','$mobile','$city')";
    mysqli_query($conn, $sql);
}
?>







<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cafe Website</title>


    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-coffee"></i> Cafe Shop</a>

        <nav class="navbar">
            <div id="close-navbar" class="abc"></div>
            <a href="#">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#login">login</a>

        </nav>

        <div class="icons">
            <div id="menu-btn" class="pqr"></div>
        </div>

    </header>


    <section class="home" id="home">

        <div class="content">
            <h3>Discover the <br> taste of real <br> coffee </h3>
            <a href="menu card.html" class="btn">Order Now</a>
        </div>

    </section>

    <!-- home -->

    <!-- About us -->

    <h1 class="heading" style="font-size:30px">about us</h1>

    <section class="about" id="about">

        <div class="row">

            <div class="image">
                <img src="image/cofe2.jpg" alt="about">
            </div>

            <div class="content">
                <h3>What makes our coffee special?</h3>
                <div class="line"></div>
                <p>The Flavour hidden in a cup of coffee are rich and crisp and this comes not just form the qulity of
                    the special coffee beans but form the work ethihc and dedication put into it by the farmer.</p>
            </div>

        </div>

    </section>

    <!-- end -->

    <!-- Menu -->

    <section class="menu" id="menu">

        <h1 class="heading" style="font-size:20px">menu</h1>
        <br><br><br>
        <h2 class="heading" style="font-size:20px">Coffee :</h2>
        <br><br>

        <div class="box-container">

            <div class="box">
                <img src="image/menu-1.png" alt="">
                <h3>Black-coffee</h3>
                <div class="price">Rs.40</div>
            </div>

            <div class="box">
                <img src="image/menu-2.png" alt="">
                <h3>Latte-coffee</h3>
                <div class="price">Rs.50</div>
            </div>

            <div class="box">
                <img src="image/menu-3.png" alt="">
                <h3>Cappuccino-coffee</h3>
                <div class="price">Rs.70</div>
            </div>

            <div class="box">
                <img src="image/menu-4.png" alt="">
                <h3>Amaricano-coffee</h3>
                <div class="price">Rs.100</div>
            </div>

            <div class="box">
                <img src="image/menu-5.png" alt="">
                <h3>Espresso-coffee</h3>
                <div class="price">Rs.120</div>
            </div>

            <div class="box">
                <img src="image/menu-6.png" alt="">
                <h3>Doppio-coffee</h3>
                <div class="price">Rs.100</div>
            </div>

        </div>
        <hr>

    </section>
    <section class="ice-cream" id="ice-cream">
        <h1 class="heading" style="font-size:20px">ice-creams :</h1>
        <br><br>
        <div class="box-container">
            <div class="box">
                <img src="image/ice-1.png" alt="">
                <h3>CORNATO</h3>
                <div class="price">Rs.40</div>
            </div>
            <div class="box">
                <img src="image/ice-2.png" alt="">
                <h3>BLACK CURRANT</h3>
                <div class="price">Rs.40</div>
            </div>

            <div class="box">
                <img src="image/ice-3.png" alt="">
                <h3>BROWNIE</h3>
                <div class="price">Rs.40</div>
            </div>

            <div class="box">
                <img src="image/ice-4.png" alt="">
                <h3>PISTA</h3>
                <div class="price">Rs.40</div>
            </div>

            <div class="box">
                <img src="image/ice-5.png" alt="">
                <h3>VANILA</h3>
                <div class="price">Rs.40</div>
            </div>

            <div class="box">
                <img src="image/ice-5.png" alt="">
                <h3>MAVA</h3>
                <div class="price">Rs.40</div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- Customer login -->

    <section class="login" id="login">

        <h1 class="heading" style="font-size:30px">customer login <br><br><br></h1>

        <div class="row">

            <form class="frm" action="#" method="POST">
                <div class="frm">
                    <h1> Name : <input type=" text" name="name" class="inputBox" placeholder="Enter your Name"></h1><br>
                    <h1> Email :<input type=" email" name="email" class="inputBox" placeholder="Enter your Email"></h1>
                    <br>
                    <h1> Mobile : <input type="number" name="mobile" class="inputBox" placeholder="Enter your mobile">
                    </h1><br>
                    <h1> City :<input type=" text" name="city" class="inputBox" placeholder="Enter your city"></h1><br>
                    <h1><input type="submit" name="submit" value="Submit" class="inputBox"></h1>
                </div>

            </form>


            <div class="image">
                <img src="image/contact.png" alt="">
            </div>

        </div>



        <div class="center">

            <form method="post">

                <div class="recover">

                </div>
            </form>

            <div class="member">
                <a> </a>
            </div>
        </div>



    </section>

    <!-- End -->

    <!-- Footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <img src="image/footer-1.png" alt="">
                <h3>address</h3>
                <p>satara,maharastra 415001</p>

            </div>

            <div class="box">
                <img src="image/footer-2.png" alt="">
                <h3>E-mail</h3>
                <a href="#" class="link">coffeeshoppj@gmail.com</a>
                <a href="#" class="link">coffeeshoppj@gmail.com</a>
            </div>

            <div class="box">
                <img src="image/footer-3.png" alt="">
                <h3>Call us</h3>
                <p>+91 7987678909</p>
            </div>

            <div class="box">
                <img src="image/footer-4.png" alt="">
                <h3>Opening hours</h3>
                <p>Monday - Friday: 8:00 - 24:00
                    <br> Saturday: 8:00 - 23:00
                </p>
            </div>

        </div>


    </section>

</body>

</html>
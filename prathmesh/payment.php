<?php
if (isset($_POST['submit'])) {
    $name = $_POST[''];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $cidate = $_POST['cidate'];
    $codate = $_POST['codate'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];





    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'shubham';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = " INSERT INTO sb(name,email,mobile,city,cidate,codate,adults,children) values ('$name','$email','$mobile','$city','$cidate','$codate','$adults','$children')";
    mysqli_query($conn, $sql);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="payment.css">
</head>

<body>
    <div class="abc">
        <h2>Payment Form</h2>
        <form method="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name"name="fname">
                    <i class="abc."></i>
                </div>
             
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Adress" required class="name">
                    <i class="xyz"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4> Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
                <div class="input-box">
                    <h4> Gender</h4>
                    <input type="radio" id="b1" name="gendar" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gendar" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <select>
                        <option>01 jun</option>
                        <option>02 jun</option>
                        <option>03 jun</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

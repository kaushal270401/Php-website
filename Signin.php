<?php
include 'config.php';

if($_POST["submit1"]){
    $username=$_POST["reg_usrname"];
    $email=$_POST["reg_email"];
    $password=$_POST["reg_pass"];

    $sql="INSERT INTO users(username,email,password) 
          VALUES('$username','$email','$password')";
    $result=mysqli_query($conn, $sql);
    if(!result){
        echo"<script>alert('woops! something went wrong'.)</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Signin.css">
</head>
<body>
<div class="frame">
    <div class="innerframe">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">login</button>
            <button type="button" id="reg" class="toggle-btn" onclick="register()">register</button>
        </div>
        <div class="icon">
            <img src="g.png" alt="">
        </div>
        <form id="login" action="" method="post" class="signupform">
            <input type="text" class="username" id="Username" name="login_usrname" placeholder="username"  required>
            <input type="password" class="username" id="password" name="login_pass" placeholder="password" required>
            <input type="checkbox" class="checkbox" required><span>Remember password</span>
            <button class="submit">login</button>
        </form>
        <form id="register" action="" method="post" class="signupform">
            <input type="text" class="username" name="reg_usrname" id="Username" placeholder="username"required> 
            <input type="email" class="username" name="reg_email" placeholder="email-id" required>
            <input type="password" class="username" name="reg_pass" id="password" placeholder="password" required>
            <input type="checkbox" class="checkbox" required><span>Agree to terms and condition</span>
            <button name="submit1" class="submit">Register</button>
        </form>
    </div>
</div>   

<script>
    var x= document.getElementById("login");
    var y= document.getElementById("register");
    var z= document.getElementById("btn");
    
    function register(){
        x.style.left="-400px"
        y.style.left="50px"
        z.style.left="120px"
    }
    function login(){
        x.style.left="50px"
        y.style.left="450px"
        z.style.left="0"
    }

</script>

    
</body>
</html>
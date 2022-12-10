<?php
$host= "localhost";
$user = "root";
$pass = "";
$db= "auth_db";

$con = mysqli_connect($host,$user,$pass,$db);

function getData(){
        $host= "localhost";
        $user = "root";
        $pass = "";
        $db= "auth_db";

    $con = mysqli_connect($host,$user,$pass,$db);
    $sql = "SELECT * FROM products;";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}
function getDatawomen(){
    $host= "localhost";
    $user = "root";
    $pass = "";
    $db= "auth_db";

$con = mysqli_connect($host,$user,$pass,$db);
$sql = "SELECT * FROM productswomen;";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    return $result;
}
}
function getDatashop(){
    $host= "localhost";
    $user = "root";
    $pass = "";
    $db= "auth_db";

$con = mysqli_connect($host,$user,$pass,$db);
$sql = "SELECT * FROM shop;";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    return $result;
}
}
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $qry="INSERT INTO `contact`(`name`, `email`, `phone`, `msg`) VALUES ('$name','$email',$phone,'$message')";
    
    
    $insert=mysqli_query($con,$qry);
    if(!$insert){
        echo "there are some problem";
    }
    else{
        echo "data inserted";
    }
}
if(isset($_POST['paybtn']))
{
    $cname = $_POST['card_name'];
    $cnumber = $_POST['card_number'];
    $exp = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];


    $qry="INSERT INTO `payform`(`card_name`, `card_number`, `expiry`, `cvv`, `address`, `city`, `state`, `zipcode`) VALUES ('$cname',$cnumber,$exp,$cvv,'$address','$city','$state',$zipcode)";
    
    
    $insert=mysqli_query($con,$qry);
    if(!$insert){
        echo "there are some problem";
    }
    else{
        echo "data inserted";
    }
}

?>

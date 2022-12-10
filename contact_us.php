<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoe website</title>
    <link rel="stylesheet" href="includes/shoe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css">
    <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>

</head>
<header>

<h3 class="namelogo">SHOE_A_HOLIC</h3>
<nav>
    <ul class="nav__link">
        <li><a href="shoe.php">home</a></li>
        <li><a href="#featured">featured</a></li>
        <li><a href="product..php">product</a></li>
        <li><a href="contact_us.php">contact us</a></li>
        <li><a href=shop.php>Shop</a></li>
    </ul>
</nav>
<div class="nav__shop">
    <i class="bx bx-shopping-bag" id="cart-icon"></i></a>
    <div class="cart">
        <h2 class="cart_title">your cart</h2>
        <div class="cart-content">
       
        </div>
        <!-- total -->
        <div class="total">
            <div class="total-tile">Total</div>
            <div class="total-price">$0</div>
        </div>

        <!-- buy button -->
        <!-- <button type="button"<a href="payment.php"></a> class="btn_buy">Buy now</button> -->
        <button class="btn_buy" ><a href="payment.php"></a>BUY</button>
        <span class="iconify" id="close-cart" data-icon="bi:x"></span>

    </div>
    <a href="login-signup">
        <span class="iconify"  data-icon="teenyicons:signin-outline"></span>
    </a>
</div>
</header>

<body>
<h2 class="section-title">CONTACT</h2>

      <div style="margin-top:100px" class="frame">
         
         <form action="code.php" method="POST">
             
             <input type="text" class="form_control" name="name" placeholder="your_name"><br>
            <input type="text"  class="form_control" name="phone" placeholder="Phone No"><br>
             <input type="email" class="form_control" name="email" placeholder="your_email"><br>
             <textarea name="message" id="message" cols="30" class="form_control" rows="4"></textarea><br>
            <!-- <input type="button" name="contactus" class="btn" value="SEND MESSAGE"> -->
            <button type="submit" name="submit" class="btn">submit</button>

         </form>
      </div>
    </section> 

    <?php include('includes/footer.php'); ?>

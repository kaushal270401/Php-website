<?php require_once ('component.php');?>
<?php include ('code.php');?>

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

<body>
    <!-- header -->
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
                <button type="button" class="btn_buy" ><a href="payment.php"></a>  Buy now</a></button>
                <span class="iconify" id="close-cart" data-icon="bi:x"></span>

            </div>
            <a href="login-signup">
                <span class="iconify"  data-icon="teenyicons:signin-outline"></span>
            </a>
        </div>
    </header>


        <section style="background-color:red" class="MEN section" id="women">
            <div class="section-title">
                MEN SNEAKERS
            </div>
    
            <div class="women__container bd-grid">
            <?php
                $result = getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>
    
            </div>
        </section>
       <!--Women-->
       <section style="background-color:aqua" class="women section" id="women">
        <div class="section-title">
            WOMEN SNEAKERS
        </div>

        <div class="women__container bd-grid">

            <?php
                $result = getDatawomen();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>

        </div>
    </section>
    <script src="main.js"></script>
    <?php include('includes/footer.php'); ?>

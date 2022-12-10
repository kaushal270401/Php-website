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
                <!-- <button type="button"<a href="payment.php"></a> class="btn_buy">Buy now</button> -->
                <button class="btn_buy" ><a href="payment.php"></a>BUY</button>
                <span class="iconify" id="close-cart" data-icon="bi:x"></span>

            </div>
            <a href="login-signup">
                <span class="iconify"  data-icon="teenyicons:signin-outline"></span>
            </a>
        </div>
    </header>



    <!-- home -->
        <div class="homehero" id="home">
            <img src="image/nike.jpg" class="home_img" alt="">
        </div>
        <div class="home_text">
            <p class="home_para1">Just do it</p>
            <span class="para2">sneakers of all type</span><br>
            <a href="shop.php" class="btn">Shop Now</a>
        </div>
    <!-- home -->

    <!--Featured-->
        <section style="margin-top: 130px;" class="featured section" id="featured">
        <h2 class="section-title">Featured</h2>

        <div class="featured__container bd-grid">

            <article class="sneaker">
                <div class="sneaker__sale">Sale</div>
                <img src="image/featured1.png" alt="featured1" class="sneaker__img">
                <span class="sneaker__name">Nike Jordan</span>
                <span class="sneaker__price">$149.99</span>
                <a href="product-detail\index.html" class="btn-lights">show product<i class="bx bx-right-arrow-alt btn-icon"></i></a>              
                <a href="#" class="btn-light">Add to Cart <i class="bx bx-right-arrow-alt btn-icon"></i></a>
            </article>

            <article class="sneaker">
                <div class="sneaker__sale">Sale</div>
                <img src="image/featured2.png" alt="featured2" class="sneaker__img">
                <span class="sneaker__name">Nike Free RN</span>
                <span class="sneaker__price">$149.99</span>
                <a href="product-detail\index.html" class="btn-lights">show product<i class="bx bx-right-arrow-alt btn-icon"></i></a>              
                <a href="#" class="btn-light">Add to Cart <i class="bx bx-right-arrow-alt btn-icon"></i></a>
            </article>

            <article class="sneaker">
                <div class="sneaker__sale">Sale</div>
                <img src="image/featured3.png" alt="featured3" class="sneaker__img">
                <span class="sneaker__name">Nike Free RN</span>
                <span class="sneaker__price">$149.99</span>
                <a href="product-detail\index.html" class="btn-lights">show product<i class="bx bx-right-arrow-alt btn-icon"></i></a>              
                <a href="#" class="btn-light">Add to Cart <i class="bx bx-right-arrow-alt btn-icon"></i></a>
            </article>

        </div>
    </section>
    <!-- vategories -->

    <section class="collection section">
            <div class="collection__container bd-grid">
                <div class="collection__card">
                    <div class="collection__data">
                        <h3 class="collection__name">MEN</h3>
                        <p class="collection__description">
                            New collection 2020
                        </p>
                        <a href="product..php"" class="btn-light">Buy now <i class="bx bx-right-arrow-alt btn-icon"></i></a>
                    </div>

                    <img src="image/men.png" alt="collection1" class="collection__img">
                </div>

                <div class="collection__card">
                    <div class="collection__data">
                        <h3 class="collection__name">WOMEN</h3>
                        <p class="collection__description">
                            New collection 2020
                        </p>
                        <a href="product..php" class="btn-light">Buy now <i class="bx bx-right-arrow-alt btn-icon"></i></a>
                    </div>

                    <img src="image/women.png" alt="collection2" class="collection__img">
                </div>
            </div>
        </section>

    <script src="main.js"></script>
    <?php include('includes/footer.php'); ?>

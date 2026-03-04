<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Oswald font -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<!-- font awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <title>Ecommerce Project</title>
</head>
<body>
    <main class="main">
    <?php include_once('./sections/header.php'); ?>
    <?php include_once('./sections/banner.php'); ?>
    <style>
        .popular-foods{
            padding: 114px 0px 120px 0px;
            height: auto;
            background-color: #F5F8FD;
        }
        .popular-foods .container{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 40px;
        }
        .section-description{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left-text h2{
            color: #00A149;
font-family: Oswald;
font-size: 17px;
font-style: normal;
font-weight: 700;
line-height: 28px; /* 164.706% */
text-transform: capitalize;
        }

        .left-text p{
            color: #212121;
font-family: Oswald;
font-size: 60px;
font-style: normal;
font-weight: 700;
line-height: 67.2px; /* 112% */
text-transform: capitalize;
        }

        .popular-food-wrapper{
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .single-food-cart{
    width: 300px;
    height: 394px;
    background-image: url("./assets/images/cart-bg.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-color: lightgray;
    padding: 49px;
border: #00A149;
position: relative;
        }

        .cart-body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .cart-divider{
            width: 53px;
height: 2px;
background: #FFC222;
        }

        .cart-body h2{
            color: #212121;
text-align: center;
font-family: Oswald;
font-size: 28px;
font-style: normal;
font-weight: 700;
line-height: 36.4px;
text-transform: capitalize;
        }

.cart-body p{
    color: #FFC222;
text-align: center;
font-family: Oswald;
font-size: 17px;
font-style: normal;
font-weight: 600;
line-height: 28px;
text-transform: capitalize;
}

.cart-image{
    height: 210px;
    padding: 10px;
}

.preview-btn i{
    color: #FFC222;
}
.next-btn i{
    color: #00A149;
}

    </style>
    <section class="popular-foods">
        <div class="container">
            <!-- section-description -->
            <div class="section-description">
                <div class="left-text">
                    <h2>crispy, every bite taste</h2>
                    <p>Popular Food Items</p>
                </div>
                <!-- slider btn -->
                 <div class="slider-btn">
                    <button class="preview-btn"><i class="fa-solid fa-arrow-left-long"></i></button>
                    <button class="next-btn"><i class="fa-solid fa-arrow-right-long"></i></button>
                 </div>
            </div>
            <!-- section wrapper -->
             <div class="popular-food-wrapper">
                <!-- single cart -->
                <div class="single-food-cart">
                    <div class="cart-image">
                        <img src="./assets/images/pasta.png" alt="">
                    </div>
                    <div class="cart-body">
                        <h2>Chiken</h2>
                        <div class="cart-divider"></div>
                        <p>8 Products</p>
                    </div>
                </div>

                 <!-- single cart -->
                <div class="single-food-cart">
                    <div class="cart-image">
                        <img src="./assets/images/burger.png" alt="">
                    </div>
                    <div class="cart-body">
                        <h2>Pro Burger</h2>
                        <div class="cart-divider"></div>
                        <p>3 Products</p>
                    </div>
                </div>

                 <!-- single cart -->
                <div class="single-food-cart">
                    <div class="cart-image">
                        <img src="./assets/images/french-fry.png" alt="">
                    </div>
                    <div class="cart-body">
                        <h2>Pro Pasta</h2>
                        <div class="cart-divider"></div>
                        <p>3 Products</p>
                    </div>
                </div>

                 <!-- single cart -->
                <div class="single-food-cart">
                    <div class="cart-image">
                        <img src="./assets/images/pizza-2.png" alt="">
                    </div>
                    <div class="cart-body">
                        <h2>Pro Pizza</h2>
                        <div class="cart-divider"></div>
                        <p>3 Products</p>
                    </div>
                </div>

             </div>
        </div>
    </section>
    </main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>
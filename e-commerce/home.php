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
        <div class="background-shape">
            <img src="./assets/images/burger-shape.png" alt="">
        </div>
    </section>
    </main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>
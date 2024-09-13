<?php 
 include 'components/connection.php';
 session_start();
 if(isset($_SESSION['user_id'])){
       $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }

 ?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Avon MakeUp - home Page</title>
</head>
<body>
<?php include 'components/header.php'; ?>
<div class="main">
<section class="home-section">
<div class="slider">
    <div class="slider__slider slide1">
        <div class="overlay"></div>
        <div class="slide-detail">
            <h1>the product name</h1>
            <p>details about our products and ingredients</p>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="hero-dec-top"></div>
        <div class="hero-dec-bottom"></div>
    </div>
    <!--  Slide End  -->
    <div class="slider__slider slide2">
        <div class="overlay"></div>
        <div class="slide-detail">
            <h1>Welcome To My Shop</h1>
            <p>details about our products and ingredients</p>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="hero-dec-top"></div>
        <div class="hero-dec-bottom"></div>
    </div>
    <!--  Slide End  -->
    <div class="slider__slider slide3">
        <div class="overlay"></div>
        <div class="slide-detail">
            <h1>the product name</h1>
            <p>details about our products and ingredients</p>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="hero-dec-top"></div>
        <div class="hero-dec-bottom"></div>
    </div>
    <!--  Slide End  -->
    <div class="slider__slider slide4">
        <div class="overlay"></div>
        <div class="slide-detail">
            <h1>the product name</h1>
            <p>details about our products and ingredients</p>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="hero-dec-top"></div>
        <div class="hero-dec-bottom"></div>
    </div>
    <!--  Slide End  -->
    <div class="slider__slider slide5">
        <div class="overlay"></div>
        <div class="slide-detail">
            <h1>the product name</h1>
            <p>details about our products and ingredients</p>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="hero-dec-top"></div>
        <div class="hero-dec-bottom"></div>
    </div>
    <!--  Slide End  -->
    <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
    <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
</div>
</section>
    <!--  Home Slider End  -->
<section class="thumb">
    <div class="box-container">
        <div class="box">
            <img src="img/eyeshadow.webp">
            <h3>MakeUp</h3>
            <p>details about our products and ingredients</p>
            <i class="bx bx-chevron-right"></i>
        </div>
        <div class="box">
            <img src="img/bathAndBody.jpg">
            <h3>Bath & Body</h3>
            <p>details about our products and ingredients</p>
            <i class="bx bx-chevron-right"></i>
        </div>
        <div class="box">
            <img src="img/skinCare.jpg">
            <h3>Skin Care</h3>
            <p>details about our products and ingredients</p>
            <i class="bx bx-chevron-right"></i>
        </div>
        <div class="box">
            <img src="img/fashion.png">
            <h3>Fashion</h3>
            <p>details about our products and ingredients</p>
            <i class="bx bx-chevron-right"></i>
        </div>
    </div>
</section>
<section class="container">
<div class="box-container">
    <div class="box">
        <img src="img/makeupCollection.jpg">
    </div>
    <div class="box">
        <img src="img/eye.jpg">
        <span>new collection</span>
        <h1>save up to 50% off</h1>
        <p>details about our products and ingredients</p>
    </div>
</div>
</section>
<section class="shop">
    <div class="title">
    <img src="img/eye.jpg">
    <h1>Trending Products</h1>
    </div>
    <div class="row">
    <div class="gallery">
    <div class="box">
    <img src="img/verticle.jpg">
    </div>
    <div class="box">
        <img src="img/width.jpg">
    </div>
            
    </div>
    </div>
	<div class="top-footer">
                <h1>WAKE UP & MAKE UP</h2>
            </div>
    <div class="box-container">
    <div class="box">
        <img src="img/bag1.webp">
        <a href="view_products.php" class="btn">shop now</a>
    </div>
    <div class="box">
        <img src="img/contorHighlighter.webp">
        <a href="view_products.php" class="btn">shop now</a>
    </div>
    <div class="box">
        <img src="img/sunglasses1.jpg">
        <a href="view_products.php" class="btn">shop now</a>
    </div>
    <div class="box">
        <img src="img/eyeshadow.webp">
        <a href="view_products.php" class="btn">shop now</a>
    </div>
    <div class="box">
        <img src="img/nailpolish.webp">
        <a href="view_products.php" class="btn">shop now</a>
    </div> 
    <div class="box">
        <img src="img/roj.webp">
        <a href="view_products.php" class="btn">shop now</a>
    </div>  
    </div>
</section>
<section class="shop-category">
    <div class="box-container">
        <div class="box">
        <img src="img/horizontal1.png">
        <div class="detail">
            <span>BIG OFFERS</span>
            <h1>Extra 15% off</h1>
            <a href="view_products.pdp" class="btn">shop now</a>
        </div>
        </div>
        <div class="box">
        <img src="img/horizontal2.jpg">
        <div class="detail">
            <span>new in using</span>
            <h1>Extra 15% off</h1>
            <a href="view_products.pdp" class="btn">shop now</a>
        </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="box-container">
    <div class="box">
        <img src="img/savingMoney1.png">
        <div class="detail">
            <h3>great savings</h3>
            <p>save big every order</p>
        </div>
    </div>

    <div class="box">
        <img src="img/support1.jpg">
        <div class="detail">
            <h3>24*7 support</h3>
            <p>one-on-one support</p>
        </div>
    </div>

    <div class="box">
        <img src="img/gift1.png">
        <div class="detail">
            <h3>gift vouchers</h3>
            <p>vouchers on every festivals</p>
        </div>
    </div>

    <div class="box">
        <img src="img/delivery1.png">
        <div class="detail">
            <h3>worldwide delivery</h3>
            <p>dropship worldwide</p>
        </div>
    </div>
    </div>

</section>
<section class="brand">
<div class="box-container">
<div class="box">
         <img src="img/brand0.png">   
</div>
<div class="box">
         <img src="img/brand1.jpg">   
</div>
<div class="box">
         <img src="img/brand3.jpg">   
</div>
<div class="box">
         <img src="img/brand4.jpg">   
</div>
</div>

</section>
    <?php include 'components/footer.php'; ?>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>
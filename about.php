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
    <title>Avon MakeUp - about us Page</title>
</head>
<body>
<?php include 'components/header.php'; ?>
<div class="main">
<div class="banner">
    <h1>about us</h1>
</div>
<div class="title2">
    <a href="home.php">home</a><span>about</span>
</div>
<div class="about-category">
    <div class="box">
        <img src="img/horizontal1.jpg">
        <div class="detail">
            <span>Conselor</span>
            <h1>Bronze</h1>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="img/horizontal2.jpg">
        <div class="detail">
            <span>Conselor</span>
            <h1>Bronze</h1>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="img/horizontal2.jpg">
        <div class="detail">
            <span>Conselor</span>
            <h1>Bronze</h1>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="img/horizontal2.webp">
        <div class="detail">
            <span>Conselor</span>
            <h1>Bronze</h1>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
</div>

<section class="services">
    <div class="title">
        <h1>Why choose us</h>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

    </div>
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
<div class="about">
    <div class="row">
     <div class="img-box">
                <img src="img/slide0.jpeg">
     </div>
    <div class="detail">
        <h1>Visit Our beautiful Showroom!</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <a href="view_products.php" class="btn">shop now</a>
    </div>
</div>
</div>

<div class="testimonial-container">
    <div class="title">
        <img src="img/makeupLogo.webp" class="logo">
        <h1>What People Say About Us</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

        <div class="container">
            <div class="testimonial-item active">
                <img src="img/womanAvatar.png">
                <h1>maria mousa</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>


            <div class="testimonial-item">
                <img src="img/manAvatar.png">
                <h1>Sami Hattab</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>


            <div class="testimonial-item">
                <img src="img/womanAvatar1.png">
                <h1>yumna swid</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

            <div class="testimonial-item">
                <img src="img/manAvatar.png">
                <h1>Sami Hattab</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

            
            <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
        </div>
    

</div>



    <?php include 'components/footer.php'; ?>
</div>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">

let slides = document.querySelectorAll('.testimonial-item');
let index = 0;

function nextSlide(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
    }

function prevSlide(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');

    }
</script>

<?php include 'components/alert.php'; ?>

</body>
</html>
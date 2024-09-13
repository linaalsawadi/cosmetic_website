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
    exit(); // Yönlendirme sonrası scriptin devam etmesini engellemek için 'exit' eklendi.
}

if(isset($_GET['get_id'])){
    $get_id = $_GET['get_id'];
}else{
    $get_id = '';
    header("location: order.php");
    exit(); // Yönlendirme sonrası scriptin devam etmesini engellemek için 'exit' eklendi.
}

if(isset($_POST['cancel'])){ // Düğme ismi "cancel" olarak düzeltildi.
    $update_order = $conn->prepare("UPDATE `orders` SET status = ? WHERE id=?");
    $update_order->execute(['canceled', $get_id]);
    header('location: order.php');
    exit(); // Yönlendirme sonrası scriptin devam etmesini engellemek için 'exit' eklendi.
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
    <title>Avon MakeUp - Order Detail Page</title>
</head>
<body>
<?php include 'components/header.php'; ?>
<div class="main">
<div class="banner">
    <h1>Order Detail</h1>
</div> 
<div class="title2">
    <a href="home.php">home/</a><span>order detail</span>
</div>
<section class="order-detail">
    <div class="title">
        <img src="img/eye.jpg" class="logo">
        <h1>Order Detail</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>
    <div class="box-container">
       <?php
            $grand_total = 0;
            $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE id=? LIMIT 1");
            $select_orders->execute([$get_id]);
            if($select_orders->rowCount() > 0){
                while($fetch_order = $select_orders->fetch(PDO::FETCH_ASSOC)){
                    $select_product = $conn->prepare("SELECT * FROM `products` WHERE id=? LIMIT 1");
                    $select_product->execute([$fetch_order['product_id']]);
                    if($select_product->rowCount() > 0){
                        while($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)){
                            $sub_total = ($fetch_order['price'] * $fetch_order['qty']);
                            $grand_total += $sub_total;
       ?>
       <div class="box">
            <div class="col">
                <p class="title"><i class="bi bi-calendar-fill"><?= $fetch_order['date']; ?></i></p>
                <img src="image/<?= $fetch_product['image']; ?>" class="image">
                <p class="price"><?= $fetch_product['price']; ?> x <?= $fetch_order['qty']; ?></p>
                <h3 class="name"><?= $fetch_product['name']; ?></h3>
                <p class="grand-total">Total amount payable : <span>$<?= $grand_total; ?></span></p>
            </div>
            <div class="col">
                <p class="title">Billing Address</p>
                <p class="user"><i class="bi bi-person-bounding-box"></i><?= $fetch_order['name']; ?></p>
                <p class="user"><i class="bi bi-phone"></i><?= $fetch_order['number']; ?></p>
                <p class="user"><i class="bi bi-envelope"></i><?= $fetch_order['email']; ?></p>
                <p class="user"><i class="bi bi-pin-map-fill"></i><?= $fetch_order['address']; ?></p>
                <p class="title">Status</p>
                <p class="status" style="color:<?php if($fetch_order['status']=='delivered'){echo 'green';}elseif($fetch_order['status']=='canceled'){echo 'red';}else{echo 'orange';}?>"><?= $fetch_order['status'] ?></p>
                <?php if($fetch_order['status']=='canceled'){?>
                    <a href="checkout.php?get_id=<?= $fetch_product['id']; ?>" class="btn">Order Again</a>
                <?php }else{ ?>
                    <form method="post">
                        <button type="submit" name="cancel" class="btn" onclick="return confirm('Do you want to cancel this order?')">Cancel Order</button> <!-- Düğme ismi ve onay mesajı düzeltildi -->
                    </form>
                <?php } ?>
            </div>
       </div>
       <?php
                        }
                    } else {
                        echo '<p class="empty">Product not found</p>';
                    }
                }
            } else {
                echo '<p class="empty">No order found</p>';
            }
       ?>
    </div>
</section>
<?php include 'components/footer.php'; ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php include 'components/alert.php'; ?>
</body>
</html>

<?php
$db_name = 'mysql:host=localhost;dbname=shop_db';
$db_user = 'root';
$db_password = '';

$conn = new PDO($db_name,$db_user,$db_password);


//ADD PRODUCT

/*
try {
    // Set the PDO error mode to exception
    $random_id = unique_id();
    echo "Connected successfully.<br>";

    // Prepare an SQL statement to insert a product
    $sql = "INSERT INTO products (id, name, price, image, product_detail) VALUES (:id, :name, :price, :image, :product_detail)";

    // Bind parameters to the statement
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $random_id);
    $stmt->bindParam(':name', $product_name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':product_detail', $product_detail);

    // Set the values you want to insert
    $product_name = "tool";
    $price = 19;
    $image = "tool.png";
    $product_detail = "";

    // Execute the prepared statement
    $stmt->execute();

    echo "Product added successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
*/

//DELETE PRODUCT

/*
 // Prepare an SQL statement to delete a product
    $sql = "DELETE FROM products WHERE id = :id";

    // Bind parameters to the statement
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    // Set the ID of the product you want to delete
    $id = 'XlXu50RiVCTrGPThmCvu'; // Change this to the ID of the product you want to delete

    // Execute the prepared statement
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Product deleted successfully!";
    } else {
        echo "No product found with the specified ID.";
    }

*/


/*
if($conn){
echo "connected";
}
*/
function unique_id(){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLength = strlen($chars);
    $randomString = '';
    for($i=0 ; $i < 20 ; $i++){
    $randomString.=$chars[mt_rand(0, $charLength - 1)];
    }
    return $randomString;
}
?>
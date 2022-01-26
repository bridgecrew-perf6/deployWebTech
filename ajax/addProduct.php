<?php
require_once "db.php";

$productName = $_POST["product-name"];
$productPrice = $_POST["product-price"];
// $productImage = "hello";
$productImage = rand(1000, 10000) . "-" . $_FILES['product-image']['name'];
$image = $_FILES['product-image']['tmp_name'];
$upload_dir = '../assets/images';

move_uploaded_file($image, $upload_dir . '/' . $productImage);

try
{
    $query = "INSERT INTO products (`pName`,`pPrice`,`pImage`) VALUES (?,?,?)";

    $db = new Db();
    $db = $db->connect();

    $stmt = $db->prepare($query);
    $stmt->execute([$productName, $productPrice, $productImage]);
    
    $count = $stmt->rowCount();
    
    $db = null;

    $data = array(
        "status" => "success",
        "rowCount" => $count
    );

    echo json_encode($data);

}
catch(PDOException $e)
{
    $data = array(
        "status" => "fail",
    );
    echo json_encode($data);
}
?>
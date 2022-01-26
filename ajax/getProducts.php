<?php
require_once "db.php";

try
{
    $query = "SELECT * from `products`";

    $db = new Db();
    $db = $db->connect();

    $stmt = $db->prepare($query);
    $stmt->execute();

    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $db = null;

    echo json_encode($row);

}
catch(PDOException $e)
{
    $data = array(
        "status" => "fail",
    );
    echo json_encode($data);
}

<?php 
require_once('../config/db.php');
if(isset($_GET['id'])){
    echo $_GET['id'];
    $id = $_GET['id'];

$sql = "DELETE FROM products where id = $id";
$result = $conn->query($sql);
}



?>
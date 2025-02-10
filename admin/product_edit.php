<?php 
include('common/header.php'); 
require_once('../config/db.php');
if(isset($_GET['id'])){
   
    $id = $_GET['id'];

$sql = "SELECT * FROM products where id = $id";

$result = $conn->query($sql);
}




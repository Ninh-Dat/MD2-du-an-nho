<?php
include_once "products.php";
include_once "Data.php";

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $data = new Data();
    $data->deleteProduct($id);
    header("Location:index-hai.php");
}
<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action=""method="post">
    <input type="image" width="150px" name="anh"  >
    <input type="text" name="name"  >
    <input type="date" name="date"  >
    <input type="number" name="gia"  >
    <input type="text" name="noisx"  >
    <button>Add</button>
</form>
</body>
</html>
<?php
include_once "products.php";
include_once "Data.php";
$data=new Data();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $product = new products($_REQUEST['anh'],$_REQUEST['name'],$_REQUEST['date'],$_REQUEST['gia'],$_REQUEST['noisx'],);
    $data->addProduct($product);
    header("location:index-hai.php");
}
?>

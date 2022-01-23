<?php

session_start();
include_once "products.php";
include_once "Data.php";
$data= new Data();
$products=$data->loadData();
if (isset($_SESSION['user'])) {
    $user = ($_SESSION['user']);
} else {
    header("Location:login.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;

        }

        th, td {

            text-align: center;
            border-bottom: 1px solid #ddd;

            font-size: 20px;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="img/logo.png" width="80px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Danh sách sản phẩm</a>


                </div>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <?php echo $user->name ?? " " ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
</nav>
<caption><h1>Danh sách sản phẩm</h1></caption>
<table border="1px">

    <thead>
    <tr>
        <th>STT</th>
        <th>Ảnh</th>
        <th>Tên</th>
        <th>ngày sản xuất</th>
        <th>Giá sản phẩm</th>
        <th>Nơi sản xuất</th>
        <th colspan="3">CRUD</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ( $products as $key => $product): ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><img src="<?php echo $product->anh ?>" alt="" width="150"></td>
            <td><?php echo $product->ten ; ?></td>
            <td><?php echo $product->ngay ; ?></td>
            <td><?php echo $product->gia ; ?></td>
            <td><?php echo $product->noisx ?></td>
            <td><a  href="detail.php?id=<?php echo $key ?>">Detail</a> </td>
            <td><a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này')" href="delete.php?id=<?php echo $key ?>">Delete</a> </td>
            <td><a href="update.php?id=<?php echo $key ?>">Update</a> </td>
        </tr>

    <?php endforeach; ?>
    </tbody>

</table>
<button style="margin-top: 20px; float: right; margin-right: 100px; "><a href="create.php"><b>Add Product</b></a></button>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>


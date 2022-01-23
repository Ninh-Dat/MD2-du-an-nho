<?php
include_once "products.php";
include_once "Data.php";
$data = new Data();

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];

    $product = $data->getProductByid($id);
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
<caption><h1>Thông tin của sản phẩm</h1></caption>
<table border="1px">

    <thead>
    <tr>
        <th>Ảnh</th>
        <th>Tên</th>
        <th>Ngày sản xuất</th>
        <th>Giá sản phẩm</th>
        <th>Nơi sản xuất</th>
        <th>Chất liệu</th>
        <th>Size</th>
        <th>Hàng còn</th>


    </tr>
    </thead>
    <tbody>
    <tr>
        <td><img src="<?php echo $product->getAnh() ?>" alt="" width="150"></td>
        <td><?php echo $product->getTen(); ?></td>
        <td><?php echo $product->getNgay(); ?></td>
        <td><?php echo $product->getGia(); ?></td>
        <td><?php echo $product->getNoisx() ?></td>
        <td>Vải thun</td>
        <td>S-M-L-XL</td>
        <td>40/cái</td>
    </tr>

    </tbody>

</table>
</body>
</html>

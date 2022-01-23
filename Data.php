<?php
include_once "products.php";

class Data
{
    private $path;

    public function __construct()
    {
        $this->path = "data.json";
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->path, $dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson);
    }

    public function addProduct($product)
    {
        $data = [
            "anh" => $product->getanh(),
            "ten" => $product->getten(),
            "ngay" => $product->getngay(),
            "gia" => $product->getgia(),
            "noisx" => $product->getnoisx(),
        ];
        $products = $this->loadData();
        array_push($products, $data);
        $this->saveData($products);
    }

    public function deleteProduct($id)
    {
        $products = $this->loadData();
        array_splice($products, $id, 1);
        $this->saveData($products);
    }

    public function getProductByid($id){
        $products = $this->loadData();
        $s=$products[$id];
        $product= new products($s->anh,$s->ten,$s->ngay,$s->gia,$s->noisx);
       return $product;
    }
    public function updateProduct($id, $product)
    {
        $data = [
            "anh" => $product->getanh(),
            "ten" => $product->getten(),
            "ngay" => $product->getngay(),
            "gia" => $product->getgia(),
            "noisx" => $product->getnoisx(),
        ];
        $products = $this->loadData();
        $products[$id] = $data;
        $this->saveData($products);
    }
}
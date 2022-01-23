<?php

class products
{
private $anh;
private $ten;
private $ngay;
private $gia;
private $noisx;

    public function __construct($anh, $ten, $ngay, $gia, $noisx)
    {
        $this->anh = $anh;
        $this->ten = $ten;
        $this->ngay = $ngay;
        $this->gia = $gia;
        $this->noisx = $noisx;
    }

    public function getAnh()
    {
        return $this->anh;
    }

    public function setAnh($anh): void
    {
        $this->anh = $anh;
    }

    public function getTen()
    {
        return $this->ten;
    }

    public function setTen($ten): void
    {
        $this->ten = $ten;
    }

    public function getNgay()
    {
        return $this->ngay;
    }

    public function setNgay($ngay): void
    {
        $this->ngay = $ngay;
    }

    public function getGia()
    {
        return $this->gia;
    }

    public function setGia($gia): void
    {
        $this->gia = $gia;
    }

    public function getNoisx()
    {
        return $this->noisx;
    }

    public function setNoisx($noisx): void
    {
        $this->noisx = $noisx;
    }




}
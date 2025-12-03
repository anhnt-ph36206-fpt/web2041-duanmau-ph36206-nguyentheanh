<?php

class HomeController
{   
    private $productModel;
    public function __construct()
    {
        $this->productModel = new Product();
    }
    public function index() 
    {
        // $title = 'Đây là Trang Home Người Dùng';
        $view = 'home';
        $top4LatestProducts = $this->productModel->top4Latest();
        $top4ViewProducts = $this->productModel->top4View();
        // echo '<pre>';
        // var_dump($top4LatestProducts);
        // var_dump($top4ViewProducts);
        require_once PATH_VIEW_MAIN_CLIENT;
    }
}
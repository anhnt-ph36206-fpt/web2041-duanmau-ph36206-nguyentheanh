<?php

class HomeController
{
    public function index() 
    {
        $title = 'Đây là Trang Home Người Dùng';
        require_once PATH_VIEW_MAIN_CLIENT;
    }
}
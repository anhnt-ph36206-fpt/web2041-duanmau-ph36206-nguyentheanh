<?php
// có class chứa các function thực thi xử lý logic 
class UserController extends BaseModel
{
    public $modelUser;
    public function __construct()
    {
        $this->modelUser = new User();
    }

    public function index() {
        $view = 'user/index';
        $title = 'Danh sách Người Dùng';

        //  Lấy Danh Sách từ CSDL
        $users = $this->modelUser->getAll();
        // var_dump($users);    
        require_once PATH_VIEW_MAIN_ADMIN;
    }
}

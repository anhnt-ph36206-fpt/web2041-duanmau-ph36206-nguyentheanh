<?php
// có class chứa các function thực thi xử lý logic 
class CategoryController extends BaseModel
{
    public $modelCategory;
    public function __construct()
    {
        $this->modelCategory = new Category();
    }
  
    // public function home()
    // {
    //     $title = 'Đây là Trang Home Admin';
    //     require_once PATH_VIEW_ADMIN . 'main.php';
        
    //     // $title = "Đây là trang chủ nhé hahaa";
    //     // $thoiTiet = "Hôm nay trời có vẻ là mưa";
    //     // require_once './views/trangchu.php';
    // }

    public function index() {
        // $title = 'Đây là Trang Quản Trị Admin';
        $view = 'category/index';
        $title = 'Danh sách Danh Mục';

        //  Lấy Danh Sách từ CSDL
        $categories = $this->modelCategory->getAll();
        // var_dump($categories);
        require_once PATH_VIEW_MAIN_ADMIN;
    }
}

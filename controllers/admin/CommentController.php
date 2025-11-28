<?php
// có class chứa các function thực thi xử lý logic 

class CommentController extends BaseModel
{
    public $modelComment;
    public function __construct()
    {
        $this->modelComment = new Comment();
    }
  
    public function index() {
        // $title = 'Đây là Trang Quản Trị Admin';
        $view = 'comment/index';
        $title = 'Danh sách Bình Luận';
        
        //  Lấy Danh Sách từ CSDL
        $comments = $this->modelComment->getAll();
        // var_dump($comments);
        require_once PATH_VIEW_MAIN_ADMIN;
    }
}

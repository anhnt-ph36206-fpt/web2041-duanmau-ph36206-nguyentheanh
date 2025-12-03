<?php 

class DetailProductController {
    private $productModel;
    public function __construct() {
        $this->productModel = new Product();
    }

    public function show() {
        try {
            if (!isset($_GET['id'])) {
                # Nếu như không tồn tại ID thì bắn ra lỗi  Chưa có id sản phẩm
                throw new Exception("Không tồn tại tham số id sản phẩm trên URL");
            }
            //  Lấy id sản phẩm từ URL
            $id = $_GET['id'];
            //  Lấy thông tin chi tiết sản phẩm
            $product = $this->productModel->find($id);
            if (empty($product)) {
                throw new Exception("ID không tồn tại trong CSDL");
            }
            // var_dump($product);
            
            // Cập nhật số lượt xem (view_count)
            $view_count = $product['view_count'] + 1;
            //  Cập nhật số lượt xem (view_count) vào trong trong CSDL
            $this->productModel->updateViewCount($id, $view_count);
            // var_dump($view_count);
        } catch (Exception $e) {
            echo "Lỗi kết nối: " . $e->getMessage();
        }
        $view = 'detail-product';
        require_once PATH_VIEW_MAIN_CLIENT;
    }
    
}
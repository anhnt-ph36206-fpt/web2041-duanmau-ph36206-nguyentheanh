<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class Product extends BaseModel
{
    // Viết truy vấn danh sách sản phẩm 
    public function getAll()
    {
        $sql = 'SELECT p.*, c.name AS category_name
        FROM `products` AS p
        JOIN `categories` AS c
        ON p.category_id = c.id
        ORDER BY p.id ASC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Viết câu truy vấn tạo sản phẩm mới vào CSDL
    public function insert($data) {
        $sql = "INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `image`, `view_count`)  
                VALUES (NULL, '".$data['category_id']."', '".$data['name']."', '".$data['description']."', '".$data['price']."', '".$data['quantity']."', '".$data['image']."', 0)";    
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Viết câu truy vấn tìm kiếm sản phẩm theo id
    public function find($id) {
        $sql = "SELECT * FROM `products` WHERE `id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetch(); // Sử dụng hàm fetch() để lấy ra 1 dòng dữ liệu (trả về 1 mảng associative)
    }

    //  Viết câu truy vấn xoá sản phẩm theo id
    public function delete($id) {
        $sql = "DELETE FROM `products` WHERE `id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
    /**
     * Lấy ra 4 sản phẩm mới nhất
     * Lấy tất cả dữ liệu từ bảng products
     * Sắp xếp theo id giảm dần
     * Lấy ra 4 dòng dữ liệu
     */
    public function top4Latest() {
        $sql = "SELECT * FROM `products` 
                ORDER BY `id` 
                DESC LIMIT 4";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();//  Dùng fetchAll() để lấy ra tất cả các dòng dữ liệu (trả về 1 mảng 2 chiều)
    }

    /**
     * Lấy ra 4 sản phẩm có lượt xem cao nhất
     * Lấy tất cả dữ liệu từ bảng products
     * Sắp xếp theo view_count giảm dần
     * Lấy ra 4 dòng dữ liệu
     */

    public function top4View() : array {
        $sql = "SELECT * FROM `products` 
                ORDER BY `view_count` 
                DESC LIMIT 4";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();//  Dùng fetchAll() để lấy ra tất cả các dòng dữ liệu (trả về 1 mảng 2 chiều)
    }

    public function updateViewCount($id, $view_count) {
        // $sql = "UPDATE `products` SET `view_count` = $view_count WHERE `id` = $id";
        $sql = "UPDATE `products` SET `view_count` = '$view_count' WHERE `products`.`id` = $id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}
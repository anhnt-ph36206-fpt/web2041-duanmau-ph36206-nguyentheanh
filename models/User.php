<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class User extends BaseModel
{
    // Viết truy vấn danh sách người dùng 
    public function getAll()
    {
        $sql = 'SELECT * FROM `users` ORDER BY `id` DESC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

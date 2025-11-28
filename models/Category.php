<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class Category extends BaseModel
{
    // Viết truy vấn danh sách danh mục 
    public function getAll()
    {
        $sql = 'SELECT * FROM `categories` ORDER BY `id` DESC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

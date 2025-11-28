<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class Comment extends BaseModel
{
    // Viết truy vấn danh sách bình luận 
    public function getAll()
    {
        $sql = 'SELECT cmt.*, u.username, p.name AS product_name
        FROM comments AS cmt
        JOIN users AS u ON cmt.user_id = u.id
        JOIN products AS p ON cmt.product_id = p.id
        ORDER BY cmt.id DESC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

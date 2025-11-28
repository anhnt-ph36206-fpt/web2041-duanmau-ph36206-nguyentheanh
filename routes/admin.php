<?php
// Kiểm tra login có quyền vào trang admin không
// TODO

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'                     => (new ProductController)->home(),
    //  CRUD Products
    'list-product'         => (new ProductController)->index(),
    //  CRUD Categories
    'list-category'        => (new CategoryController)->index(),
    //  CRUD Comments
    'list-comment'         => (new CommentController)->index(),
    //  CRUD Users
    'list-user'            => (new UserController)->index(),
};
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?? 'Home Admin'?></title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-xxl bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin'?>"><b>Home Admin</b></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL?>"><b>Home Client</b></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin&action=list-product'?>"><b>Danh Sách Sản Phẩm</b></a>
            </li>
               <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin&action=list-category'?>"><b>Danh Sách Danh Mục</b></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin&action=list-comment'?>"><b>Danh Sách Bình Luận</b></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-uppercase" href="<?php echo BASE_URL . '?mode=admin&action=list-user'?>"><b>Danh Sách Người Dùng</b></a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1 class="mt-3 mb-3"><?php echo $title ?? 'Home Admin'?></h1>

        <div class="row">
            <?php
                if (isset($view)) {
                    require_once PATH_VIEW_ADMIN . $view . '.php';
                }
            ?>
        </div>
    </div>

</body>

</html>
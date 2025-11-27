<?php 

session_start();

spl_autoload_register(function ($class) {    
    $fileName = "$class.php";

    $fileModel              = PATH_MODEL . $fileName;
    // $fileController         = PATH_CONTROLLER . $fileName;
    $fileControllerAdmin         = PATH_CONTROLLER_ADMIN . $fileName;
    $fileControllerClient         = PATH_CONTROLLER_CLIENT . $fileName;

    if (is_readable($fileModel)) {
        require_once $fileModel;
    } 
    else if (is_readable($fileControllerAdmin)) {
        require_once $fileControllerAdmin;
    }
    else if (is_readable($fileControllerClient)) {
        require_once $fileControllerClient;
    }
    // else if (is_readable($fileController)) {
    //     require_once $fileController;
    // }
});

require_once './configs/env.php';
require_once './configs/helper.php';

// Điều hướng
// require_once './routes/index.php';

$mode = $_GET['mode'] ?? 'client';

if ($mode == 'admin') {
    //  Require đường dẫn của Admin
    require_once  './routes/admin.php';
} else {
    require_once  './routes/client.php';
}

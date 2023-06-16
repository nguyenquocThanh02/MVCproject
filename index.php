<?php
    require './Core/Database.php';
    require './Models/BaseModel.php';
    require './Controllers/BaseController.php';
    // Để tìm kiếm, mong muốn là url có: ..?controller= tên trang cần tìm; thì nó sẽ tự động chuyển trang theo mong muốn
    $controllerName = ucfirst(($_REQUEST['controller'] ?? 'Welcome').'Controller');
    // Để thực hiện hàm như mong muốn, thêm ..&action= tên hàm cần thực hiện; 
    $actionName= $_REQUEST['action'] ?? 'index';
    require "Controllers/${controllerName}.php";

    $controllerOject= new $controllerName;
    $controllerOject->$actionName();

?>
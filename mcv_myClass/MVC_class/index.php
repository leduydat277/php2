<?php
    require_once 'common\Database.php';
    require_once 'models\UserModel.php';
    require_once 'controllers\UserController.php';

    use controller\UserController;

    $userController = new UserController();
    $listUsers = $userController->getUser();

    var_dump($listUsers);
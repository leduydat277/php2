<?php 
include 'b2/model.php';
$list_user  = getAllUser();
$user_id = (!empty($_GET['userid']) ? $_GET['userid']:''); 
$user = getUser($user_id);
var_dump($user);
include 'b2/view.php'; 

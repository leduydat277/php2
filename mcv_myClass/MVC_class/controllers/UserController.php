<?php
    namespace controller;
    use models\UserModel;

    class UserController{
        public function getUser(){
            $userModel = new UserModel();
            return $userModel->getListUser();
        }
    }
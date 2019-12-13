<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        if(!empty($_POST['userEmail']) and !empty($_POST['userPassword'])) {
            echo 'Login: ' . $_POST['userEmail'];
            echo '<br>';
            echo 'Password: ' . $_POST['userPassword'];
        }
        $this->view->render('Вход');
    }

    public function registerAction()
    {
        if (!empty($_POST['login'])) {
            echo $_POST['login'];
            echo $_POST['password'];
        }
        $this->view->render('Регистрация');
    }
}

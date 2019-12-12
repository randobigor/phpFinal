<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
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

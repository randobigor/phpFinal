<?php

namespace application\controllers;

use application\core\Controller;

class CourseController extends Controller
{
    public function courseListAction()
    {
        $res = $this->model->getData();
        $vars = [
            'courses' => $res
        ];

        $this->view->render('Курсы', $vars);
    }

    public function courseAction() {
        $res = $this->model->getLessons($this->route['id']);
        var_dump($res);
        $this->view->render('Lesson');
    }
}

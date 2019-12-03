<?php 

namespace Controllers;

require_once "models/Course.php";
use Models\Course;

class CourseController {
    public function actionIndex() {
        $object = new Course();
        return $data = $object->getAllGroups();
    }

    public function actionCreate() {

    }
}
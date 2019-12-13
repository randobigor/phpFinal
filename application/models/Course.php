<?php

namespace application\models;

use application\core\Model;

class Course extends Model
{
    public function getData()
    {
        $result = $this->db->get('SELECT id, name, description, price, preview FROM courses');
        return $result;
    }

    public function getLessons($lessonID)
    {
        $sql = "SELECT id, name, preview FROM lessons WHERE course = {$lessonID}";
        $result = $this->db->get($sql);
        var_dump($result);
    }
}

<?php

namespace application\models;

use application\core\Model;

class Course extends Model{
    public function getData() {
        $result = $this->db->get('SELECT id, name, description, price, preview FROM courses');

        return $result;
    } 
}
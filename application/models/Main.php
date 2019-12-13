<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getData()
    {
        $result = $this->db->get('SELECT * FROM courses');
        return $result;
    }
}

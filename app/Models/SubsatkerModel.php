<?php

namespace App\Models;

use CodeIgniter\Model;

class SubsatkerModel extends Model
{
    protected $table = 'subsatker';
    protected $primaryKey = 'id_subsatker';
    protected $useTimestamps = false;
    // protected $allowedFields = ['id_target', 'id_satker'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
    }

    public function get_nm_subsatker_not_in_target()
    {
        return $this->db
            ->query('select id_subsatker, nm_subsatker from subsatker where id_subsatker not in (select id_subsatker from target)')
            ->getResult();
    }

    public function get_subsatker_by_id_satker($id_satker)
    {
        return $this->db
            ->query("select id_subsatker, nm_subsatker from subsatker where id_satker = '$id_satker'")
            ->getResult();
    }

    public function get_subsatker($id_subsatker)
    {
        return $this->db
            ->query("select nm_subsatker from subsatker where id_subsatker = '$id_subsatker'")
            ->getFirstRow();
    }
}

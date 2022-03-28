<?php

namespace App\Models;

use CodeIgniter\Model;

class TargetModel extends Model {
    protected $table = 'target';
    protected $primaryKey = 'id_target';
    protected $useTimestamps = false;
    // protected $allowedFields = ['id_target', 'id_satker'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
    }

    public function get_all_targets()
    {
        return $this->db->query('select * from target')->getResult();
    }

    public function get_by_id($id_target)
    {
        return $this->db->query("select * from target where id_target = '$id_target'")->getRow();
    }

    public function add_target($data)
    {
        $this->db->table($this->table)->insert($data);
    }

    public function update_target($id_target, $data)
    {
        $this->db->table($this->table)->update($data, $id_target);
    }

    public function delete_by_id($id_target)
    {
        $this->db->table($this->table)->delete(['book_id' => $id_target]);
    }
}
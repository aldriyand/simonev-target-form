<?php

namespace App\Models;

use CodeIgniter\Model;

class SatkerModel extends Model
{
    protected $table = 'satker';
    protected $primaryKey = 'id_satker';
    protected $useTimestamps = false;
    // protected $allowedFields = ['id_target', 'id_satker'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
    }

    public function get_all_satker()
    {
        return $this->db
            ->query('select id_satker, nm_satker from satker')
            ->getResult();
    }

    public function get_nm_satker_not_in_target()
    {
        return $this->db
            ->query('select id_satker, nm_satker from satker where id_satker not in (select id_satker from target)')
            ->getResult();
    }
}

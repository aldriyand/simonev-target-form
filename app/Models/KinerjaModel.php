<?php

namespace App\Models;

use CodeIgniter\Model;

class KinerjaModel extends Model
{
    protected $table = 'kinerja';
    protected $primaryKey = 'id_kinerja';
    protected $useTimestamps = false;

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
    }

    public function get_rekening_by_subsatker($id_subsatker)
    {
        return $this->db
            ->query("select id_rekening, nm_rekening from kinerja where id_subsatker = '$id_subsatker'")
            ->getResult();
    }

    public function get_jml_pagu_by_subsatker_and_rekening($id_subsatker, $id_rekening)
    {
        return $this->db
            ->query("select jml_pagu from kinerja where id_subsatker = '$id_subsatker' and id_rekening = '$id_rekening'")
            ->getFirstRow();
    }

    public function get_satker_with_no_subsatker($id_satker)
    {
        return $this->db
            ->query("select distinct k.id_subsatker, s.singkatan as nm_subsatker from kinerja as k join satker as s on k.id_satker = s.id_satker where k.id_satker = '$id_satker'")
            ->getResult();
    }
}

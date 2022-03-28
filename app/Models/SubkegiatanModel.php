<?php

namespace App\Models;

use CodeIgniter\Model;

class SubkegiatanModel extends Model
{
    protected $table = 'subkegiatan';
    protected $primaryKey = 'id_subkegiatan';
    protected $useTimestamps = false;

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
    }

    public function get_nm_subkegiatan_not_in_target()
    {
        return $this->db
            ->query('select id_subkegiatan, nm_sub_kgtn from subkegiatan where id_kegiatan not in (select id_subkegiatan from target)')
            ->getResult();
    }

    public function get_subkegiatan_by_id_kegiatan($id_kegiatan)
    {
        return $this->db
            ->query("select id_subkegiatan, nm_sub_kgtn from subkegiatan where id_kegiatan = '$id_kegiatan'")
            ->getResult();
    }

    public function get_subkegiatan($id_subkegiatan)
    {
        return $this->db
            ->query("select nm_sub_kgtn from subkegiatan where id_subkegiatan = '$id_subkegiatan'")
            ->getFirstRow();
    }
}

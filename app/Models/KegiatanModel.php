<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $useTimestamps = false;
    // protected $allowedFields = ['id_target', 'id_satker'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
    }

    public function get_nm_kegiatan_not_in_target()
    {
        return $this->db
            ->query('select id_kegiatan, nm_kgtn from kegiatan where id_kegiatan not in (select id_kegiatan from target)')
            ->getResult();
    }

    public function get_kegiatan_by_id_program($id_program)
    {
        return $this->db
            ->query("select id_kegiatan, nm_kgtn from kegiatan where id_program = '$id_program'")
            ->getResult();
    }

    public function get_kegiatan($id_kegiatan)
    {
        return $this->db
            ->query("select nm_kgtn from kegiatan where id_kegiatan = '$id_kegiatan'")
            ->getFirstRow();
    }
}

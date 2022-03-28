<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table = 'program';
    protected $primaryKey = 'id_program';
    protected $useTimestamps = false;
    // protected $allowedFields = ['id_target', 'id_satker'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
    }

    public function get_nm_program_not_in_target()
    {
        return $this->db
            ->query('select id_program, nm_prog from program where id_program not in (select id_program from target)')
            ->getResult();
    }

    public function get_all_program()
    {
        return $this->db
            ->query('select id_program, nm_prog from program')
            ->getResult();
    }

    public function get_program($id_program)
    {
        return $this->db
            ->query("select nm_prog from program where id_program = '$id_program'")
            ->getFirstRow();
    }
}

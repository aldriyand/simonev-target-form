<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Models\KinerjaModel;
use App\Models\TargetModel;
use App\Models\ProgramModel;
use App\Models\SatkerModel;
use App\Models\SubkegiatanModel;
use App\Models\SubsatkerModel;

class Dashboard extends BaseController
{
    function __construct()
    {
        $this->target_model = new TargetModel();
        $this->kegiatan_model = new KegiatanModel();
        $this->program_model = new ProgramModel();
        $this->satker_model = new SatkerModel();
        $this->subkegiatan_model = new SubkegiatanModel();
        $this->subsatker_model = new SubsatkerModel();
        $this->kinerja_model = new KinerjaModel();
    }

    public function index()
    {
        helper(['form', 'url']);
        $data['targets'] = $this->target_model->get_all_targets();
        $data['satker'] = $this->satker_model->get_all_satker();
        return view('dashboard', $data);
    }

    public function add_target()
    {
        helper(['form', 'url']);
        $this->target_model = new TargetModel();
        
        $data = array(
            'id_target' => substr(str_shuffle('1234567890'), 0, 4),
            'id_satker' => $this->request->getPost('id_satker'),
            'id_subsatker' => $this->request->getPost('id_subsatker'),
            'id_program' => $this->request->getPost('id_program'),
            'id_kegiatan' => $this->request->getPost('id_kegiatan'),
            'id_subkegiatan' => $this->request->getPost('id_subkegiatan'),
            'id_rekning' => $this->request->getPost('id_rekening'),
            'nm_rekening' => $this->request->getPost('nm_rekening'),
            'jml_pagu' => $this->request->getPost('jml_pagu'),
            'bulan_1' => $this->request->getPost('bulan_1'),
            'bulan_2' => $this->request->getPost('bulan_2'),
            'bulan_3' => $this->request->getPost('bulan_3'),
            'bulan_4' => $this->request->getPost('bulan_4'),
            'bulan_5' => $this->request->getPost('bulan_5'),
            'bulan_6' => $this->request->getPost('bulan_6'),
            'bulan_7' => $this->request->getPost('bulan_7'),
            'bulan_8' => $this->request->getPost('bulan_8'),
            'bulan_9' => $this->request->getPost('bulan_9'),
            'bulan_10' => $this->request->getPost('bulan_10'),
            'bulan_11' => $this->request->getPost('bulan_11'),
            'bulan_12' => $this->request->getPost('bulan_12'),
        );
        $insert = $this->target_model->add_target($data);
        echo json_encode(array("status" => TRUE));
    }

    public function fetch_subsatker($id_satker)
    {
        $subsatkers = $this->subsatker_model->get_subsatker_by_id_satker($id_satker);
        foreach ($subsatkers as $item) {
            echo "<option value='$item->id_subsatker'>$item->nm_subsatker</option>";
        }
        // echo json_encode($subsatkers);
    }

    public function fetch_program()
    {
        $programs = $this->program_model->get_all_program();
        foreach ($programs as $item) {
            echo "<option value='$item->id_program'>$item->nm_prog</option>";
        }
        // echo json_encode($programs);
    }

    public function fetch_kegiatan($id_program)
    {
        $kegiatans = $this->kegiatan_model->get_kegiatan_by_id_program($id_program);
        foreach ($kegiatans as $item) {
            echo "<option value='$item->id_kegiatan'>$item->nm_kgtn</option>";
        }
    }

    public function fetch_subkegiatan($id_kegiatan)
    {
        $subkegiatans = $this->subkegiatan_model->get_subkegiatan_by_id_kegiatan($id_kegiatan);
        foreach ($subkegiatans as $item) {
            echo "<option value='$item->id_subkegiatan'>$item->nm_sub_kgtn</option>";
        }
    }

    public function fetch_rekening($id_subsatker)
    {
        $rekenings = $this->kinerja_model->get_rekening_by_subsatker($id_subsatker);
        foreach ($rekenings as $item) {
            echo "<option value='$item->id_rekening'>$item->id_rekening" . " - " . $item->nm_rekening . "</option>";
        }
    }

    public function get_jml_pagu($id_subsatker, $id_rekening)
    {
        $result = $this->kinerja_model->get_jml_pagu_by_subsatker_and_rekening($id_subsatker, $id_rekening);
        echo $result->jml_pagu;
    }

    public function get_by_id($id_target)
    {
        $this->target_model = new TargetModel();

        $result = $this->target_model->get_by_id($id_target);
        $data['target'] = $result;
        $data['satker'] = $this->satker_model->get_satker($result->id_satker);
        $data['subsatker'] = $this->subsatker_model->get_subsatker($result->id_subsatker);
        $data['program'] = $this->program_model->get_program($result->id_program);
        $data['kegiatan'] = $this->kegiatan_model->get_kegiatan($result->id_kegiatan);
        $data['subkegiatan'] = $this->subkegiatan_model->get_subkegiatan($result->id_subkegiatan);

        echo json_encode($data);
    }

    public function update_target()
    {
        helper(['form', 'url']);
        $this->target_model = new TargetModel();

        $data = array(
            'id_satker' => $this->request->getPost('id_satker'),
            'id_subsatker' => $this->request->getPost('id_subsatker'),
            'id_program' => $this->request->getPost('id_program'),
            'id_kegiatan' => $this->request->getPost('id_kegiatan'),
            'id_subkegiatan' => $this->request->getPost('id_subkegiatan'),
            'id_rekning' => $this->request->getPost('id_rekening'),
            'nm_rekening' => $this->request->getPost('nm_rekening'),
            'jml_pagu' => $this->request->getPost('jml_pagu'),
            'bulan_1' => $this->request->getPost('bulan_1'),
            'bulan_2' => $this->request->getPost('bulan_2'),
            'bulan_3' => $this->request->getPost('bulan_3'),
            'bulan_4' => $this->request->getPost('bulan_4'),
            'bulan_5' => $this->request->getPost('bulan_5'),
            'bulan_6' => $this->request->getPost('bulan_6'),
            'bulan_7' => $this->request->getPost('bulan_7'),
            'bulan_8' => $this->request->getPost('bulan_8'),
            'bulan_9' => $this->request->getPost('bulan_9'),
            'bulan_10' => $this->request->getPost('bulan_10'),
            'bulan_11' => $this->request->getPost('bulan_11'),
            'bulan_12' => $this->request->getPost('bulan_12'),
        );
        $this->target_model->update_target(array('id_target' => $this->request->getPost('id_target')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function delete_by_id($id_target)
    {
        helper(['form', 'url']);
        $this->target_model = new TargetModel();
        $this->target_model->delete_by_id($id_target);
        echo json_encode(array("status" => TRUE));
    }
}

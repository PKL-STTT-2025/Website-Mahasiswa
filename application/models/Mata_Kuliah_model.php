<?php

class Mata_Kuliah_model extends CI_Model {
    public function getAllMatakuliah ()
    {
        return $this->db->get('matakuliah')->result_array();
    }
    public function tambahDataMatakuliah()
    {
       $data = [
        "matakuliah"=> $this-> input->post('matakuliah', true),
        "sandi"=> $this-> input->post('sandi', true),
        "sks"=> $this-> input->post('sks', true),
        "semester"=> $this-> input->post('semester', true)
       ] ;

        $this->db->insert ('matakuliah', $data);
    }

    public function hapusMatakuliah($id)
    {
        $this->db->delete('matakuliah', ['id'=>$id]);
    }

    public function getMatakuliahById($id)
    {
       return $this->db->get_where('matakuliah', ['id' => $id])->row_array();
    }

    public function ubahMatakuliah()
    {
    $data = [
        "matakuliah" => $this->input->post('matakuliah', true),
        "sandi" => $this->input->post('sandi', true),
        "sks" => $this->input->post('sks', true),
        "semester" => $this->input->post('semester', true)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('matakuliah', $data);
    }

    public function cariDataMatakuliah()
    {
        $keyword= $this->input->post('keyword',true);
        $this->db->like('matakuliah',$keyword);
        $this->db->or_like('sandi', $keyword);
        $this->db->or_like('sks', $keyword);
        $this->db->or_like('semester', $keyword);
        return $this->db->get('matakuliah')->result_array();
    }
}

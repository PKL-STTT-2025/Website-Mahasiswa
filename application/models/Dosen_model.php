<?php

class Dosen_model extends CI_Model {
    public function getAllDosen ()
    {
        return $this->db->get('dosen')->result_array();
    }
    public function tambahDataDosen()
    {
       $data = [
        "nama"=> $this-> input->post('nama', true),
        "nip"=> $this-> input->post('nip', true),
        "matakuliah"=> $this-> input->post('matakuliah', true),
        "email"=> $this-> input->post('email', true)
       ] ;

        $this->db->insert ('dosen', $data);
    }

    public function hapusDataDosen($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('dosen', ['id'=>$id]);
    }

    public function getDosenById($id)
    {
       return $this->db->get_where('dosen', ['id' => $id])->row_array();
    }
    public function ubahDataDosen($id)
    {
    $data = [
        "nama" => $this->input->post('nama', true),
        "nip" => $this->input->post('nip', true),
        "matakuliah" => $this->input->post('matakuliah', true),
        "email" => $this->input->post('email', true)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('dosen', $data);
    }
    public function cariDataDosen()
    {
        $keyword= $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('matakuliah', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('dosen')->result_array();
    }
}
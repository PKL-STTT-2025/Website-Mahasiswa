<?php

class MataKuliah extends CI_Controller {
    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Mata_Kuliah_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['judul']='Daftar Mata Kuliah';
        $data['matakuliah'] = $this->Mata_Kuliah_model->getAllMatakuliah();
        if($this->input->post('keyword')) {
        $data ['matakuliah']= $this->Mata_Kuliah_model->cariDataMatakuliah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('matakuliah/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul']= 'Form Tambah Mata Kuliah';
        $this->load->library('form_validation');


        $this->form_validation->set_rules('matakuliah','Matakuliah', 'required');
        $this->form_validation->set_rules('sandi','Sandi', 'required|numeric');
        $this->form_validation->set_rules('sks','SKS', 'required|numeric');
        $this->form_validation->set_rules('semester','Semester', 'required|numeric');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header' ,$data);
            $this->load->view('matakuliah/tambah', $data);
            $this->load->view('templates/footer');
        }
        else { 
            $data = [
                'matakuliah' => $this->input->post('matakuliah', true),
                'sandi' => $this->input->post('sandi', true),
                'sks' => $this->input->post('sks', true),
                'semester' => $this->input->post('semester', true)
            ];
    
            $this->Mata_Kuliah_model->tambahDataMataKuliah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('matakuliah');
        } 

    }

    public function hapus ($id)
    {
        $this->Mata_Kuliah_model->hapusMataKuliah($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('matakuliah');
    }

    public function detail ($id)
    {
        $data ['judul']= 'Detail Mata Kuliah';

        $data['matakuliah'] = $this->Mata_Kuliah_model->getMataKuliahById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
      
    $data['judul'] = 'Form Ubah Mata Kuliah';
    $data['matakuliah'] = $this->Mata_Kuliah_model->getMataKuliahById($id); 
    $data['list_matakuliah'] = ['Pengantar Teknik Industri', 'Teknik Pengukuran', 'Otomasi & Kendali Mekanik', 'Pemrograman Web'];
    

    $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
    $this->form_validation->set_rules('sandi', 'Sandi', 'required|numeric');
    $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');
    $this->form_validation->set_rules('semester', 'Semester', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('matakuliah/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mata_Kuliah_model->ubahMatakuliah();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('matakuliah');
        }
    }

}
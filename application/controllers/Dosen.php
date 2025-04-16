<?php

class Dosen extends CI_Controller {
    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Dosen_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
    $data['judul'] = 'Daftar Dosen';
    $this->load->model('Dosen_model', 'dosen');

    if ($this->input->post('keyword')) {
        $data['dosen'] = $this->dosen->cariDataDosen($this->input->post('keyword'));
    } else {
        $data['dosen'] = $this->dosen->getAllDosen();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('dosen/index', $data);
    $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Dosen';

        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('nip','NIP', 'required|numeric');
        $this->form_validation->set_rules('matakuliah','MataKuliah', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dosen/tambah');
            $this->load->view('templates/footer');
        } else { 
            $this->Dosen_model->tambahDataDosen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('dosen');
        }
    }

    public function hapus($id)
    {
        $this->Dosen_model->hapusDataDosen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dosen');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Dosen';
        $data['dosen'] = $this->Dosen_model->getDosenById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('dosen/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        if (!$id) {
            redirect('dosen');
        }

        $data['judul'] = 'Form Ubah Data Dosen';
        $data['dosen'] = $this->Dosen_model->getDosenById($id);
        $data['matakuliah'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Industri']; 

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('matakuliah', 'MataKuliah', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dosen/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dosen_model->ubahDataDosen($this->input->post('id'));
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dosen');
        }
    }
}

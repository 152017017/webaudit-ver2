<?php

class D_spm extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '6'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Anda Belum Login!!!
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>');
        redirect('auth/login');
        }
    }

    public function index(){
        //$data['user'] = $this->model_admin->tampil_data()->result();
        $this->load->view('templates_spm/header');
        $this->load->view('templates_spm/sidebar');
        $this->load->view('templates_spm/dashboard');	 //$this->load->view('templates_upm/dashboard', $data);
        $this->load->view('templates_spm/footer');
    }

    public function laporanupm(){
        //$data['user'] = $this->model_admin->tampil_data()->result();
        $this->load->view('templates_spm/header');
        $this->load->view('templates_spm/sidebar');
        $this->load->view('templates_spm/laporan_spm');	 //$this->load->view('templates_upm/dashboard', $data);
        $this->load->view('templates_spm/footer');
    }

    public function editauditor(){
        //$data['user'] = $this->model_admin->tampil_data()->result();
        $this->load->view('templates_spm/header');
        $this->load->view('templates_spm/sidebar');
        $this->load->view('templates_spm/edit_auditor');	 //$this->load->view('templates_upm/dashboard', $data);
        $this->load->view('templates_spm/footer');
    }

    public function auditorupm(){
        $this->load->view('templates_spm/header');
        $this->load->view('templates_spm/sidebar');        
        $this->load->view('templates_spm/footer');
        $this->load->view('templates_spm/auditor_spm');
    }

    public function dosenupm(){
        $this->load->view('templates_spm/header');
        $this->load->view('templates_spm/sidebar');        
        $this->load->view('templates_spm/footer');
        $this->load->view('templates_spm/dosen_spm');
    }

    public function audit(){
        $this->load->view('templates_spm/header');
        $this->load->view('templates_spm/sidebar');        
        $this->load->view('templates_spm/footer');
        $this->load->view('templates_spm/audit_spm');
    }

    public function tambahaudit(){
        $this->load->view('templates_spm/header');
        $this->load->view('templates_spm/sidebar');        
        $this->load->view('templates_spm/footer');
        $this->load->view('templates_spm/tambah-audit');
    }

    

}

<?php

class D_upm extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
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
        $this->load->view('templates_upm/header');
        $this->load->view('templates_upm/sidebar');
        $this->load->view('templates_upm/dashboard');	 //$this->load->view('templates_upm/dashboard', $data);
        $this->load->view('templates_upm/footer');
    }

    public function laporanupm(){
        //$data['user'] = $this->model_admin->tampil_data()->result();
        $this->load->view('templates_upm/header');
        $this->load->view('templates_upm/sidebar');
        $this->load->view('templates_upm/laporan_upm');	 //$this->load->view('templates_upm/dashboard', $data);
        $this->load->view('templates_upm/footer');
    }

    public function editauditor(){
        //$data['user'] = $this->model_admin->tampil_data()->result();
        $this->load->view('templates_upm/header');
        $this->load->view('templates_upm/sidebar');
        $this->load->view('templates_upm/edit_auditor');	 //$this->load->view('templates_upm/dashboard', $data);
        $this->load->view('templates_upm/footer');
    }

    public function auditorupm(){
        $this->load->view('templates_upm/header');
        $this->load->view('templates_upm/sidebar');        
        $this->load->view('templates_upm/footer');
        $this->load->view('templates_upm/auditor_upm');
    }

    public function dosenupm(){
        $this->load->view('templates_upm/header');
        $this->load->view('templates_upm/sidebar');        
        $this->load->view('templates_upm/footer');
        $this->load->view('templates_upm/dosen_upm');
    }

    public function audit(){
        $this->load->view('templates_upm/header');
        $this->load->view('templates_upm/sidebar');        
        $this->load->view('templates_upm/footer');
        $this->load->view('templates_upm/audit_upm');
    }

    public function tambahaudit(){
        $this->load->view('templates_upm/header');
        $this->load->view('templates_upm/sidebar');        
        $this->load->view('templates_upm/footer');
        $this->load->view('templates_upm/tambah-audit');
    }

    

}

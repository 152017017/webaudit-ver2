<?php

class D_tabel9s extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '3'){
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
        $this->load->view('templates_auditor/header');
        $this->load->view('templates_auditor/sidebar');
        $this->load->view('tabel/tabel-9s');					//$this->load->view('templates_auditor/dashboard', $data);
        $this->load->view('templates_auditor/footer');
    }

}

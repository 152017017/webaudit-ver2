<?php

class D_kaprodi extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
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
        $this->load->view('templates_kaprodi/header');
        $this->load->view('templates_kaprodi/sidebar');
        $this->load->view('templates_kaprodi/dashboard');					//$this->load->view('templates_kaprodi/dashboard', $data);
        $this->load->view('templates_kaprodi/footer');
    }

    function tabelauditor(){
        $this->load->view('templates_kaprodi/header');
        $this->load->view('templates_kaprodi/sidebar');
        $this->load->view('templates_kaprodi/tabel-auditor');					//$this->load->view('templates_auditor/dashboard', $data);
        $this->load->view('templates_kaprodi/footer');
    }

    function auditor(){
        $this->load->view('templates_kaprodi/header');
        $this->load->view('templates_kaprodi/sidebar');
        $this->load->view('templates_kaprodi/auditor_auditor');					//$this->load->view('templates_auditor/dashboard', $data);
        $this->load->view('templates_kaprodi/footer');
    }

    function audit(){
        $this->load->view('templates_kaprodi/header');
        $this->load->view('templates_kaprodi/sidebar');
        $this->load->view('templates_kaprodi/audit_auditor');					//$this->load->view('templates_auditor/dashboard', $data);
        $this->load->view('templates_kaprodi/footer');
    }

    function mulaiaudit(){
        $this->load->view('templates_kaprodi/header');
        $this->load->view('templates_kaprodi/sidebar');
        $this->load->view('templates_kaprodi/tambah_audit_auditor');					//$this->load->view('templates_auditor/dashboard', $data);
        $this->load->view('templates_kaprodi/footer');
    }

    function rekomen(){
        $this->load->view('templates_kaprodi/header');
        $this->load->view('templates_kaprodi/sidebar');
        $this->load->view('templates_kaprodi/rekomen_auditor');					//$this->load->view('templates_auditor/dashboard', $data);
        $this->load->view('templates_kaprodi/footer');
    }

}

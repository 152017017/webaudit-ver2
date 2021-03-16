<?php

class D_admin extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '5'){
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
		$data['user'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/dashboard', $data);					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }

    public function sidebar_dosen(){		
		$data['user'] = $this->model_admin->show_data()->result();	
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/dosen_admin', $data);				//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }

}

<?php

/**
* 
*/
class T_tabel1_1 extends CI_Controller
{
	
	public function index(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_auditor/header');
        $this->load->view('templates_auditor/sidebar');
        $this->load->view('templates_tabel_view/tabel1_1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_auditor/footer');
    }
    
   
	public function admin(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_tabel_view/tabel1_1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function edittabel(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel_edit/tambah_tabel1_1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
	}
}

?>
<?php

/**
* 
*/
class T_tabel6b extends CI_Controller
{
	
	public function index(){
		//$data['tabel1-2'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tabel6b');
        $this->load->view('templates_pic/footer');
    }
    
    public function tambahtabel(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tambah_tabel6b');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
	}
}

?>
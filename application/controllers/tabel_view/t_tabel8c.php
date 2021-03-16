<?php

/**
* 
*/
class T_tabel8c extends CI_Controller
{
	
	public function index(){
		//$data['tabel1-2'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tabel8c');
        $this->load->view('templates_pic/footer');
    }
    
    public function tambahtabeld3(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tambah_tabel8c_d3');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }

    public function tambahtabels1(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tambah_tabel8c_s1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }

    public function tambahtabels2{
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tambah_tabel8c_s2');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }

    public function tambahtabels3(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tambah_tabel8c_s3');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }
}

?>
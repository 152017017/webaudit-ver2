<?php

/**
* 
*/
class T_tabel8c extends CI_Controller
{
	
	public function index(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_auditor/header');
        $this->load->view('templates_auditor/sidebar');
        $this->load->view('templates_tabel_view/tabel8c');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_auditor/footer');
    }

    public function admin(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_tabel_view/tabel8c');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
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

    public function tambahtabels2(){
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

    public function edittabeld3(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel_edit/tambah_tabel8c_d3');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }
    
    
    public function edittabels1(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel_edit/tambah_tabel8c_s1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }
    
    
    public function edittabels2(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel_edit/tambah_tabel8c_s2');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }
    
    
    public function edittabels3(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel_edit/tambah_tabel8c_s3');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
	}
}

?>
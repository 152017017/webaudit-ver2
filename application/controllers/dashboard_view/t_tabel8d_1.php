<?php

/**
* 
*/
class T_tabel8d_1 extends CI_Controller
{
	
    public function index(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_auditor/header');
        $this->load->view('templates_auditor/sidebar');
        $this->load->view('templates_tabel_view/tabel8d_1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_auditor/footer');
    }
    
    public function admin(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_tabel_view/tabel8d_1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahtabeld3(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tambah_tabel8d_1_d3');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }

    public function tambahtabels1(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tambah_tabel8d_1_s1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }

    public function tambahtabeld4(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel/tambah_tabel8d_1_d4');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }

    public function edittabeld3(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel_edit/tambah_tabel8d_1_d3');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }
    
    public function edittabels1(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel_edit/tambah_tabel8d_1_s1');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
    }
    
    public function edittabeld4(){
		//$data['tabel1-1'] = $this->model_admin->show_data()->result();
        $this->load->view('templates_pic/header');
        $this->load->view('templates_pic/sidebar');
        $this->load->view('templates_tabel_edit/tambah_tabel8d_1_d4');					//$this->load->view('templates_admin/dashboard', $data);
        $this->load->view('templates_pic/footer');
	}
   
}

?>
<?php

class Table_manage extends CI_Controller{

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
        $this->load->view('templates_admin/dosen_admin', $data);				//$this->load->view('templates_admin/dashboard', $data); 
        $this->load->view('templates_admin/footer');
    }

    public function edit($id){
        $where = array('id' =>$id);
        $data['user'] = $this->model_admin->edit_user($where, 'dosen')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('administration/edit_page', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id             = $this->input->post('id');
        $nama			= $this->input->post('nama');
        $nim			= $this->input->post('nim');
        $jabatan		= $this->input->post('jabatan');
        $status			= $this->input->post('status');

		$data = array(
            'nama'			=> $nama,
            'nim'			=> $nim,
            'jabatan'		=> $jabatan,
            'status'		=> $status
        );

        $where = array(
            'id' => $id
        );

        $this->model_admin->update_user($where,$data,'dosen');
        redirect('admin/table_manage/index');

	}

    public function add(){
        $id             = $this->input->post('id');
        $nama			= $this->input->post('nama');
        $nim			= $this->input->post('nim');
        $jabatan		= $this->input->post('jabatan');
        $status			= $this->input->post('status');

		$data = array(
            'nama'			=> $nama,
            'nim'			=> $nim,
            'jabatan'		=> $jabatan,
            'status'		=> $status
        );

        $this->model_admin->add_user($data,'dosen');
        redirect('admin/table_manage/index');
    }


    public function update_upm(){
        $id             = $this->input->post('id');
        $nama			= $this->input->post('nama');
        $nim			= $this->input->post('nim');
        $status			= $this->input->post('status');


        $data = array(
            'nama'			=> $nama,
            'nim'			=> $nim,
            'jabatan'		=> $jabatan,
            'status'		=> $status
        );

        $where = array(
            'id' => $id
        );

        $this->model_admin->update_user($where,$data,'dosen');
        redirect('admin/table_manage/index');

	}

	public function download(){

	}

    public function delete($id){
        $where = array('id' =>$id);
        $this->model_admin->del_user($where,'dosen');
        redirect('admin/table_manage/index');
    }
}

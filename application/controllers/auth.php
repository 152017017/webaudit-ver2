<?php
class Auth extends CI_Controller {

    public function login()
    {
        $this->form_validation->set_rules('nim','NIM','required',['required' => 'Wajib diisi!']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Wajib diisi!']);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login_page');
        }else{
            $auth = $this->model_auth->verification();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        NIM atau Password Anda Salah!!!
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>');
                redirect('auth/login');
            }else{
                $this->session->set_userdata('nim',$auth->nim);
                $this->session->set_userdata('role_id',$auth->role_id);
                $this->session->set_userdata('nama',$auth->nama);


                switch($auth->role_id){
					case 1 :    redirect('dashboard/d_kaprodi');						//menuju dashboard Kaprodi
                                break;
                    case 2 :    redirect('dashboard/d_upm');							//menuju dashboard UPM
                                break;
					case 3	:	redirect('dashboard/d_auditor');						//menuju dashboard Auditor
								break;
					case 4	:	redirect('dashboard/d_pic');							//menuju dashboard PIC
                                break;
                    case 5	:	redirect('dashboard/d_admin');							//menuju dashboard admin
				    			break;
					case 6	:	redirect('dashboard/d_spm');							//meunju dashboard spm
                    default : break;
                }
            }
        }
    }

    public function logout() 
	{
        $this->session->sess_destroy();
        redirect('auth/login');
		//$this->load->view('landing_page');

    }

}

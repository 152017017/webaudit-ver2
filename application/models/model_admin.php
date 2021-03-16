<?php

class Model_admin extends CI_Model{
    public function show_data(){
        return $this->db->get('dosen');
    }

    public function add_user($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_user($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_user($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

	//public function download_user($where,$table){
    //    return $this->db->get_where($table,$where);
    //}

    public function del_user($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    //public function find($id){
    //    $result = $this->db->where('id', $id)->limit(1)->get('tb_pengajuan');
    //    if($result->num_rows() > 0){
    //        return $result->row();
    //    }else{
    //        return array();
    //    }
    //}

}

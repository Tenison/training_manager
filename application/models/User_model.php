<?php 
//User Model Start Here
class User_model extends CI_Model{ 
    public function create_user($userLevel){
        $options = ['cost'=>12];
        $encripted_pass = password_hash( $this->input->post('password'),PASSWORD_BCRYPT,$options);        
        $data=array(        
        'admin_name'   => $this->input->post('admin_name'),
        'username'   => $this->input->post('username'),
        'password'   => $encripted_pass,
        'level'     =>  $userLevel
        
        );
        $this->db->insert('users',$data);

        $insert_data = $this->db->insert_id();
        return $insert_data;
    }    
    public function login_user($username,$password){
        $tem = array();
        $this->db->where('username',$username);
        $result=$this->db->get('users');
        $db_password = $result->row(2)->password;
        if(password_verify($password,$db_password)){
            $tem['level'] = $result->row(4)->level;
            $tem['id'] = $result->row(0)->id;
            return $tem;
        }           
    }      
    public function get_users(){
        $this->db->order_by("id", "DESC");
        $query= $this->db->get('users');

            foreach($query->result() as $row) { 
                # array of arrays
                $rst[] = array("id" => $row->id, "username" => $row->username, "password" => $row->password, "admin_name" => $row->admin_name, "level" => $row->level, "date" => $row->register_date,); 
            }
            $this->db->close(); // for default Connection

        return $rst;
    }

    public function get_user($id){
        $this->db->order_by("id", "DESC");
        $this->db->where('id',$id);
        $query= $this->db->get('users');
 
        $row = $query->row();

        $this->db->close(); // for default Connection

        return $rst = array("id" => $row->id, "username" => $row->username, "password" => $row->password, "admin_name" => $row->admin_name, "level" => $row->level, "date" => $row->register_date,); 
    }

    public function update_user(){
        $options = ['cost'=>12];
        $encripted_pass = password_hash( $this->input->post('password'),PASSWORD_BCRYPT,$options);        
        $data=array(        
        'admin_name'   => $this->input->post('admin_name'),
        'username'   => $this->input->post('username'),
        'password'   => $encripted_pass,
        'level'     =>  $this->input->post('level')
        );
        
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('users', $data); 
    }
}
<?php 

class Users extends CI_Controller{
    //Here is Register Contoller    
    public function register(){
        $this->form_validation->set_rules('admin_name', 'Admins Name', 'trim|required');
        $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');    
        if($this->form_validation->run()==FALSE){        
                    
        $data['main_view'] ='users/register_view';
        $this->load->view('layouts/main',$data);           
            
        }else{
            if($this->User_model->create_user(1)){
                  $this->session->set_flashdata('user_registered','User Has Been Registered');
                  redirect('users/view');
            }
          
        }        

    }  
    
    //Here is login controller
    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        if($this->form_validation->run()==FALSE){
            $data=array(
            'errors'=>validation_errors()
            );    
           if($this->session->set_flashdata($data));
           redirect('home');  
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user =$this->User_model->login_user($username,$password);
            if($user['id']){
                $user_data=array(
                    'user_id'=>$user['id'],
                    'user_level'=>$user['level'],
                    'username'=>$username,
                    'logged_in'=>true
                );                
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success','You are now Logged In');   
               
                redirect('projects/index');
            }else{
               $this->session->set_flashdata('login_failed','Sorry! You are not now Login');
               redirect('home/index'); 
            }
        }
    }

    public function view(){
        $data['result'] =$this->User_model->get_users();
        $data['main_view'] ='user_view';
        $this->load->view('layouts/main',$data);        
    }

    public function edit($id){
        $data =$this->User_model->get_user($id);
        $data['main_view'] ='users/edit_user';
        $this->load->view('layouts/main',$data); 
    }   

    public function editted(){
        $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');    
        if($this->form_validation->run()==FALSE){        
            $data =$this->User_model->get_user($this->input->post('id'));
            $data['main_view'] ='users/edit_user';
            $this->load->view('layouts/main',$data);           
        }else{
            $this->session->set_flashdata('User editted','You have Successfully editted a User..Changes will reflect when you login again'); 
            $this->User_model->update_user();
            if($this->session->userdata('user_level') == 1)
                redirect('users/view');
            else
                redirect("projects/index");

        }        

    }       

    public function logout(){
        $this->session->sess_destroy();
        redirect('home/index');
    }
}
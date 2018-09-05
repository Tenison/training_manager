<?php 
class Projects extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('no_access','You are not allowed Here');
			redirect('home/index');
		}	
	}

	public function index(){
		

		if($this->session->userdata('user_level') == 1){
			$data['emp'] = $this->Project_model->get_projects();
			$data['main_view'] = "projects/index";
			$this->load->view('layouts/main',$data);
		}else{
			$user_id = $this->session->userdata('user_id');
			$dat = $this->Project_model->get_all_projects_mit($user_id);
			$this->display($dat->id);
		}

	}
	public function display($project_id){
		$data['completed_tasks']=$this->Project_model->get_project_tasks($project_id,true);
		$data['project_data']= $this->Project_model->get_project($project_id);
		$data['project_id'] = $project_id;
		$data['main_view'] = "projects/display";
		$this->load->view('layouts/main',$data);
	}

	public function status_change($task_id){

				$this->update_data=array(
					'status' => 0,
				);
			 	
			 	if($this->Task_model->edit_task($task_id,$this->update_data)){
			 		echo($task_id);
			 		$this->session->set_flashdata('project_appoved','Course has been Appoved');
			 		redirect("projects/appoval");
			 	}		
	}

	public function cert_bb($task_id,$project_id){
			$data['project_id'] = $project_id;
			$data['task_id'] = $task_id;
			$data['main_view'] = "projects/addcert";
			$this->load->view('layouts/main',$data);
	}

	public function report_bb($task_id,$project_id){
			$data['project_id'] = $project_id;
			$data['task_id'] = $task_id;
			$data['main_view'] = "projects/addreport";
			$this->load->view('layouts/main',$data);		
	}

	public function addcert($task_id,$project_id){
			$update_data = array();

			 $config['upload_path'] = 'upload/';
             $config['allowed_types'] = 'pdf|doc|docx';
             $config['max_size']      = '800000000';
             //$config['max_width']  = '1024';
             //$config['max_height']  = '768';

             $this->load->library('upload',$config);

 
				if ( ! $this->upload->do_upload('cert')){//file upload
					$this->update_data=array(	         	
						'cert'  => NULL
					);
				}else{
					$tem = array('upload_data' => $this->upload->data());
					$this->update_data=array(	         	
					 	'cert'  => $tem["upload_data"]["file_name"]
					);
			 	}
				 	
				if($this->Task_model->edit_task($task_id,$this->update_data)){
						$this->session->set_flashdata('project_updated','certificate has been Added');
					 	redirect("projects/display/". $project_id);
				}
	    	
	}


	public function addreport($task_id,$project_id){
			$update_data = array();

			 $config['upload_path'] = 'upload/';
             $config['allowed_types'] = 'pdf|doc|docx';
             $config['max_size']      = '800000000';
             //$config['max_width']  = '1024';
             //$config['max_height']  = '768';

             $this->load->library('upload',$config);	

				if ( ! $this->upload->do_upload('report')){//file upload
					$this->update_data=array(	         	
						'source'  => NULL
					);
				}else{
					$tem = array('upload_data' => $this->upload->data());
					$this->update_data=array(	         	
					 	'source'  => $tem["upload_data"]["file_name"]
					);
			 	}
				 	
				if($this->Task_model->edit_task($task_id,$this->update_data)){
					$this->session->set_flashdata('project_updated','Report has been Added');
				 	redirect("projects/display/". $project_id);
				}
	}

	public function addon(){
	 	$this->form_validation->set_rules('course', 'Course Name', 'trim|required');	

			 if($this->form_validation->run() ==FALSE){
			 	$data['tasks']=$this->Project_model->get_appoval_tasks();
			 	$data['project_data']= $this->Project_model->get_emp_names();
				$data['main_view'] = "projects/addon";
				$this->load->view('layouts/main',$data);
			 }else{	 
				$data1 = $this->input->post('assign'); //this returns an array so use foreach to extract data

				foreach( $data1 as $key => $value){

					$data=array(	         	
					 	'project_id' => $value,
					 	'course_name' => $this->input->post('course'),
					 	'description' => $this->input->post('description'),
					 	'source'  => null,
					 	'status' => 1
				 	);
				 	$this->Task_model->create_task($data);
				}
				redirect("projects/index");
	    	}
	}

	public function appoval(){
		$data['tasks']=$this->Project_model->get_appoval_tasks();
			 	
		$data['main_view'] = "projects/appoval";
		$this->load->view('layouts/main',$data);		
	}

	public function print_ls($project_id){
		$data['completed_tasks']=$this->Project_model->get_project_tasks($project_id,true);
		$data['project_data']=$this->Project_model->get_project($project_id);
		$this->load->view('projects/print',$data);
	}
	//Create Post
	public function create(){
		$image = null;//tem var


		$config['upload_path'] = 'userimg/';
        $config['allowed_types'] = 'gif|jpg|jpeg|jpe|png';
        $config['max_size']      = '4000000';
	

        $this->load->library('upload',$config);

		$this->form_validation->set_rules('username', 'Employee Name', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('admin_name', 'Employee Name', 'trim|required');
		$this->form_validation->set_rules('emp_position', 'Employee Position', 'trim|required');
		$this->form_validation->set_rules('emp_number', 'Phone Number', 'trim|required');
		$this->form_validation->set_rules('emp_email', 'Employee Email', 'required|valid_email');
		$this->form_validation->set_rules('emp_id', 'Employee ID', 'trim|required');	
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');    

		 if($this->form_validation->run() ==FALSE){
		 	$data['main_view'] = 'projects/create_project';
		 	$this->load->view('layouts/main',$data);
		 }else{
				if ( ! $this->upload->do_upload('image')){//file upload
					$this->image = null;
				}else{
					$tem = array('upload_data' => $this->upload->data());
				 	$this->image = $tem["upload_data"]["file_name"];
			 	}//end else

			 	 $user_i_d = $this->User_model->create_user(2);

				 $data=array(
		         	'emp_user_id' => $user_i_d,
				 	'emp_name' => $this->input->post('admin_name'),
				 	'gender' => $this->input->post('gender'),
				 	'emp_position' => $this->input->post('emp_position'),
				 	'emp_email' => $this->input->post('emp_email'),
				 	'emp_number' => $this->input->post('emp_number'),
				 	'emp_id' => $this->input->post('emp_id'),
				 	'image' => $this->image
				 );


				 if($this->Project_model->create_project($data)){
				 	$this->session->set_flashdata('project_created','User Data Has Been Created');
				 	redirect("projects/index");
				 }
    	}
	}

	//Edit Single Post 
		public function edit($project_id){
			$update_data = array();

			$config['upload_path'] = 'userimg/';
	        $config['allowed_types'] = 'gif|jpg|jpeg|jpe|png';
	        $config['max_size']      = '4000000';


	        $this->load->library('upload',$config);

			$this->form_validation->set_rules('admin_name', 'Employee Name', 'trim|required');
			$this->form_validation->set_rules('emp_position', 'Employee Position', 'trim|required');
			$this->form_validation->set_rules('emp_number', 'Phone Number', 'trim|required');
			$this->form_validation->set_rules('emp_email', 'Employee Email', 'required|valid_email');
			$this->form_validation->set_rules('emp_id', 'Employee ID', 'trim|required');	  
			if($this->form_validation->run() ==FALSE){			 	
			 	$data['project_data'] = $this->Project_model->get_projects_info($project_id);
			 	$data['main_view'] = 'projects/edit_project';
			 	$this->load->view('layouts/main',$data);
			}else{
				if (! $this->upload->do_upload('image')){//file upload
				 	$this->update_data=array(
					 	'emp_name' => $this->input->post('admin_name'),
					 	'gender' => $this->input->post('gender'),
					 	'emp_position' => $this->input->post('emp_position'),
					 	'emp_email' => $this->input->post('emp_email'),
					 	'emp_number' => $this->input->post('emp_number'),
					 	'emp_id' => $this->input->post('emp_id'),
				 	);
				 	
				}else{
					$tem = array('upload_data' => $this->upload->data());
					$this->update_data=array(
					 	'emp_name' => $this->input->post('admin_name'),
					 	'gender' => $this->input->post('gender'),
					 	'emp_position' => $this->input->post('emp_position'),
					 	'emp_email' => $this->input->post('emp_email'),
					 	'emp_number' => $this->input->post('emp_number'),
					 	'emp_id' => $this->input->post('emp_id'),
					 	'image' => $tem["upload_data"]["file_name"]
					);
					
			 	}//end else
			 	
			 	if($this->Project_model->edit_project($project_id,$this->update_data)){
			 		$this->session->set_flashdata('project_updated','Employee data Has Been Updated');
			 		redirect("projects/index");
			 	}
	    	}

		}
		//Delete Project 

		public function delete($emp_id,$project_id){
			if ($this->Project_model->get_source($project_id)) {
				foreach ($this->Project_model->get_source($project_id) as $sources){
					$this->del_file($sources->source);
				}
				foreach ($this->Project_model->get_cert($project_id) as $certs){
					$this->del_file($certs->cert);
				}
			}
			$this->Project_model->delete_task($project_id);
			$this->Project_model->delete_user($emp_id);
			$this->Project_model->delete_project($project_id);
			$this->session->set_flashdata('project_deleted','Employee data Has Been Deleted');
			redirect("projects/index");

		}

		public function del_file($con_id){
			$path = str_replace( "\\" , "/" , getcwd()).'/upload/';
			$get_file = $path.$con_id;
			if(file_exists($get_file)){
			   unlink($get_file);
			}
		}
}
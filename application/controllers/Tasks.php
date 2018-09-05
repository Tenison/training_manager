<?php 
class Tasks extends CI_Controller{
	public function display($course_id){
		$data['course_id'] = $course_id;
		$data['task'] = $this->Task_model->get_task($course_id);
		$data['main_view'] = "tasks/display";
		$this->load->view('layouts/main',$data);
	}
		//Create Post
		public function create($emp_id){
			$report_file = NULL;

			 $config['upload_path'] = 'upload/';
             $config['allowed_types'] = 'pdf|doc|docx';
             $config['max_size']      = '800000000';
             //$config['max_width']  = '1024';
             //$config['max_height']  = '768';

             $this->load->library('upload',$config);

			 $this->form_validation->set_rules('course', 'Course Name', 'trim|required');	
			 $this->form_validation->set_rules('description', 'Description', 'trim|required');	

			 if($this->form_validation->run() ==FALSE){
			 	$data['main_view'] = 'tasks/create_task';
			 	$this->load->view('layouts/main',$data);
			 }else{	 
				if ( ! $this->upload->do_upload('report')){//file upload
					$this->report_file = NULL;
				}else{
					$tem = array('upload_data' => $this->upload->data());
					$this->report_file = $tem["upload_data"]["file_name"];
			 	}

				 $data=array(	         	
				 	'project_id' => $emp_id,
				 	'course_name' => $this->input->post('course'),
				 	'description' => $this->input->post('description'),
				 	'source'  => $this->report_file
				 );
			 	//sunset
			 	if($this->Task_model->create_task($data)){
			 		$this->session->set_flashdata('task_created','Training Has Been Created');
			 		redirect("projects/display/".$emp_id);
			 	}
	    	 }
		}

		//Edit Task Post
		public function edit($task_id){
			$update_data = array();

			 $config['upload_path'] = 'upload/';
             $config['allowed_types'] = 'pdf|doc|docx';
             $config['max_size']      = '800000000';
             //$config['max_width']  = '1024';
             //$config['max_height']  = '768';

             $this->load->library('upload',$config);

			 $this->form_validation->set_rules('course', 'Course Name', 'trim|required');	
			 $this->form_validation->set_rules('description', 'Description', 'trim|required');	

			if($this->form_validation->run() ==FALSE){
			 	$data['the_task'] = $this->Task_model->get_task($task_id);
			 	$data['main_view'] = 'tasks/edit_task';
			 	$this->load->view('layouts/main',$data);
			}else{	 
				if ( ! $this->upload->do_upload('report')){//file upload
					$this->update_data=array(	         	
					 	'course_name' => $this->input->post('course'),
					 	'description' => $this->input->post('description')
					);
				}else{
					$tem = array('upload_data' => $this->upload->data());
					$this->update_data=array(	         	
					 	'course_name' => $this->input->post('course'),
					 	'description' => $this->input->post('description'),
					 	'source'  => $tem["upload_data"]["file_name"]
					);
			 	}
				 	
				if($this->Task_model->edit_task($task_id,$this->update_data)){
				 	$this->session->set_flashdata('task_updated','Training Has Been Updated');
				 	redirect("tasks/display/".$task_id);
				}

	    	}
		}

		//Delete Task 
		public function delete( $project_id , $task_id){
			$this->del_file($this->Task_model->get_source($task_id)->source);
			$this->del_file($this->Task_model->get_cert($task_id)->cert);

			$this->Task_model->delete_task($task_id);
			$this->session->set_flashdata('task_deleted','Training Has Been Deleted');
			redirect("projects/display/".$project_id);
		}

		public function delete_appvl( $task_id){
			$this->Task_model->delete_task($task_id);
			$this->session->set_flashdata('approval_deleted','Training Has Been Deleted');
			redirect("projects/appoval/");
		}

		public function del_file($con_id){
			$path = str_replace( "\\" , "/" , getcwd()).'/upload/';
			$get_file = $path.$con_id;
			if(file_exists($get_file)){
			   unlink($get_file);
			}
		}

		public function print_ls($project_id, $course_id){
			$data['task'] = $this->Task_model->get_task($course_id);
			$data['project_data']=$this->Project_model->get_project($project_id);
			$this->load->view('tasks/print',$data);
		}

		public function download($fileName = NULL) {  
			$this->load->helper('download'); 
		   if ($fileName) {
			    $file = 'upload/'. $fileName;
			    // check file exists    
			    if (file_exists ( $file )) {
			     // get file content
			     $data = file_get_contents ( $file );
			     //force download
			     force_download ( $fileName, $data);
			    }
		   }else{
		   	echo "<h4>Error 1010</h4>";
		   	echo "<p></p>";
		   	echo "<h3>No report FILE attached!!!</h3>";
		   }
		}

	public function clear_files($task_id){	
		$this->update_data=array(	         	
			'source'  => NULL,
			'cert' => NULL
		);
		$this->del_file($this->Task_model->get_source($task_id)->source);
		$this->del_file($this->Task_model->get_cert($task_id)->cert);
				 	
		if($this->Task_model->edit_task($task_id,$this->update_data)){
			$this->session->set_flashdata('task_deleted','Uploaded files have been cleared');
			redirect("tasks/display/".$task_id);
		}
	}
}
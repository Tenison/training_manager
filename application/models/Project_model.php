<?php 
//Project Model Start Here
class Project_model extends CI_Model{
	public function get_projects(){
		$this->db->order_by("id", "DESC");
		$query= $this->db->get('projects');
		return $query->result();
	}
	public function get_project($id){
		$this->db->where('id',$id);
		$this->db->order_by("id", "DESC");
		$query= $this->db->get('projects');
		return $query->row();		
	}
	public function get_all_projects($user_id){
		$this->db->where('emp_user_id',$user_id);
		$this->db->order_by("id", "DESC");
		$query =$this->db->get('projects');
		return $query->result();
	}
	public function get_all_projects_mit($user_id){
		$this->db->where('emp_user_id',$user_id);
		$this->db->order_by("id", "DESC");
		$query =$this->db->get('projects');
		return $query->row();
	}
	public function create_project($data){
		$insert_query = $this->db->insert('projects',$data);
		return $insert_query;
	}
	public function edit_project($project_id, $data){
		$this->db->where('id',$project_id);
		$this->db->update('projects',$data);
		return true;
	}
	public function delete_project($project_id){
		$this->db->where('id',$project_id);
		$this->db->delete('projects');

	}

	public function delete_task($project_id){
		$this->db->where('project_id',$project_id);
		$this->db->delete('tasks');

	}

	public function delete_user($emp_id){
		$this->db->where('id',$emp_id);
		$this->db->delete('users');

	}
	public function get_projects_info($project_id){
		$this->db->where('id',$project_id);
		$this->db->order_by("id", "DESC");
		$get_data=$this->db->get('projects');
		return $get_data->row();
	}
	//Query for Inner Join for project and Task.
	public function get_project_tasks($project_id,$active=tured){
		//join Table query
		$this->db->select('
			tasks.course_name,
			tasks.cert,
			tasks.status,
			tasks.source,
			tasks.date_created,
			tasks.id as task_id,
			projects.emp_name,
			projects.emp_position,
			projects.emp_id,
			projects.emp_number

		');
		$this->db->from('tasks');
		$this->db->join('projects','projects.id = tasks.project_id');
		$this->db->order_by("tasks.id", "DESC");
		$this->db->where('tasks.project_id',$project_id);
		/*if($active == true){
			$this->db->where('tasks.status',0);
		}else{
			$this->db->where('tasks.status',1);
		}*/
		$query = $this->db->get();

		if ( $query -> num_rows() < 1) {
			return false;
		}
		return $query->result();
		
	}

		//Query for Inner Join for project and Task.
	public function get_appoval_tasks(){
		//join Table query
		$this->db->select('
			tasks.course_name,
			tasks.cert,
			tasks.status,
			tasks.date_created,
			tasks.id as task_id,
			projects.emp_name,
			projects.emp_id,

		');
		$this->db->from('tasks');
		$this->db->join('projects','projects.id = tasks.project_id');
		$this->db->order_by("tasks.id", "DESC");

		$this->db->where('tasks.status',1);
		$query = $this->db->get();

		if ( $query -> num_rows() < 1) {
			return false;
		}
		return $query->result();
		
	}

	public function get_source($project_id){
	
		$this->db->select('source');
		$this->db->from('tasks');
		$this->db->where('project_id',$project_id);
		$this->db->order_by("id", "DESC");

		$query = $this->db->get();

		if ( $query -> num_rows() < 1) {
			return false;
		}
		return $query->result();
		
	}

	public function get_cert($project_id){
	
		$this->db->select('cert');
		$this->db->from('tasks');
		$this->db->where('project_id',$project_id);
		$this->db->order_by("id", "DESC");

		$query = $this->db->get();

		if ( $query -> num_rows() < 1) {
			return false;
		}
		return $query->result();
		
	}

	public function get_emp_names(){
		$this->db->select('emp_name, id');
		$this->db->from('projects');

		$query = $this->db->get();

		if ( $query -> num_rows() < 1) {
			return false;
		}
		return $query->result();
	}

}
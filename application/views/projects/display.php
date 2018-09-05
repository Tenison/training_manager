<div class="">
	<div class="row">
		<div class="col-sm-7 col-md-6 col-lg-5">
			<img src="<?php echo base_url().'/userimg/'.$project_data->image; ?>" alt="Profile Image go HERE!!!" style="border-radius: 8px; max-width: 300px; max-height: 300px "/>
		</div>
		<div class="col-sm-5 col-md-6 col-lg-7">
		  <table class="table table-hover">
		    <tbody>
		      <tr>
		        <td style="width: 25%">Employee <br>Name</td>
		        <td><h4><?php echo $project_data->emp_name;?></h4></td>
		      </tr>
		      <tr>
		        <td style="width: 25%">Employee ID</td>
		        <td><?php echo $project_data->emp_id;?></td>
		      </tr>
		      <tr>
		        <td style="width: 25%">Position</td>
		        <td><?php echo $project_data->emp_position;?></td>
		      </tr>
		      <tr>
		        <td style="width: 25%">Number</td>
		        <td><?php echo $project_data->emp_number;?></td>
		      </tr>
		      <tr>
		      	<td>
		      		<a class="btn btn-success" href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id;?>">Edit Employee Data</a>
		      	</td>
		      </tr>
		      	
		    </tbody>
		  </table>
		</div>
	</div>
	<p class="bg-success">
	    <?php if($this->session->flashdata('User editted')):?>    
	    <?php echo $this->session->flashdata('User editted');?>
	    <?php endif;?>   
	</p>
	<p class="bg-success">
	    <?php if($this->session->flashdata('project_updated')):?>    
	    <?php echo $this->session->flashdata('project_updated');?>
	    <?php endif;?>   
	</p>
	
	<hr>
	<!-- Join Table Data show here -->
	<h3 class=""> Training
	<div class="dropdown pull-right">
	  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	    Options 
	    <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	  	<?php if($this->session->userdata('user_level') == 2):?>
		    <li><a href="<?php echo base_url();?>users/edit/<?php echo $this->session->userdata('user_id'); ?>">Edit User Profile</a></li>
		    <li role="separator" class="divider"></li>
	    <?php endif;?>
	  	<?php if($this->session->userdata('user_level') == 1):?>
		    <li><a href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id;?>">Add New Training</a></li>
		    <li role="separator" class="divider"></li>
	    <?php endif;?>
	    <li></li>
		<li><a href="<?php echo base_url();?>projects/print_ls/<?php echo $project_data->id;?>">Print Employee Data</a></li>
		<?php if($this->session->userdata('user_level') == 1):?>
		    <li><a onclick="return confirm_click();" href="<?php echo base_url();?>projects/delete/<?php echo $project_data->emp_user_id;?>/<?php echo $project_data->id;?>">Delete Emplayee Data</a>
		    </li>
		<?php endif;?>


	  </ul>
	</div>
	</h3>
	<?php if($completed_tasks):    ?>
		<table class="table  table-hover">
			  <tr>
			    <th></th>
			    <th></th>
			    <th></th>
			  </tr>
		    <tbody>
		        <?php  foreach ($completed_tasks as $task):?>
		            <tr>
		               <td>
		               	<?php if($task->status == 0):?>
		               		<p class="" style="color:#2D2D2D;" >
					    		<i class="fa fa-check" style="color:green; display: inline;"></i> APVD
					    	</p>
					    <?php endif;?>							
						<?php if($task->status == 1):?>
		               		<p class="" style="color:#2D2D2D; display: inline;">
					    		<i class="fa fa-exclamation " style="color:red;"></i>&nbsp PEND
					    	</p>
						<?php endif;?>
		               </td>
		               <td>
		               		<?php if($task->status != 1):?>
			               		<a class="lead" href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">
						    		<?php echo $task->course_name; ?>
						    	</a>
					    	<?php else:?>
					    		<p class="lead"><?php echo $task->course_name; ?></p>
					    	<?php endif;?>
		               </td>
		               <?php if($task->status != 1):?>
			               <td style="padding-right: 0; padding-left: 0; margin-right: 0;">
			               		<?php if($task->cert == NULL):?>
			               			<a class="btn btn-danger pull-right" href="<?php echo base_url(); ?>projects/cert_bb/<?php echo $task->task_id. '/' . $project_id; ?>">Add Cert </a>
			               		<?php else:?>
			      					<a class="btn btn-warning pull-right" href="<?php echo base_url();?>tasks/download/<?php echo $task->cert;?>">Cert </a>
			      				<?php endif;?>
			               </td> 
			               <td style="padding-right: 0; padding-left: 5px;margin-right: 0;margin-left: 0">
			               		<?php if($task->source == NULL):?>
			               			<a class="btn btn-danger pull-right" href="<?php echo base_url(); ?>projects/report_bb/<?php echo $task->task_id. '/' . $project_id;?>">Add Report</a>
			               		<?php else:?>
			      					<a class="btn btn-success pull-right" href="<?php echo base_url();?>tasks/download/<?php echo $task->source;?>">Report </a>
			      				<?php endif;?>
			               </td> 
			               <td style="padding-right: 0; padding-left: 5px;margin-right: 0; margin-left: 5px;">
			               		<a class="btn btn-primary pull-right" href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>"> View</a>
			               </td> 
			           <?php else:?>
			               <td>
			               </td> 
			               <td>
			               	<p class="pull-right"> Training Subject to Review</p>
			               </td>
			               <td>
			               	<p class="pull-right"><?php echo $task->date_created;?></p>
			               </td>		          
		               <?php endif;?>  
		            </tr>
		        <?php endforeach;?> 
		    </tbody>
		</table>
		<?php else: ?>
		<ul>
			<p>No Info Added Yet</p>
		</ul>
	<?php endif; ?>
</div>
<script type="text/javascript">
  function confirm_click(){
  return confirm("Are you sure you want delete ?");
  }
</script>

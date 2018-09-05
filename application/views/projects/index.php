<h2>Manage Employee Data Here</h2>
<p class="bg-success">
    <?php if($this->session->flashdata('project_created')):?>
    
    <?php echo $this->session->flashdata('project_created');?>
    <?php endif;?> 
    <?php if($this->session->flashdata('project_updated')):?>    
    <?php echo $this->session->flashdata('project_updated');?>
    <?php endif;?>
    <?php if($this->session->flashdata('project_deleted')):?>    
    <?php echo $this->session->flashdata('project_deleted');?>
   <?php endif;?>  
	<!-- Task Created Message -->
    <?php if($this->session->flashdata('task_created')):?>    
    <?php echo $this->session->flashdata('task_created');?>
    <?php endif;?> 
    <!-- Task Updated Message -->
    <?php if($this->session->flashdata('task_updated')):?>    
    <?php echo $this->session->flashdata('task_updated');?>
    <?php endif;?>     
</p>
<p style="margin-bottom: 50px;">
	<a href="<?php echo base_url();?>projects/create" class="btn btn-primary pull-right">Create Employee Data</a>
</p>

<table class="table  table-hover">
    <tr>
        <thead class="thead-dark">
            <th class="lead">Employee Name</th>
            <th class="lead">Position</th>
            <th class="lead">Action</th>
        </thead>
    </tr>
	<tbody>
		<?php foreach($emp as $key): ?>
			<tr>
			   <?php echo "<td class='lead'><a  href='".base_url()."projects/display/".$key->id."'>".$key->emp_name."</a></td>"?> 
			   <?php echo "<td>".$key->emp_position."</td>"?> 
			   <td><a class="btn btn-primary" href="<?php echo base_url();?>projects/edit/<?php echo $key->id; ?>"><span class="">Edit</span></a>
			   <a class="btn btn-danger confirmation" href="<?php echo base_url();?>projects/delete/<?php echo $key->emp_user_id;?>/<?php echo $key->id;?>"><span class="glyphicon glyphicon-remove"></span></a></td>			       
		    </tr>
		<?php endforeach;?>	
	</tbody>
</table>

<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure you want to delete this?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
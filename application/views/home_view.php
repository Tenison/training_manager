<p class="bg-success">
    <?php if($this->session->flashdata('login_success')):?>    
    <?php echo $this->session->flashdata('login_success');?>
    <?php endif;?>   
    <?php if($this->session->flashdata('user_registered')):?>    
    <?php echo $this->session->flashdata('user_registered');?>
    <?php endif;?>   
</p>
<p class="bg-danger">  
    <?php if($this->session->flashdata('login_failed')):?>    
    <?php echo $this->session->flashdata('login_failed');?>
    <?php endif;?>   
    <?php if($this->session->flashdata('no_access')):?>    
    <?php echo $this->session->flashdata('no_access');?>
    <?php endif;?>    
</p>
<div class="jumbotron" style="background-color: #337AB7;">
    <h2 class="text-center" style="color: white;">Welcome to Training Admin App</h2>
    <p style="text-align: center; padding-bottom: 0px; margin-bottom: 0px; color: white;">Ghana Civil Aviation Authority</p>
</div>
<?php if(isset($projects)):?>
<div class="welcome-area">
   <h3>Manage Employees from the manage Tab</h3>
   <p></p>
</div>
<table class="table  table-hover">
    <tr>
        <thead class="thead-dark">
            <th>Employee Name</th>
            <th>Position</th>
            <th>Action</th>
        </thead>
    </tr>
    <tbody>
        <?php foreach($emp as $key): ?>
            <tr>
               <td><?php echo $key->emp_name;?></td>
               <td><?php echo $key->emp_position;?></td>                
               <td><a class="btn btn-primary" href="<?php echo base_url();?>projects/display/<?php echo $key->id; ?>"> View</a></td>   
            </tr>
        <?php endforeach;?> 
    </tbody>
</table>
<?php else :?>
    <div style="width: 100%; text-align: center;">
        <img src="<?php echo base_url();?>img/GCAA.jpg?>">
    </div> 
<?php endif;?>
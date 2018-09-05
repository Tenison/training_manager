
<h2>Training Details and Description</h2>
<?php if($this->session->userdata('user_level') == 1):?>
<kbd>Options are on the table below</kbd>
<?php endif;?> 
<?php echo $task->date_created;?>
<p></p>
<?php if($this->session->userdata('user_level') == 1):?>
<table class="table table-bordered">
    <tr>
        <th><a href="<?php echo base_url();?>tasks/edit/<?php echo $task->id; ?>">edit</a></th>
        <th><a onclick="return confirm_click();" href="<?php echo base_url();?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">delete</a> </th>
        <th><a href="<?php echo base_url();?>tasks/print_ls/<?php echo $task->project_id; ?>/<?php echo $course_id; ?>">Print <span>Training Details</span></a> </th>
        <!--<th><a href="<?php //echo base_url();?>tasks/download/<?php //echo $task->source;?>">Report </a><code> Click to Download</code></th>-->
    </tr>        
</table>
<?php endif ?>
          <h2 class="lead"><code>Training Title</code> : <?php echo $task->course_name;?></h2>
          <hr>
          <h2 class="lead"><code>Training Description</code></h2>
          <h4 class="lead"><?php echo $task->description;?></h4> 
          <hr>  
           
          <h4 >
            <code>Report file:</code> <?= $task->source?$task->source:"No file Added." ?>
            <?php if($this->session->userdata('user_level') == 2):?>
              <a onclick="return confirm_clear();" class="btn btn-primary pull-right" href="<?php echo base_url();?>tasks/clear_files/<?php echo $course_id; ?>"> Clear Uploaded Files</a>
            <?php endif ?>  
          </h4>
          <h4 ><code>Cert file:</code> <?= $task->cert?$task->cert:"No file Added" ?></h4>
          <div style="padding-top: 10px"></div>

          <?php if($this->session->userdata('user_level') == 2):?>
            <a href="<?php echo base_url();?>tasks/print_ls/<?php echo $task->project_id;?>/<?php echo $course_id;?>">Print <span>Training Details</span></a>
          <?php endif ?>    

<script type="text/javascript">
  function confirm_click(){
  return confirm("Are you sure you want delete ?");
  }
  function confirm_clear(){
  return confirm("Do you really want to clear files? Please download copies of needed files before performimg this action!!!");
  }
</script>
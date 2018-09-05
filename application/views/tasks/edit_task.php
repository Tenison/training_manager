<h2>Edit Training</h2>
<hr>
<?php $attributes= array('id'=>'eidt_task_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'></p>");?>
<?php echo form_open_multipart('tasks/edit/'.$this->uri->segment(3) .'',$attributes);?>
<div class="form-group">
    <?php echo form_label('Training Title');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'course',
        "value" => $the_task->course_name
    );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Training Description');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'description',
        "value" => $the_task->description
    );
    ?>
    <?php echo form_textarea($data); ?>
</div>
<div class="form-group">
    <p><kbd>Report and Cert must be Added accordingly!!! </kbd></p>
    <hr>
</div>
<div class="form-group">
    <?php
    $data = array(
        "class" => 'btn btn-primary',
        "name" => 'submit',
        "value" => 'Update'
    );
    ?>
    <?php echo form_submit($data); ?>
</div>
<script type="text/javascript">
    window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 100);
        function submitform(){
          //alert('project_name');
          document.forms["eidt_task_form"].submit();
        }
        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
        }
    }
</script>
<?php echo form_close(); ?>


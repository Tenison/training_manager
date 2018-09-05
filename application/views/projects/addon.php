
<h2>Add New Employee Training</h2>
<hr>
<?php $attributes= array('id'=>'resgister_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'></p>");?>
<?php echo form_open('projects/addon',$attributes);?>

<div class="form-group">
    <?php echo form_label('Training Title');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'course',
        "placeholder" => 'Enter Your Training Title'
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
        "placeholder" => 'Enter a small Description',
    );
    ?>
    <?php echo form_textarea($data); ?>
</div>
<div>
    <?php echo form_label('Select Employees for the Training');?>
    <br>
    <hr>
    <?php if (!empty($project_data) ) : ?>
        <?php foreach($project_data as $key): ?>
        <?php echo form_checkbox("assign[]", $key->id); echo  $key->emp_name;?><br>
        <?php endforeach;?>
    <?php endif;?> 
    <br>
</div>

<div class="form-group">
    <?php
    $data = array(
        "class" => 'btn btn-primary',
        "name" => 'submit',
        "value" => 'Create'
    );
    ?>
    <?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>


<p></p>
<hr>

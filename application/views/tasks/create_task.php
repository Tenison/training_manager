<h2>Add a new Training</h2>
<hr>
<?php $attributes= array('id'=>'resgister_form','class'=>'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'></p>");?>

<?php echo form_open_multipart('tasks/create/'.$this->uri->segment(3) .'',$attributes);?>
<div class="form-group">
    <?php echo form_label('Training title');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'course',
        "placeholder" => 'Enter Your Training Name'
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
<div class="form-group">
    <p>Add Microsoft Document OR PDF as Report</p>
    <code>Attach the Certificate to the Report Microsoft Document</code> <span>If you have Both</span><P></P>
    <span>You can also upload either <code>Report</code> or <code>Certificate</code> if you have any</span>
    <code>You can also upload later by using </code><span>EDIT</span>
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


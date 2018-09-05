<h2>Register Form</h2>
<?php $attributes= array('id'=>'resgister_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'></p>");?>
<?php echo form_open('users/register',$attributes);?>
<div class="form-group">
    <?php echo form_label('Administrator Name');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'admin_name',
        "placeholder" => 'Enter Administrator, Name'
    );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('username');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'username',
        "placeholder" => 'Enter Your Name'
    );
    ?>
    <?php echo form_input($data); ?>
    <p></p>
    <kbd>This is your</kbd> <code>Unique login</code> <kbd>Id or Username</kbd>
    <kbd>At least</kbd> <code>Five</code> <kbd>Charaters</kbd>
</div>
<div class="form-group">
    <?php echo form_label('Password'); ?>
    <?php
    $data = array(
        "class" => 'form-control',
        "name" => 'password',
        "placeholder" => 'Enter Your Password'
    );
    ?>
    <?php echo form_password($data); ?>
    <p></p>
    <kbd>At least</kbd> <code>Four</code> <kbd>Or More Charaters</kbd>   
</div>
<div class="form-group">
    <?php echo form_label('Confirm Password'); ?>
    <?php
    $data = array(
        "class" => 'form-control',
        "name" => 'passconf',
        "placeholder" => 'Enter Your Confirm Password'
    );
    ?>
    <?php echo form_password($data); ?>
</div>
<div class="form-group">
    <?php
    $data = array(
        "class" => 'btn btn-primary',
        "name" => 'submit',
        "value" => 'Register'
    );
    ?>
    <?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>


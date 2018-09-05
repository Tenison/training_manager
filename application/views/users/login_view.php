<?php if($this->session->userdata('logged_in')):?>
  <h3>
    <?php if($this->session->userdata('username')):?>
    <?php echo "Welcome"." " .$this->session->userdata('username');?>
    <?php endif;?>
  </h3>
    <?php echo form_open('users/logout'); ?>
    <p>You are now Logged in</p>
    <?php 

        $data=array(
        'class'=>'btn btn-primary',
        'name'=>'submit',
        'value'=>'Logout'        
        );
     ?>
     <?php echo form_submit($data);?>    
   <?php echo form_close(); ?>      
<?php else:?>
<h2>Login Form</h2>
<?php $attributes= array('id'=>'login_form','class'=>'form_horizontal');?>
<?php if($this->session->flashdata('errors')):?>
<?php echo $this->session->flashdata('errors');?>
<?php endif;?>
<?php echo form_open('users/login',$attributes);?>
<div class="form-group">
    <?php echo form_label('User name');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'username',
        "placeholder" => 'Enter Your Name'
    );
    ?>
    <?php echo form_input($data); ?>
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
</div>
<div class="form-group">
    <?php
    $data = array(
        "class" => 'btn btn-primary',
        "name" => 'submit',
        "value" => 'Login'
    );
    ?>
    <?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>
<?php endif; ?>


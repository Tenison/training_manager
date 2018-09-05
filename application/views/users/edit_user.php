<h2>Edit User</h2>
<?php $attributes= array('id'=>'resgister_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'></p>");?>
<?php echo form_open('users/editted',$attributes);?>
<!-- /.row -->
<div class="row">

    <div class="col-md-9">
        <div class="form-group">
            <?php echo form_label('username');?>
            <?php 
            $data=array(
                "class"=>'form-control',
                "name" => 'username',
                "placeholder" => 'Enter Your Name',
                "value" => $username
            );
            ?>
            <?php echo form_input($data); ?>
        </div>
        <p></p>
        <kbd>This is your</kbd> <code>Unique login</code> <kbd>Id or Username</kbd>
        <kbd>At least</kbd> <code>Five</code> <kbd>Charaters</kbd>
    </div>
    <div class="col-md-3" >
    </div>
</div>


    <div class="form-group">
            <?php 
            $data=array(
                "admin_name" => $admin_name,
                "conold_password" => $password,
                "level" => $level, 
                "id" => $id
            );
            ?>
            <?php echo form_hidden($data); ?>
    </div>


<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <?php echo form_label('New Password'); ?>
            <?php
            $data = array(
                "class" => 'form-control',
                "name" => 'password',
                "placeholder" => 'Enter New Password'
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
    </div>
</div>

<div class="form-group">
    <?php
    $data = array(
        "class" => 'btn btn-primary',
        "name" => 'submit',
        "value" => 'Change'
    );
    ?>
    <?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>


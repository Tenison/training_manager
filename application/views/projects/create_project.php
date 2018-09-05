<h2>Create Employee Data</h2>
<hr>
<?php $attributes= array('id'=>'resgister_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'></p>");?>
<?php echo form_open_multipart('projects/create',$attributes);?>
<div class="form-group" style="">
    <?php echo form_label('Please Add Your Image: ');?></br>
    <img id="blahs" src="#" alt="" style="border-radius: 8px; max-width: 300px; max-height: 300px"/>
    <p></p>
    <input type="file" name="image" size="20" onchange="readURL(this);"/>
</div>
<div class="form-group">
    <?php echo form_label('Employee Name');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'admin_name',
        "placeholder" => 'Enter Your Employee Name'
    );
    ?>
    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Male');?>
    <?php 
        $data = array(
                'name'          => 'gender',
                'id'            => 'M',
                'value'         => 'Male',
                'checked'       => TRUE,
                'style'         => 'margin:10px'
        );
    ?>
    <?php echo form_radio($data); ?>
    <?php echo form_label('Female');?>
    <?php 
        $data = array(
                'name'          => 'gender',
                'id'            => 'F',
                'value'         => 'Female',
                'style'         => 'margin:10px'
        );
    ?>
    <?php echo form_radio($data); ?>

</div>

<div class="form-group">
    <?php echo form_label('Employee Position');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'emp_position',
        "placeholder" => 'Enter Your Employee Position'
    );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Phone Number ');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'emp_number',
        "placeholder" => 'Enter Your Phone Number'
    );
    ?>
    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Email');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'emp_email',
        "placeholder" => 'Enter Your Email'
    );
    ?>
    <?php echo form_input($data); ?>
    <p></p>
    <code>Example :</code> <kbd>test@gmail.com</kbd>
</div>

<div class="form-group">
    <?php echo form_label('Employee ID');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'emp_id',
        "placeholder" => 'Enter Your Employee ID'
    );
    ?>
    <?php echo form_input($data); ?>
    <p></p>
    <code>Use ID employee number :</code> <kbd>500560</kbd>
</div>

<div class="form-group">
    <?php echo form_label('Login username');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'username',
        "placeholder" => 'Enter Your User Name'
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
        "value" => 'Create'
    );
    ?>
    <?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blahs')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(190);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
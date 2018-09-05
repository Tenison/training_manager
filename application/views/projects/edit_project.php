<h2>Edit Project</h2>
<hr>
<?php $attributes= array('id'=>'edit_resgister_form','class'=>'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'></p>");?>

<?php echo form_open_multipart("projects/edit/$project_data->id",$attributes);?>
<div class="form-group" style="">
    <?php echo form_label('Please Add Your Image: ');?></br>
    <img id="blahs" src="<?php echo base_url().'userimg/'.$project_data->image; ?>" alt="" style="border-radius: 8px; max-width: 300px; max-height: 300px"/>
    <p></p>
    <input type="file" name="image" size="20" onchange="readURL(this);"/>
</div>
<div class="form-group">
    <?php echo form_label('Employee Name');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'admin_name',
        "placeholder" => 'Enter Your Employee Name',
        "value" => $project_data->emp_name
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
                'style'         => 'margin:10px'
        );
        if($project_data->gender == "Male"){
            $data['checked'] = TRUE;
        }
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
        if($project_data->gender == "Female"){
            $data['checked'] = TRUE;
        } 
    ?>
    <?php echo form_radio($data); ?>

</div>

<div class="form-group">
    <?php echo form_label('Employee Position');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'emp_position',
        "placeholder" => 'Enter Your Employee Position',
        "value" => $project_data->emp_position
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
        "placeholder" => 'Enter Your Phone Number',
        "value" => $project_data->emp_number
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
        "placeholder" => 'Enter Your Email',
        "value" => $project_data->emp_email
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
        "placeholder" => 'Enter Your Employee ID',
        "value" => $project_data->emp_id
    );
    ?>
    <?php echo form_input($data); ?>
    <p></p>
    <code>Use ID employee number :</code> <kbd>500560</kbd>
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
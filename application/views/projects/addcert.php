<h2>Add Cert</h2>
<hr>
<?php $attributes= array('class'=>'form_horizontal');?>
<?php echo form_open_multipart("projects/addcert/" . $task_id .'/'. $project_id ,$attributes);?>
<div class="form-group">
    <p><kbd>Add Cert as Microsoft Document OR PDF</kbd></p>
    <hr>
</div>
<div class="form-group">
    <input type="file" name="cert" size="20" />
    <?php echo form_label('Add Cert HERE: ');?>
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
</script>
<?php echo form_close(); ?>
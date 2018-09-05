<h2>Add Report</h2>
<hr>
<?php $attributes= array('class'=>'form_horizontal');?>
<?php echo form_open_multipart("projects/addreport/" . $task_id .'/'. $project_id ,$attributes);?>
<div class="form-group">
    <p><kbd>Add Report as Microsoft Document OR PDF</kbd></p>
    <hr>
</div>
<div class="form-group">
    <input type="file" name="report" size="20" />
    <?php echo form_label('Add Report Docs HERE: ');?>
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
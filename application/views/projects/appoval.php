<p class="bg-success"> 
    <?php if($this->session->flashdata('project_appoved')):?>    
    <?php echo $this->session->flashdata('project_appoved');?>
    <?php endif;?>
    <?php if($this->session->flashdata('approval_deleted')):?>    
    <?php echo $this->session->flashdata('approval_deleted');?>
   <?php endif;?>  
</p>
<div class="container">
            <!-- /.row -->
            <div class="row">
                <!-- body items -->
    
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i> Appoval List</h4>
                            
                        </div>
                        <div class="panel-body">
                            <?php if (!empty($tasks) ) : ?>
                                <?php foreach ($tasks as $member ) : ?>
                                <div class="col-md-12">
                                <hr>
                                    <div class="col-md-4">
                                        <h4>Course Title</h4>
                                            <?=  $member->course_name ?>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4>User Name </h4>
                                        <?=  $member->emp_name  ?>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <p></p>
                                        <p></p>
                                        <a class="btn btn-success" href="<?php echo base_url(); ?>projects/status_change/<?php echo $member->task_id;?>">Appoved</a>
                                        
                                    </div>

                                    <div class="col-md-2">
                                        <p></p>
                                        <p></p>
                                        <a class="btn btn-danger" href="<?php echo base_url();?>tasks/delete_appvl/<?php echo $member->task_id; ?>"> Delete </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            <?php endif;?>    
                        </div>
                    </div>
                </div> 
                
            </div>
            <!-- /.row -->
            
            <!-- Features Section -->
            
            <!-- /.row -->         
</div>
<!-- /.container -->
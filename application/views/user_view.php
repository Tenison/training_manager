<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View User Tabulation</title>
</head>

<body>
	<p class="bg-success">
	    <?php if($this->session->flashdata('User editted')):?>    
	    <?php echo $this->session->flashdata('User editted');?>
	    <?php endif;?>   
	    
	    <?php if($this->session->flashdata('user_registered')):?>    
	    <?php echo $this->session->flashdata('user_registered');?>
	    <?php endif;?>  
	</p>
		<div class="container">
			<!-- /.row -->
			<div class="row">
				<!-- body items -->
	
				<div class="col-md-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-fw fa-compass"></i> Members</h4>
							
						</div>
						<div class="panel-body">
						<?php foreach ($result as $member ) : ?>
						<div class="col-md-12">
						<hr>
							<div class="col-md-4">
								<h4>User ID</h4>
									<?=  $member['admin_name'] ?>
							</div>
							
							<div class="col-md-3">
								<h4>User Name </h4>
								<?=  $member['username']  ?>
							</div>
							
							<div class="col-md-3">
								<h4>User Group</h4>
								<?php if ($member['level'] == '1' ):?>
								<?php echo "administrator"  ;?>
								<?php endif;?>
								<?php if ($member['level'] == '2' ):?>
								<?php  echo "Members"  ;?>
								<?php endif;?>
								
							</div>

							<div class="col-md-2">
								<p></p>
								<p></p>
								<a class="btn btn-primary" href="<?php echo base_url();?>users/edit/<?php echo $member['id']; ?>/"> Edit </a>
							</div>
						</div>
						<?php endforeach; ?>	
						</div>
					</div>
				</div> 
				
			</div>
			<!-- /.row -->
			
			<!-- Features Section -->
			
			<!-- /.row -->
			
		</div>
		<!-- /.container -->
</body>
</html>
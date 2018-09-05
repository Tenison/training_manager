<html>
    <head>
        <title>Training Admin</title>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
	<body>	
  <nav class="navbar navbar-default" style="background:#dddddd;">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>"><strong>Training Admin</strong></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <?php if(!$this->session->userdata('logged_in')):?>
            <li class="active"><a href="<?php echo base_url();?>">Home </a></li>
          <?php endif;?>

          <li><a href="<?php echo base_url(); ?>projects">Manage</a></li>

          <?php if($this->session->userdata('user_level') == 1):?>
            <li><a href="<?php echo base_url(); ?>users/view">Users</a></li>
            <li><a href="<?php echo base_url(); ?>projects/addon">Add New Training</a></li>
            <li><a href="<?php echo base_url(); ?>projects/appoval">Appoval List</a></li>
          <?php endif;?>
          <!--<li></li>-->
        </ul>
        <?php if($this->session->userdata('logged_in')):?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
          </ul>
      <?php endif;?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
	
		<div class="container">			
      <div class="col-sm-3 col-md-3 col-xl-3">
        <?php $this->load->view('users/login_view');?>
        <?php if($this->session->userdata('user_level') == 1):?>
         <h5>Register as an Admin <a class="button button-primary" href="<?php echo base_url(); ?>users/register">Here</a> ?</h5>
        <?php endif;?>
      </div>
      <div class="col-sm-9 col-md-9 col-xl-9">			
        <?php $this->load->view($main_view);?>			
      </div>		
		</div>
		
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	</body>
</html>







<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print Page</title>

        <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"/></script>

  </head>

  <body id="page-top">


    <section id="about">
      <section id="about">
      <div class="container">
		<div class="">
			<div class="row">
				<h2 style="text-align: center;">Employee Details Report</h2><br>
				<div class="col-sm-7 col-md-6 col-lg-5">
					<img src="<?php echo base_url().'/userimg/'.$project_data->image; ?>" alt="Profile Image go HERE!!!" style="border-radius: 8px; max-width: 300px; max-height: 300px;"/>
				</div>
				<div class="col-sm-5 col-md-6 col-lg-7">
				  <table class="table table-hover">
				    <tbody>
				      <tr>
				        <td style="width: 25%">Employee <br>Name</td>
				        <td><h4><?php echo $project_data->emp_name;?></h4></td>
				      </tr>
				      <tr>
				        <td style="width: 25%">Employee ID</td>
				        <td><?php echo $project_data->emp_id;?></td>
				      </tr>
				      <tr>
				        <td style="width: 25%">Position</td>
				        <td><?php echo $project_data->emp_position;?></td>
				      </tr>
				      <tr>
				        <td style="width: 25%">Email</td>
				        <td><?php echo $project_data->emp_email;?></td>
				      </tr>
				      <tr>
				        <td style="width: 25%">Number</td>
				        <td><?php echo $project_data->emp_number;?></td>
				      </tr>
				      <tr>
				        <td style="width: 25%">Gender</td>
				        <td><?php echo $project_data->gender;?></td>
				      </tr>
				    </tbody>
				  </table>
				</div>
			</div>
			
			<hr>
			<!-- Join Table Data show here -->
			<h3 class=""> Training</h3>
			<?php if($completed_tasks):    ?>
				<table class="table  table-hover">
				    <tbody>
				        <?php  foreach ($completed_tasks as $task):?>
				        	<?php if($task->status != 1):?>
					            <tr>
					               <td>			
								    <h4><?php echo $task->course_name; ?></h4>
					               </td>               
					               <td>
					               	<h4 class="pull-right" style="padding-right: 30px"><?php echo $task->date_created;?></h4>
					               </td>   
					            </tr>
				        	<?php endif; ?>
				        <?php endforeach;?> 
				    </tbody>
				</table>
				<?php else: ?>
				<ul>
					<p>No Info Added Yet</p>
				</ul>
			<?php endif; ?>
		</div>
		<p><button class="btn btn-success" onClick="window.print()">Print this page</button></p>
      </div>
    </section>

  </body>

</html>
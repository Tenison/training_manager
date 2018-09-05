



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
        <div class="row">
          <div class=" mx-auto">
          	<h2 style="text-align: center;"><?php echo $task->course_name?> Training Report</h2>
            <h3>Name: <?php echo $project_data->emp_name?></h3>
            <h3>Position: <?php echo $project_data->emp_position; ?></h3>
            <h3>Email: <?php echo $project_data->emp_email?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $project_data->emp_number;?> </h3>
            <br>
            <h3>description</h3>
            <p class="lead"><?php echo $task->description?></p>
            <hr>
            <p class="lead">Report File: <?= $task->source ? $task->source: "No file Added" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $task->date_created?><br><code><?= $task->source ? "Please attach a copy of the Report file": "" ?></code></p>
            <p class="lead">Cert File: <?= $task->cert ? $task->cert: "No file Added" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $task->date_created?><br><code><?= $task->cert ? "Please attach a copy of the Report file": "" ?></code></p>


            <p ><button class="btn btn-success" onClick="window.print()">Print this page</button></p>
          </div>
        </div>
      </div>
    </section>

  </body>

</html>
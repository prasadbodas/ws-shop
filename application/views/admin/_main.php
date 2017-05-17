<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo URL; ?>images/favicon.ico">

    <title><?php echo $this->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL; ?>css/navbar-fixed-top.css" rel="stylesheet">

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo URL; ?>"><?php echo PROJECT_NAME; ?></a>
          </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo URL; ?>" target="_blank">Site</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container-fluid">
        <div class="col-sm-2 sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="<?php echo URL; ?>admin/">Dashboard</a></li>
                <li><a href="<?php echo URL; ?>admin/page">Pages</a></li>
                <li><a href="<?php echo URL; ?>admin/product">Products</a></li>
                <li><a href="<?php echo URL; ?>admin/category">Categories</a></li>
            </ul>
        </div>
        <div class="col-sm-10">
            <?php if(isset($content)) include(APP . $content); ?>
        </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type='text/javascript' src="<?php echo URL; ?>js/bootstrap.min.js"></script>
    <script type='text/javascript' src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script type='text/javascript' src="<?php echo URL; ?>js/admin-script.js"></script>
  </body>
</html>

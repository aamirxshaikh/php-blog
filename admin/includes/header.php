<?php include '../libraries/dbhandler.inc.php'; ?>
<?php include '../config/config.php'; ?>
<?php include '../helpers/format_helper.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Area</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="add_post.php">Add post</a>
          <a class="blog-nav-item" href="add_category.php">Add category</a>
          <a class="blog-nav-item pull-right" href="http://localhost:8080/eduonix/Learn PHP and MySQL Development By Building Projects/Project 3 PHP Lovers blog - Debug/">Visit blog</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        	<div class="logo">
        		<img src="../images/LOGO2.png" width="60%">
        	</div>
        <h1 class="blog-title">Admin Area</h1>
        <!-- <p class="lead blog-description">PHP news, tutorials, videos and more...</p> -->
      </div>

      <div class="row">

        <div class="col-sm-12 blog-main">

        <?php if(isset($_GET['msg'])) : ?>
          <div class="alert alert-success">
            <?php echo htmlentities($_GET['msg']); ?>
          </div>
        <?php endif; ?>
       
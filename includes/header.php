<?php
include "libs/config.php";
include "libs/database.php";
include "functions.php";

$db = new database();

$query = "SELECT * FROM posts order by id ASC";
$posts = $db->select($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>PHP BLOG</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      
      <header class='blog-header'>
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="index.php">HOME</a>
          <a class="p-2 text-muted" href="#">All Posts</a>
          <a class="p-2 text-muted" href="#">Services</a>
          <a class="p-2 text-muted" href="#">ABOUT</a>
          <a class="p-2 text-muted" href="#">CONTACT</a>
        </nav>
      </div>
      </header>
      <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic">
            PHP Tutorials Blog
          </h3>
          <p>This tutorial is all about php.</p>
        <?php while ($row = $posts->fetch_array()) :?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
            <p class="blog-post-meta">on <?php echo formatDate($row['date']);?> by <a href="#"><?php echo $row['author'];?></a></p>
             <img src="images/<?php echo $row['image'];?>" alt="NOT AVAILABLE" width = 250 height = 250>
            <p><?php echo $row['content'];?></p>
            
          </div><!-- /.blog-post -->

         <?php endwhile; ?>
        

  
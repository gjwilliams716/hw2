<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="margin:auto">
    <h1 style="margin-left:10px">MIS 4013 HW 2: Homepage</h1>
 
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.html">Homepage</a> <!--add link to other pages in href, last li is disabled -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post-result">Post Result</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="get.php">Get</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="get-result.php">Get Result</a>
          </li>
      </ul> 
  </body>

  <?php
$pageTitle = "Home"
include "view-header.php";
?>

  <h1>Home</h1>

  <?php
include "view-footer.php";
?>

<?php
session_start();
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Palembang News | Home Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <!-- Icon Link -->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

</head>

<body>

  <!-- Navigation -->
  <?php include('includes/header.php'); ?>

  <!-- Page Content -->
  <div class="container">



    <div class="row" style="margin-top: 4%">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->

        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title"></h2>
            <p><b>Category : </b> <a href="category.php"></a> |
              <b>Sub Category : </b></p>
            <hr />

            <img class="img-fluid rounded" src="images/presidenku2019.jpg">

            <p class="card-text"></p>

          </div>
          <div class="card-footer text-muted">


          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php'); ?>
    </div>
    <!-- /.row -->
    <!---Comment Section --->

    <div class="row" style="margin-top: -8%">
      <div class="col-md-8">
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form name="Comment" method="post">
              <input type="hidden" name="csrftoken" value="" />
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
              </div>


              <div class="form-group">
                <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
          </div>
        </div>

        <!---Comment Display Section --->


        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
          <div class="media-body">
            <h5 class="mt-0">
              NAMA KOMENTAR
              <br />
              <span style="font-size:11px;"><b>CONTOH KOMENTAR</b> </span>
            </h5>


          </div>
        </div>


      </div>
    </div>
  </div>


  <?php include('includes/footer.php'); ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
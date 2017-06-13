<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
  if($_SESSION['user'] == null)
      header('Location: index.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="./js/materialize.js"></script>
    <script src="vendors/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="vendors/sweetalert/dist/sweetalert.css">

    <title>管理後台</title>
    <script type="text/javascript">
      $(document).ready(function() {

      });

    </script>
  </head>
  <body style="background-color:#222831">

      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title center" style="margin-left:15%">總覽</a></div>
        </div>
      </nav>
    <?php include 'layouts/side-bar.php'; ?>
    <script type="text/javascript">
      $('#user_s').html("&nbsp<?php echo $_SESSION['user'] ?>");
      $('#level_s').html("&nbsp<?php echo $_SESSION['level'] ?>");


    </script>

  </body>
</html>

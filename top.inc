<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap-4.0.0/favicon.ico">

    <title>Smart Size Solution</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <!--script-->

  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">PRODUCTS</h4>
                <ul class="list-unstyled">
                <li><a href="index.php?action=alllist" class="text-white">All</a></li>
                <li><a href="index.php?action=toplist" class="text-white">Top</a></li>
                <li><a href="index.php?action=bottomlist" class="text-white">Bottom</a></li>
                <li><a href="index.php?action=dresslist" class="text-white">Dress</a></li>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">MENU</h4>
              <ul class="list-unstyled">
                <?php   

                  if(!isset($_SESSION['id'])) {
                    print '<li><a href="index.php?action=loginform" class="text-white">Login</a></li>';
                    print '<li><a href="index.php?action=joinform" class="text-white">Join</a></li>';
                 
                  } else {
                    print '<li><a href="index.php?action=logout" class="text-white">Logout</a></li>';
                    print '<li><a href="index.php?action=mypage&id=' . $_SESSION['id'] . '" class="text-white">My Page</a></li>';
                  }?>
                <li><a href="#" class="text-white">Cart</a></li>
              </ul>
              <?php
                if(isset($_SESSION['id'])) {
                  print '<h6 class="text-white"><em>&quot;Welcome ' . $_SESSION['id'] . ' !&quot;</em></h6>';
               }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="index.php?action=main" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong></strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

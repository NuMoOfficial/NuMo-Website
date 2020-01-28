<?php
session_start();

$clubstr = 'NuMo';
$userstr = 'Nutritional Monitoring Software';

echo <<<_INIT
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='css/styles.css'>
        <link rel='stylesheet' href='css/signup.css'>
        <link rel='stylesheet' href='css/LoginCss.css'>
        <title>$clubstr: $userstr</title>
        </head>
_INIT;

require_once 'functions.php';

if (isset($_SESSION['user'])) {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
}
else {
  $loggedin = FALSE;
  $userstr = '';
}

echo <<<_HEADER_OPEN
        <body>
_HEADER_OPEN;

if ($loggedin) {
echo <<<_LOGGEDIN
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2196f3;">
  <a class="navbar-brand" href="index.php">
  NuMo
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="blog.php">Blog</a>
     </li>
    </ul>
    <span class="navbar-text">
    </span>
  </div>
</nav>


_LOGGEDIN;
} else {
echo <<<_GUEST
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2196f3;">
  <a class="navbar-brand" href="index.php">
  NuMo
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="blog.php">Blog</a>
    </li>
    </ul>
    <span class="navbar-text">
    </span>
  </div>
</nav>
_GUEST;
 }

echo <<<_HEADER_CLOSE
        <div class='username'>$userstr</div>
_HEADER_CLOSE;

?>

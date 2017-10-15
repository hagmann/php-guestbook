<?php include_once('config.php'); ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

  <div class="off-canvas position-right" id="offCanvas" data-off-canvas>

    <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
      <span aria-hidden="true">&times;</span>
    </button>

    <!-- Menu -->
    <ul class="vertical menu">
      <li><a href="register.php">Registrieren</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>

  </div>

  <div class="off-canvas-content" data-off-canvas-content>
    <!-- Your page content lives here -->
    <div class="top-bar" id="responsive-menu">
  <div class="grid-container" style="flex-grow:1;">
    <div class="grid-x">
        <div class="title-bar-left logo">
          LOGO<br>HERE
        </div>
        <div class="title-bar-right text-right">
          <div class="hide-for-medium">
            <button class="menu-icon" type="button" data-open="offCanvas"></button>
          </div>

          <ul class="dropdown menu show-for-medium" data-dropdown-menu>
            <?php if(!empty($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == true) { ?>
            <li><a href="register.php">Registrieren</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php } else { ?>
            <li><a href="login.php">Login</a></li>
          <?php } ?>
          </ul>
        </div
      </div>
      </div>
    </div>
  </div>

<div class="grid-container">

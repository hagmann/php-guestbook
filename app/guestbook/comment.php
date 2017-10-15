<?php session_start();

require_once('config.php');

if(!empty($_POST['message'])) {
  $message = $_POST['message'];
  date_default_timezone_set("Europe/Zurich");
  $postedAt = date('Y-m-d H:i:s');

  if(!empty($_SESSION['Username'])) {
    $postedBy = $_SESSION['Username'];
  } else {
    $postedBy = "Gast";
  }

  $sql = 'INSERT INTO comment(message,postedBy,postedAt) VALUES (:message, :postedBy, :postedAt)';
  $stmt = $db->prepare($sql);
  $stmt->bindParam('message', $message);
  $stmt->bindParam('postedBy', $postedBy);
  $stmt->bindParam('postedAt', $postedAt);
  $stmt->execute();

  ?>
      <meta http-equiv="refresh" content="0;URL='index.php'"/>
  <?php

} else {
  echo '<div class="error">Bitte alle Felder ausfüllen!</div>';
  ?>
      <meta http-equiv="refresh" content="2;URL='index.php'"/>
  <?php
  }
  ?>

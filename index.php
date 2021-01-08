<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/styles.php">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php include "inc/functions.php";
            printQuote();
            // I leared how to refresh from https://stackoverflow.com/questions/12383371/refresh-a-page-using-php
            header("Refresh: 30; url=http://localhost/?quote=" . $current_quote);
            ?>
    <a href=<?php
      // manualy change the url to pass the $current_quote to the refreshed page
      echo ("http://localhost/?quote=" . $current_quote);?>>
      <button id="loadQuote">Show another quote</button>
    </a>

  </div>
</body>
</html>

<?php include'database.php'?>

<?php
$query = "SELECT * FROM shouts";
$shouts = mysqli_query($con,$query);
 ?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
      <div id="container">
        <header>
            <h1> Shout out!! </h1>
        </header >
        <div id="shouts">
          <ul>
              <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>

              <li class='shout'> <span> <?php echo $row['time']; ?>
              </span>  <?php echo $row['user']; ?> :
              <?php  echo $row['message']; ?> </li>

              <?php  endWhile; ?>
          </ul>
      </div>
        <div id="input">
          <form method="post" action="process.php">
            <input type="text" name="user" placeholder="Enter your name" />
            <input type="text" name="message" placeholder="Message">
          </br>
          <input type="submit" name="submit" value="shout it out" class="shout-btn" />
        </div>
    </div>
  </body>
</html>

<?php


?>

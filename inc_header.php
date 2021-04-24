<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, "."));

function checkHeaderShoulDisplay($userLoggedIn, $name) {
  if ($userLoggedIn) {
    echo "<div class='banner'>This is a test banner on the page <b>$name</b>. it only shows when logged in.</div>";
  }
}

checkHeaderShoulDisplay(isset($_SESSION['username']), $name);
?>
<header id="pageHeader">
  <aside id="login"><form action="login.php?page=<?php echo $name; ?>" method="post"><input name="username" id="username" type="text" placeholder="Username"><input name="submit" type="submit" value="Login"></form></aside>
  <a href="index.php"><h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1></a>
</header>

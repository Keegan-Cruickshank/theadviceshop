<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Advice Shop - Newtons Laws</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php
  include("inc_header.php");
  include("inc_nav.php");
  $sql = "select * from laws";
  $laws = $dbh->query($sql);
?>
<h2>Newtons Laws</h2>
<div id="content">
  <p>Below are Newtons Laws</p>
  <ol>
    <?php
      foreach ($laws as $law) {
        echo "<li class='laws'>", $law['lawString'], "</li>";
      }
    ?>
  </ol>
</div>
<p>&nbsp;</p>
<?php include("inc_footer.php"); ?>
</body>
</html>

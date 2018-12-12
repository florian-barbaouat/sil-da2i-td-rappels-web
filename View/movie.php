<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $data["res"]['title']; ?></title>
    <meta charset="utf-8"/>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	    crossorigin="anonymous"></script>
</head>
<body>
  <?php
    getBlock('header.inc.php') ;
  ?>
	<main>
		<h1><?php echo $data["res"]['title']; ?></h1>
    <?php
      getBlock('infos.inc.php',$data["res"]) ;
    ?>
    <?php

      getBlock('list-images.inc.php',$data["listimg"]) ;
    ?>



	</main>
  <?php
    getBlock('footer.inc.php') ;
  ?>

</body>

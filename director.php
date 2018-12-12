<?php
require('connexion.php');
function getBlock($file, $data = [])
{
    require $file;
}

$id = $_GET['id'];
$stmt = $bdd->prepare("SELECT * FROM person WHERE id=".$id);
$stmt->execute();
$res = $stmt->fetch();

getBlock('header.inc.php') ?>
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
</head>    
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<main>
	<?php getBlock("infosdirector.php", $res) ?>
</main>
	<?php getBlock("footer.inc.php") ?>
</body>
</html>

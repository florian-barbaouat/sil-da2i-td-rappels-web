<?php
function getBlock($file, $data = [])
{
    require $file;
}
require('connexion.php');
?>
<?php

//films
$stmt = $bdd->prepare("SELECT * FROM movie ORDER BY title ASC");
$stmt->execute();
$movies = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $res['title']; ?></title>
    <meta charset="utf-8"/>

</head>
<body>
	<?php
   getblock("header.inc.php") ?>
	<main>
  <?php  echo "<h2> Liste des films : </h2>";
    echo "<ul>";
    foreach($movies as $movie) {
          $url = 'movie.php?film='.$movie['id'];
          echo '<a href="'.$url.'"><li>'.$movie['title'].'</li></a><br/>';
    }
    echo "</ul>";

//Réalisateurs
    $stmt = $bdd->prepare("SELECT * FROM movieHasPerson WHERE role='director'");
    $stmt->execute();
    $directors = $stmt->fetchAll();
    echo "<h2> Liste des réalisateurs : </h2>";
    echo "<ul>";
    foreach($directors as $director) {
          $stmt = $bdd->prepare("SELECT * FROM person WHERE id =".$director['idPerson']);
          $stmt->execute();
          $dir = $stmt->fetch();
          $url = 'director.php?id='.$dir['id'];
          echo '<a href="'.$url.'"><li>'.$dir['lastname'].' '.$dir['firstname'].'</li></a><br/>';
    }
    echo "</ul>";
?>
	</main>
	<?php getblock("footer.inc.php") ?>
</body>
</html>

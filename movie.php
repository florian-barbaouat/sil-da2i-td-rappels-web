<?php
function getBlock($file, $data = [])
{
    require $file;
}
require('connexion.php');

?>
<?php
$id = $_GET['film'];
$stmt = $bdd->prepare("SELECT * FROM movie WHERE id=".$id);
$stmt->execute();
$res = $stmt->fetch();

require('images.php');

$moviedata= ["res"=>$res,"listimg"=>$listimg];
getBlock("View/movie.php",$moviedata);

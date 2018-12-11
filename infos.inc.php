<?php
require('connexion.php');
$stmt = $bdd->prepare("SELECT idPerson FROM movieHasPerson WHERE idMovie=".$data['id']);
$stmt->execute();
$ids = $stmt->fetchAll();
$mainactors = '';
foreach($ids as $person) {
      $query = $bdd->prepare("SELECT lastname, firstname FROM person WHERE id=".$person['idPerson']);
      $query->execute();
      $res = $query->fetchAll();
      $mainactor .= $res[0]['lastname'].' '.$res[0]['firstname'].', ';
}
$stmt = $bdd->prepare("SELECT * FROM movie WHERE id=".$data['id']);
$stmt->execute();
$result = $stmt->fetch();
$synopsis = $result['synopsis'];

$rating = $result['rating'];
?>
<section class="infos">
  <time datetime="1980"><?php echo $data['releasedate']?></time>
  <p> les acteurs principaux sont : <?php echo $mainactor ?> ...</p></p>
  <p><?php echo $data['synopsis']?></p>
  <aside>
    <p>Note : <?php echo $data['rating']?>/5
    <meter id="note" min="0" max="5" value="4">Note : 4/5</meter>
  </p>
  </aside>
</section>

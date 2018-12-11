<section class="list-images">
	<p> Ci-dessous une liste d images importantes du film</p>
	<?php
	foreach ($data as $idperson => $person) {
		foreach ($person as $id => $img) {
			?>
		<figure>
			<img src="<?php echo $img['path'];?>" alt="<?php echo $img['legend'];?>" class="list-images"> </img>
				<figcaption><?php echo $img['legend'];?></figcaption>
		</figure>

	<?php }
} ?>
</section>

<h1> <?php echo $data['firstname'].' '.$data['lastname'] ?></h1>
		<article>
		<aside>
			<figure>
			  <img src="director.jpg" alt="image d'affiche du film Silent Hill"></img>
			  <figcaption>Christophe Grans</figcaption>
			</figure>
		</aside>
			<section>
				<h2>Director</h2>
				<p><?php echo $data['firstname'].' '.$data['lastname'] ?>, (born the <?php echo $data['birthDate'] ?>).</p>

				<p>
          <?php echo $data['biography'] ?>
 </p>
</section>
<section class="full-width">
 <!-- <table>
  <thead>
    <tr>
      <th>Year</th>
      <th>Film</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1981</td>
      <td>Silver Slime</td>
    </tr>
    <tr>
      <td>1993</td>
      <td>H.P. Lovecraft's: Necronomicon</td>
    </tr>
		<tr>
			<td>1995</td>
			<td>Crying Freeman</td>
		</tr>
		<tr>
			<td>2001</td>
			<td>Brotherhood of the Wolf</td>
		</tr>
		<tr>
			<td>2004</td>
			<td>Saint Ange</td>
		</tr>
		<tr>
			<td>2006</td>
			<td>Silent Hill</td>
		</tr>
		<tr>
			<td>2014</td>
			<td>Beauty and the Beast</td>
		</tr>

  </tbody>

</table> -->
			</section>
			</article>

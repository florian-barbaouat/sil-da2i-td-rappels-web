<footer>
	<p> Crée par Florian Barbaouat a des fins pédagogiques</p>
</footer>
<script>
	$(document).ready(function() {
		 $('#hideaside').on('click', function(){
			 	$('aside').hide(2000);
		 });
		 $('#Fadeimg').on('click', function(){
			 $('img').fadeOut();
		});
		$('#toggleMenu').on('click', function(){
			$('header').slideToggle(500);
		});
	});
</script>

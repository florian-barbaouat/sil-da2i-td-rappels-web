<footer>
	<p> Crée par Florian Barbaouat a des fins pédagogiques</p>
</footer>
<script>
	$(document).ready(function() {
		$("#charger").on('click',function(){
			$.ajax({
				method:"GET",
				url: "faq.php",
				datatype:"html"
			}).done(function(faq){
				console.log("bite");
				$("#charger").parent().html(faq);
			});
		});





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

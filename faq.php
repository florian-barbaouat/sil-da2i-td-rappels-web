<!DOCTYPE html>
<html lang="fr">
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Foire aux questions</title>
    <meta charset="utf-8"/>

</head>
<body>
  <h1> Foire au Questions</h1>
  <dl id="faq">
    <dt>Les femmes c'est quoi?</dt>
    <dd>
      <dl>
          <dt>La plus belle chose au monde</dt>
          <dd>Sans elle on serait r </dd>
          <dt>Mais aussi l'équivalent de l'homme</dt>
          <dd>Du coup on est tous très beau</dd>
      </dl>
    </dd>

    <dt>Yael c'est quoi ? </dt>
    <dd>un funkycop</dd>

    <dt>Hugo c'est quoi? </dt>
    <dd>l'ex de ma future meuf </dd>

    <dt>Eliott c'est quoi? </dt>
    <dd>Le PLUS GROS BG </dd>

    <dt>Lou c'est quoi? </dt>
    <dd>le mec que je kenerai si j'étais dep </dd>
  </dl>
</body>
<script>
	$(document).ready(function() {
    $("dt").on('mouseenter',function(event){
      console.log('ttrdtrdtrd');
      $(this).next("dd").toggle();
      event.stopPropagation();
    });
  });
</script>

</html>

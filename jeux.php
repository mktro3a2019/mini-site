<?php
    session_start();
	$_init=1;
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "template/head.php"; ?>
        <title>Alumni ou pas</title>
	<script type="text/javascript">

	/** Fonction basculant la visibilité d'un élément dom
	* @parameter anId string l'identificateur de la cible à montrer, cacher
	*/
	function toggle(anId)
	{
		node = document.getElementById(anId);
		if (node.style.visibility=="hidden")
		{
			// Contenu caché, le montrer
			node.style.visibility = "visible";
			node.style.height = "auto";			// Optionnel rétablir la hauteur
		}
		else
		{
			// Contenu visible, le cacher
			node.style.visibility = "hidden";
			node.style.height = "0";			// Optionnel libérer l'espace
		}
	}

	</script>
    </head>
    <body>
        <?php include "template/header.php"; ?>
	<?php if($_init==1) ?>	
	<div class="contenu">
		<div id="Q1">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="1"/>
			<b><p>1.Qui est le createur de Mario ? Est que c'est : </p></b>
			<input type="radio" name="rep" value="2"/>Shigeru Miyamoto<br />
			<input type="radio" name="rep" value="3"/>Shigeyuki Asuke<br />
			<input type="radio" name="rep" value="4"/>Shigefumi Hino<br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		
		<div id="Q2">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="2"/>
			<b><p>1.Qui est le createur de Mario ? Est que c'est :2 </p></b>
			<input type="radio" name="rep" value="2"/>Shigeru Miyamoto<br />
			<input type="radio" name="rep" value="3"/>Shigeyuki Asuke<br />
			<input type="radio" name="rep" value="4"/>Shigefumi Hino<br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		<script>toggle("Q2");</script>
		<div id="Q3">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="3"/>
			<b><p>1.Qui est le createur de Mario ? Est que c'est :3 </p></b>
			<input type="radio" name="rep" value="2"/>Shigeru Miyamoto<br />
			<input type="radio" name="rep" value="3"/>Shigeyuki Asuke<br />
			<input type="radio" name="rep" value="4"/>Shigefumi Hino<br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		<script>toggle("Q3");</script>

		
		<div class="contenu">
		<h1> Cliquer sur la tête de Charlie </h1>		</div>
		<img src="images/charlie.jpg" alt="charlie" usemap="#charlie" style="width: 1000px; margin-left: auto; margin-right: auto; display: block;">
		<map name="charlie">
			<area shape="circle" coords="838.5px,148px,5px" alt="charlie" href="javascript:Message()" href="https://www.google.com">
		
        </map>
	</div>
		


	<!-- L'identificateur id du div doit être unique. Içi, "foo" ou "bar" ou autre, mais unique dans le document-->
	
	</div>
		<?php include "template/footer.php"; ?>
		
		<script>
		
		function Message() {
			var msg="Bravo vous vous êtes bien fait chier! :D";
			console.log(msg);
		alert(msg);} </script>
		
		<script>
		
		function BonneReponse() {
			var msg="Bien vu!";
			console.log(msg)
		alert(msg);} </script>
		
		<script>
		function MauvaiseReponse() {
			var msg="T'es qu'une merde";
			console.log(msg)
		alert(msg);} </script>
	

	   
		
	<script>function check_answer(form){
		var quest = form.quest.value;
		switch (quest) {
			case '1':
				var value=2;
				break;
			case '2':
				var value=2;
				break;
			case '3':
				var value=2;
				break;
		}
			if(form.rep.value==value){
				BonneReponse();
				toggle("Q"+quest);
				quest=quest*1+1;
				toggle("Q"+quest);
			}
			else{
				MauvaiseReponse();
				toggle("Q"+quest);
				quest=1;
				toggle("Q"+quest);
			}
	}
	</script>
		
		
 

    </body>
</html>
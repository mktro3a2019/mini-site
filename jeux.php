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
			<b><p>1.Qui est le président de l'ENS Rennes ?  </p></b>
			<input type="radio" name="rep" value="1" id="Q1_1"/><label for="Q1_1">Pascal Mognol</label><br />
			<input type="radio" name="rep" value="2"id="Q1_2"/><label for="Q1_2">Pascool Moniol</label><br />
			<input type="radio" name="rep" value="3"id="Q1_3"/><label for="Q1_3">Pascal Moniol</label><br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		
		<div id="Q2">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="2"/>
			<b><p>2. Où se situe l'ENS Rennes ?  </p></b>
			<input type="radio" name="rep" value="1"id="Q2_1"/><label for="Q2_1">A Rennes comme son nom l'indique</label><br />
			<input type="radio" name="rep" value="2"id="Q2_2"/><label for="Q2_2">A Saint-Jacques de la lande comme son nom ne l'indique pas</label><br />
			<input type="radio" name="rep" value="3"id="Q2_3"/><label for="Q2_3">A Bruz, dont le "z" ne se prononce pas</label><br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		<script>toggle("Q2");</script>
		
		<div id="Q3">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="3"/>
			<b><p>3. Quel est l'identité secrète de Thomas Baroche ? </p></b>
			<input type="radio" name="rep" value="1"id="Q3_1"/><label for="Q3_1">Babar</label><br />
			<input type="radio" name="rep" value="2"id="Q3_2"/><label for="Q3_2">Batman</label><br />
			<input type="radio" name="rep" value="3"id="Q3_3"/><label for="Q3_3">Baroche</label><br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		<script>toggle("Q3");</script>
		
		<div id="Q4">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="4"/>
			<b><p>4. Combien y a-t-il de Thomas dans la promo Mktro 2017?</p></b>
			<input type="radio" name="rep" value="1"id="Q4_1"/><label for="Q4_1">2</label><br />
			<input type="radio" name="rep" value="2"id="Q4_2"/><label for="Q4_2">3</label><br />
			<input type="radio" name="rep" value="3"id="Q4_3"/><label for="Q4_3">4</label><br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		<script>toggle("Q4");</script>
		
		<div id="Q5">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="5"/>
			<b><p>5. Qui est Rémi Jardot?</p></b>
			<input type="radio" name="rep" value="1"id="Q5_1"/><label for="Q5_1">Le président du BDE</label><br />
			<input type="radio" name="rep" value="2"id="Q5_2"/><label for="Q5_2">Le président du BDA</label><br />
			<input type="radio" name="rep" value="3"id="Q5_3"/><label for="Q5_3">Le président du BDS</label><br />
			<input type="radio" name="rep" value="4"id="Q5_4"/><label for="Q5_4">Rémi Jardot</label><br />
			<input type="radio" name="rep" value="5"id="Q5_5"/><label for="Q5_5">Un marchand de tapis</label><br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		<script>toggle("Q5");</script>
		
		<div id="Q6">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="6"/>
			<b><p>6. Qui est Clara Amsallem?</p></b>
			<input type="radio" name="rep" value="1"id="Q6_1"/><label for="Q6_1">Clara Amsallem</label><br />
			<input type="radio" name="rep" value="2"id="Q6_2"/><label for="Q6_2">Clara Amsallem</label><br />
			<input type="radio" name="rep" value="3"id="Q6_3"/><label for="Q6_3">Clara Amsallem</label><br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		<script>toggle("Q6");</script>

		<div id="Q7">
		<form onsubmit="check_answer(this); return false;">
			<input type="hidden" name="quest" value="7"/>
			<b><p>7. Qui est le joueur de babyfoot ayant de long cheveux, étant très adepte du café, ayant une boite colorée pour conserver son repas, portant des
			pulls colorés uniquement en période de vacances, enseignant à l'ENS et pesant moins de 100kg ?</p></b>
			<input type="radio" name="rep" value="1"id="Q7_1"/><label for="Q7_1">Hassen Suallah (AKA Hassen_CF)</label><br />
			<input type="radio" name="rep" value="2"id="Q7_2"/><label for="Q7_2">Roman LGL (AKA Roman)</label><br />
			<input type="radio" name="rep" value="3"id="Q7_3"/><label for="Q7_3">Nicolas Testard (AKA Testard)</label><br />
			<input type="submit" name="sub"/><br />
		</form>
		</div>
		<script>toggle("Q7");</script>
		
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
				var value=1;
				break;
			case '2':
				var value=3;
				break;
			case '3':
				var value=1;
				break;
			case '4':
				var value=3;
				break;
			case '5':
				var value=5;
				break;
			case '6':
				var value=1;
				break;
			case '7':
				var value=2;
				break;
		}
			if(form.rep.value==value || quest=='6'){
				BonneReponse();
				toggle("Q"+quest);
				quest=quest*1+1;
				toggle("Q"+quest);
			}
			else{
				if (quest=='4'){
					var msg="Tu as oublié Béatrice! (Thomas de son nom)";
					console.log(msg)
					alert(msg);
				}
				else{
					MauvaiseReponse();
				}
				toggle("Q"+quest);
				quest=1;
				toggle("Q"+quest);
			}
	}
	</script>
		
		
 

    </body>
</html>
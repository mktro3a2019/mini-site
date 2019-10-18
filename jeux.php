<?php
    session_start();
	$_init=1;
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "template/head.php";
		include "include/jeux_tab.php";	
		?>
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
	<div class="contenu" id="the_quizz">
		<form onsubmit="check_answer(this); return false;" id="quizz">
			<input type="hidden" name="question" value="1"/>
			<b><p><span id="num"></span>. <span id="quest"></span>  </p></b>
			<span id="reponse"></span>
			<input type="submit" name="sub"/><br />
		</form>
		
	<script>
		function question(quizz_tab,num){
			document.getElementById("num").innerHTML=num+1;
			document.getElementById("quest").innerHTML=quizz_tab[num][0];
			var k=1;
			var rep=document.getElementById("reponse");
			rep.innerHTML="";
			quizz_tab[num][1].forEach(function(element) {
				var para = document.createElement("input");
				para.type="radio";
				para.name="rep";
				para.value=k;
				para.id=num+"_"+k;
				rep.appendChild(para);
				rep.innerHTML+="<label for="+para.id+">"+element+"</label><br />";
				k++;
			});
			

			

		}
		
		
		var quizz_tab=[
			[
				"Qui est le président de l'ENS Rennes?",
				["Pascal Mognol","Pascool Moniol","Pascal Moniol"],
				"1"
			],
			[
				"Où se situe l'ENS Rennes?",
				["A Rennes comme son nom l'indique","A Saint-Jacques de la lande comme son nom ne l'indique pas","A Bruz, dont on ne prononce pas le 'z'"],
				"3"
			],
			[
				"Quel est l'identité secrète de Thomas Baroche ?",
				["Babar","Batman","Baroche"],
				"1"
			],
			[
				"Combien y a-t-il de Thomas dans la promo Mktro 2017?",
				["2","3","4"],
				"3"
			],
			[
				"Qui est Rémi Jardot?",
				["Le président du BDE","Le président du BDA","Le président du BDS","Rémi Jardot","Un marchand de tapis"],
				"5"
			],
			[
				"Qui est Clara Amsallem?",
				["Clara Amsallem","Clara Amsallem","Clara Amsallem","Clara Amsallem"],
				"1"
			],
			[
				"Qui est le joueur de babyfoot ayant de long cheveux, étant très adepte du café, ayant une boite colorée pour conserver son repas, portant des pulls colorés uniquement en période de vacances, enseignant à l'ENS et pesant moins de 100kg ?",
				["Hassen Suallah (AKA Hassen_CF)","Roman LGL (AKA Roman)","Nicolas Testard (AKA Testard)"],
				"2"
			],
			[
				"Qui est le responsable du club Babyfoot de l'ENS Rennes?",
				["Il y a un club Babyfoot à l'ENS Rennes?","Le club baby est au BDA","Le club baby est au BDS","Micka (Michael)","Testard"],
				"1"
			],
			[
				"Quel est le sens de la vie de l'univers et de tout le reste?",
				["41","42","43"],
				"2"
			],
			[
				"Que vaut la somme des entiers naturels?",
				["-1/12","(pi^2)/6","l'infini"],
				"1"
			],
			[
				"Est-ce que P=NP?",
				["oui","non","peut-être"],
				"3"
			],
			[
				"Qui est Cécile Lejeune?",
				["Une femme","La responsable Communication (emploi fictif?)","Je ne sais pas"],
				"3"
			],
			[
				"Qui suis-je?",
				["Personne","Un quizz, respecte mes sentiments s'il te plait","LOL, un quizz ça a pas de sentiments"],
				"3"
			],
			[
				"Quel est la capital du Tamalou?",
				["Gébobola","Danmonjambe","Surtomné"],
				"1"
			],
			[
				"Quelle est la plus grande des ENS?",
				[
					"Bouzaréah",
					"Constantine",
					"Kouba",
					"Ulm",
					"Bousaada",
					"Porto-Novo",
					"Natitingou",
					"Maroua",
					"Yaoundé",
					"Lyon",
					"Côte d'Ivoire",
					"Est de la Chine",
					"Libreville",
					"Port-au-Prince",
					"Pise",
					"Ampefiloha, Antananarivo",
					"Cachan",
					"Casablanca",
					"Fès",
					"Marrakech",
					"Martil",
					"Rennes",
					"Meknès",
					"Rabat",
					"Mohammedia",
					"Nouakchott",
					"Abdou Moumouni",
					"Cracovie",
					"Dakar",
					"N'Djamena",
					"Tunis"
				],
				"22"
			]
		];
		
		
		function BonneReponse() {
			var msg="Bien vu!";
			console.log(msg)
		alert(msg);} 
		
		function MauvaiseReponse() {
			var msg="Perdu! T'es tout claqué!";
			console.log(msg)
		alert(msg);} 
		
		var num=0;
		var Qmax=quizz_tab.length;
		function check_answer(form){
			if(form.rep.value==quizz_tab[num][2] || num==6-1){
				if (num==Qmax-1) {
					var msg="Bien joué champion! Tu es le meilleur! A voir combien de fois tu as recommencé maintenant... :)";
					console.log(msg)
					alert(msg);
					document.getElementById("Score").value=num+1;
					toggle("the_quizz");
					toggle("give_pseudo");
				}
				else{
					if (num==0){
						BonneReponse();
					}
					num++;
					question(quizz_tab,num)
				}
			}
			else{
				if (num==3){
					var msg="Tu as oublié Béatrice! (Thomas de son nom)";
					console.log(msg)
					alert(msg);
				}
				else{
					MauvaiseReponse();
				}
				question(quizz_tab,num);
				document.getElementById("Score").value=num;
				num=0;
				toggle("the_quizz");
				toggle("give_pseudo");
			}
		}
	
	
			
		
		question(quizz_tab,num);
	</script>
	</div>
	
	<div class="contenu" id="give_pseudo">
		<h3 style="color: blue;"><i>Rentrez votre pseudo</i></h3>
		<form method="post" action="Log_score.php">
			<label for="Pseudo">Pseudo :</label> <input type="text" name="Pseudo" id="Pseudo"/><br/>
			<input type="hidden" name="Score" id="Score"/>
			<input type="submit" value="clique là"/>
		</form>
    </div>
	<script>toggle("give_pseudo");</script>
		
	<div style="text-align:center; width:1px; margin: auto;"><h2 style="color:red;">Historique</h2>
	<table>
		<tr>
			<th>Pseudo</th>
			<th>Score</th>
		</tr>
		<?php
			$score = get_score();
			foreach($score as $u) {
				?>
				<tr>
					<td><?php echo htmlentities($u["Pseudo"]); ?></td>
					<td><?php echo htmlentities($u["Score"]); ?></td>
				</tr>
			<?php }
		?>
	</table>
	</div>
	
		<div class="contenu">
		<h1> Cliquer sur la tête de Charlie </h1>		
		<img src="images/charlie.jpg" alt="charlie" usemap="#charlie" style="width: 1000px; margin-left: auto; margin-right: auto; display: block;">
		<map name="charlie">
			<area shape="circle" coords="838.5px,148px,5px" alt="charlie" href="javascript:Message()" href="https://www.google.com">
		
        </map>
	</div>
	
	
	</div>
		<?php include "template/footer.php"; ?>
		
		<script>
		
		function Message() {
			var msg="Bravo vous vous êtes bien fait chier! :D";
			console.log(msg);
		alert(msg);} </script>
		
		<script>

		
 

    </body>
</html>
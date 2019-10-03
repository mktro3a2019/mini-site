<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "template/head.php"; ?>
        <title>Alumni ou pas</title>
		<script type="text/javascript" src="include/pop_up.js"></script>
    </head>
    <body>
        <?php include "template/header.php"; ?>
		
		<div class="contenu">
		<h1> Cliquer sur Charlie </h1>		</div>
		<img src="images/charlie.jpg" alt="charlie" usemap="#charlie" style="width: 1000px; margin-left: auto; margin-right: auto; display: block;">
		<map name="charlie">
			<area shape="circle" coords="838.5px,148px,5px" alt="charlie" href="javascript:Message()" href="https://www.google.com">
			<div id="customPopup">
				 <h3>Titre du popup</h3>
				 <p>Message du popup !</p>
				 <p> </p>
				 <input type="button" value="Ok" onclick="hidePopup();">
			</div>
        </map>
		<?php include "template/footer.php"; ?>
		
		<script>
		
		function Message() {
			var msg="Bravo vous vous êtes bien fait chier! :D";
			console.log(msg)
		alert(msg);} </script>

	   
		
		
		
 

    </body>
</html>
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
		<h1> Cliquer sur la tête de Charlie </h1>		</div>
		<img src="images/charlie.jpg" alt="charlie" usemap="#charlie" style="width: 1000px; margin-left: auto; margin-right: auto; display: block;">
		<map name="charlie">
			<area shape="circle" coords="838.5px,148px,5px" alt="charlie" href="javascript:Message()" href="https://www.google.com">
		
        </map>
		<?php include "template/footer.php"; ?>
		
		<script>
		
		function Message() {
			var msg="Bravo vous vous êtes bien fait chier! :D";
			console.log(msg)
		alert(msg);} </script>

	   
		
		
		
 

    </body>
</html>
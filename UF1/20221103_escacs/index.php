<!DOCTYPE html >

<html>
	<head>
	    <title>KK</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<link rel="stylesheet" type="text/css" href="reset.css" />
		<link rel="stylesheet" type="text/css" href="estil.css" />
	</head>

<?php
function lletres(){
	echo("<div></div>");
	for($i=0;$i<8;$i++){
		$lletra = chr( ord('A')+$i );
		echo("<div>{$lletra}</div>");
	}
	echo("<div></div>");
}
?>
	<body>
		<main>
			
			<section class="tauler">
				<!-- *************************************************** -->
				<?php lletres(); ?>
				<!-- *************************************************** -->
				<?php 
				for($f=0;$f<8;$f++){
					$num = 8 - $f;
					echo("<div>{$num}</div>");					
					for($c=0;$c<8;$c++){			
						$classe = ($f+$c) % 2 ? "black":"white";					
						echo("<b class='{$classe}'></b>");						
					}
					echo("<div>{$num}</div>");
				}					
				?>
				<!-- *************************************************** -->
				<?php lletres(); ?>
				<!-- *************************************************** -->				
			</section>    
			<section class="tauler">
				<nav></nav>
				<figure class="FA C4">♘</figure>
				<figure class="FD C8">♘</figure>

				<figure style="--fila:5;--columna:6" class="cavall"></figure>
			</section>
		</main>	

		
	</body>
</html>
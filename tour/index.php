<!doctype html>
<html lang="es">
<head>
<?php
require("../head.php");
?>
	<link href="../style/back.css" type="text/css" rel="stylesheet" />
	<meta name="robots" content="noindex" />
</head>
<body onload="$('.contenido').fadeIn(900);">
	<div class="container">
		<div class="lateral_izq">
			LATERAL IZQ
		</div>
		<div class="lateral_izq_inferior">
		</div>

		<div class="lateral_dch">
			<?php
			require("../dcha.php");
			?>
		</div>

		<div class="centro">

			<?php
			require("../menu.php");
			?>
			<div class="contenido" id="contenido">


			<!-- <table class="tablatour">
				<tr class="tourfila">
					<th class="tourfecha">Fecha</th>
					<th class="tourgrupo">Grupo</th>
					<th class="tourinfo">Info</th>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha"></td>
					<td class="tourgrupo"></td>
					<td class="tourinfo"></td>
				</tr>


				<tr class="tourfila">
					<td class="tourfecha">23/05/14</td>
					<td class="tourgrupo">Incendios</td>
					<td class="tourinfo">Madrid, <a href="https://es-es.facebook.com/elperroclub">El perro de la...</a> + <a href="http://borgenine.bandcamp.com/">Borgenine</a></td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">06/06/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo">Madrid, <a href="http://www.mobydickclub.com/">Moby Dick</a>  + <a href="https://www.facebook.com/cosmenadelaidaband">Cosmen adelaida</td>
					<td class="tourinfo">
						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="CTC2QQ38MUJQY">
							<input type="image" src="../images/entradas.png" border="0" class="button" name="submit" value="Comprar" alt="">&nbsp;&nbsp;Madrid, <a href="http://www.mobydickclub.com/">Moby Dick</a> + <a href="https://www.facebook.com/cosmenadelaidaband">Cosmen adelaida</a>
							<img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1">
						</form>
					</td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">12/06/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo">Madrid, <a href="www.holycuervo.com/">Cuervo Store</a> </td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">20/06/14</td>
					<td class="tourgrupo">Incendios</td>
					<td class="tourinfo"><a href="https://www.ticketea.com/entradas-anfirock-sound-festival-2014/" class="entradas" target="blank"><img src="../images/entradas.png" border="0" class="button"/></a>&nbsp;&nbsp;Isla Cristina - Huelva&nbsp;//&nbsp;<a href="http://www.anfirock.com/">Festival Anfirock</a></td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">21/06/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo"><a href="https://www.ticketea.com/entradas-anfirock-sound-festival-2014/" class="entradas" target="blank"><img src="../images/entradas.png" border="0" class="button"/></a>&nbsp;&nbsp;Isla Cristina - Huelva&nbsp;//&nbsp;<a href="http://www.anfirock.com/">Festival Anfirock</a></td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">12/07/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo"><a href="https://www.ticketea.com/festival-planetademos-2014/" class="entradas" target="blank"><img src="../images/entradas.png" border="0" class="button"/></a>&nbsp;&nbsp;Mengíbar - Jaen&nbsp;//&nbsp;<a href="http://festivalplanetademos.com/">Festival Planeta Demos</a></td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">19/07/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo"><a href="https://www.ticketea.com/entradas-tomavistas-2014/" class="entradas" target="blank"><img src="../images/entradas.png" border="0" class="button"/></a>&nbsp;&nbsp;Madrid&nbsp;//&nbsp;<a href="http://www.tomavistasfestival.com/">Festival Tomavistas</a></td>
				</tr>

				<tr class="tourfila">
					<td class="tourfecha">31/07/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo">Pontevedra, 21.30h <a href="https://www.facebook.com/pages/SALA-KARMA/">Sala Karma</a> + <a href="http://whygomusic.bandcamp.com/">Why Go</a></td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">01/08/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo">Vigo, 23h, <a href="https://www.facebook.com/laiguanaclub">La Iguana</a> + <a href="http://whygomusic.bandcamp.com/">Why Go</a></td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">02/08/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo">Bueu, 22h, <a href="http://labranzameiro.blogspot.com.es/">Bar Labranza</a> + <a href="http://whygomusic.bandcamp.com/">Why Go</a></td>
				</tr>
				<tr class="tourfila">
					<td class="tourfecha">08/08/14</td>
					<td class="tourgrupo">Atención tsunami</td>
					<td class="tourinfo">Medina del campo, 22h, <a href="https://www.facebook.com/pages/Bar-Logan/">Bar Logan</a></td>
				</tr>



			</table> -->
			<br/>
			<p>En aquellos conciertos en los que exista la opción de comprar entradas directamente en nuestra web, con imprimir el mail de confirmación de compra que envía paypal será suficiente para acceder al recinto.</p>
			<p>El proceso de compra de entradas es gestionado por paypal, si bien no es necesario tener una cuenta, se puede comprar directamente con tarjeta de crédito desde la propia web de paypal.</p>
			</div>
		</div>
	</div>
</body>
</html>

<!doctype html>
<html lang="es">
<head>
	<link href="../style/back.css" type="text/css" rel="stylesheet" />
	<link href="../style/store.css" type="text/css" rel="stylesheet" />
<?php
require("../head.php");
?>
	<link href="../style/back.css" type="text/css" rel="stylesheet" />
	<link href="../style/store.css" type="text/css" rel="stylesheet" />
</head>
<body onload="$('.contenido').fadeIn(1100);">
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

			<div class="contenido tienda" id="contenido">

			<div class="product">
				  <a href="producto/?producto=metavolante" title="Ver Meta Volante">
					<div class="product_header">
					  <h2>META VOLANTE - LP</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>15</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/metavolante.jpg" class="fade_in" alt="Image of Meta Volante">
					</div>
				  </a>
				</div>

				<div class="product">
				  <a href="producto/?producto=pensamientomagico" title="Ver Pensamiento Mágico">
					<div class="product_header">
					  <h2>DISCIPLINA ATLÁNTICO - PENSAMIENTO MÁGICO - LP</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>18</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/pensamientomagico.jpg" class="fade_in" alt="Image of Pensamiento mágico">
					</div>
				  </a>
				</div>

				<div class="product">
				  <a href="producto/?producto=vltra" title="Ver VLTRA">
					<div class="product_header">
					  <h2>ATENCIÓN TSUNAMI - VLTRA - LP</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>15</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/vltra.jpg" class="fade_in" alt="Image of VLTRA">
					</div>
				  </a>
				</div>

				<div class="product">
				  <a href="producto/?producto=realejo" title="Ver REALEJO">
					<div class="product_header">
					  <h2>AUTUMN COMETS - REALEJO - LP</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>16,95</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/realejo.jpg" class="fade_in" alt="Image of REALEJO">
					</div>
				  </a>
				</div>

				<div class="product">
				  <a href="producto/?producto=silencioretaguardia" title="Ver SILENCIO EN LA RETAGUARDIA">
					<div class="product_header">
					  <h2>ATENCIÓN TSUNAMI - SILENCIO EN LA RETAGUARDIA - LP</h2>
					  <span class="dash"></span>
					  <h3>SOLD OUT - GRATIS ONLINE</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/silencioretaguardia.jpg" class="fade_in" alt="Image of SILENCIO EN LA RETAGUARDIA">
					</div>
				  </a>
				</div>

				<div class="product">
				  <a href="producto/?producto=sillasvoladoras" title="Ver LAS SILLAS VOLADORAS">
					<div class="product_header">
					  <h2>INCENDIOS - LAS SILLAS VOLADORAS - LP</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>14</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/sillasvoladoras.jpg" class="fade_in" alt="Image of LAS SILLAS VOLADORAS">
					</div>
				  </a>
				</div>
				<div class="product">
				  <a href="producto/?producto=pensamientodepaz" title="Ver PENSAMIENTO DE PAZ DURANTE UN ATAQUE AÉREO">
					<div class="product_header">
					  <h2>PARACAÍDAS - PENSAMIENTO DE PAZ DURANTE UN ATAQUE AÉREO - EP</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>12</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/pensamientodepaz.jpg" class="fade_in" alt="Image of PENSAMIENTO DE PAZ DURANTE UN ATAQUE AÉREO">
					</div>
				  </a>
				</div>
				<div class="product">
				  <a href="producto/?producto=quelecortenlacabeza" title="Ver QUE LE CORTEN LA CABEZA">
					<div class="product_header">
					  <h2>ATENCIÓN TSUNAMI - QUE LE CORTEN LA CABEZA - LP</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>14</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/quelecortenlacabeza.jpg" class="fade_in" alt="Image of QUE LE CORTEN LA CABEZA">
					</div>
				  </a>
				</div>
				<div class="product">
				  <a href="producto/?producto=elcuerpohumano" title="Ver EL CUERPO HUMANO">
					<div class="product_header">
					  <h2>INCENDIOS - EL CUERPO HUMANO- EP</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>12</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/elcuerpohumano.jpg" class="fade_in" alt="Imagen de EL CUERPO HUMANO OYENTE">
					</div>
				  </a>
				</div>
				<div class="product">
				  <a href="producto/?producto=ellejanooyente" title="Ver EL LEJANO OYENTE">
					<div class="product_header">
					  <h2>ATENCIÓN TSUNAMI - EL LEJANO OYENTE - LP</h2>
					  <span class="dash"></span>
					  <h3>SOLD OUT - GRATIS ONLINE</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/ellejanooyente.jpg" class="fade_in" alt="Imagen del EL LEJANO OYENTE">
					</div>
				  </a>
				</div>

				<!--<div class="product">
				  <a href="#" title="Ver CAMSIETA">
					<div class="product_header">
					  <h2>CAMISETA TERRIBLEMENTE HORTERA</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>15</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/camiseta_ejemplo.jpg" class="fade_in" alt="Imagen de CAMISETA">
					</div>
				  </a>
				</div>
				<div class="product">
				  <a href="#" title="Ver QUE LE CORTEN LA CABEZA">
					<div class="product_header">
					  <h2>BOLSO MARCO SARASI</h2>
					  <span class="dash"></span>
					  <h3><span class="currency_sign">€</span>15</h3>
					</div>
					<div class="product_thumb">
					  <img src="../images/tienda/bolsotela.jpg" class="fade_in" alt="Image of QUE LE CORTEN LA CABEZA">
					</div>
				  </a>
				</div>-->
			</div>
		</div>
	</div>
</body>
</html>

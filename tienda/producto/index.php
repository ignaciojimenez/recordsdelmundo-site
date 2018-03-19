<?PHP
function readCSV($csvFile){
	$file_handle = fopen($csvFile, 'r');
	$cabecera[] = fgetcsv($file_handle, 1024);
	//print_r ($cabecera);
	while (!feof($file_handle) ) {
		$line_of_text[] = fgetcsv($file_handle, 1024);
	}
	foreach ( $line_of_text as $k=>$v ){
		foreach ( $line_of_text[$k] as $i=>$l ){
			$line_of_text[$k][$cabecera[0][$i]] = $l;
			unset($line_of_text[$k][$i]);
		}
		$line_of_text[$line_of_text[$k]["nombre"]] = $line_of_text[$k];
		unset($line_of_text[$k]);
		unset($line_of_text["nombre"]["nombre"]);
	}
	fclose($file_handle);
	return $line_of_text;
}

?>
<!doctype html>
<html>
<head>
	<link href="../../style/store.css" type="text/css" rel="stylesheet" />
<?php
require("../../head.php");
?>
	<link href="../../style/store.css" type="text/css" rel="stylesheet" />
</head>
<body onload="$('.imagenDisco').fadeIn(900); $('.lateral_izq_inferior').fadeIn(900);">
	<div class="container">
		<div class="lateral_izq">
			LATERAL IZQ
		</div>
		<div class="lateral_izq_inferior transicion_cabeceras">
			<a href="../" onclick="$('.lateral_izq_inferior').fadeOut(900);" class="back" title="Back link"></a>
		</div>

		<div class="lateral_dch">
			<?php
				require("../../dcha.php");
			?>
		</div>
		
		<div class="centro">

			<?php
			require("../../menu.php");
			?>

			<div class="contenido" id="contenido" style="display:inline-block;">
				<?php
				$producto= $_GET['producto'];
				$csvFile = '../productos.csv';

				$datos = readCSV($csvFile);
				
				if ($datos[$producto]["tipo"] == "disco"){
					echo "<div class='imagenDisco' style='text-align:left;font-family:Arial; font-size:12px;'>";
					echo "<img src='../../images/tienda/" . htmlspecialchars($datos[$producto]["img"]) . ".jpg' />";
					
					if ($datos[$producto]["estado"] == "ok"){
						echo "<br><strong>Formato:</strong> " . htmlspecialchars($datos[$producto]["formato"]);
						echo "<br><strong>Lanzamiento:</strong>  " . htmlspecialchars($datos[$producto]["lanzamiento"]);
						echo "<br><strong>Precio:</strong>  " . htmlspecialchars($datos[$producto]["precio"]) . " (Envío incluido)";
						echo "<br>";
						echo "<form target='paypal' action='https://www.paypal.com/cgi-bin/webscr' method='post' style='display:inline-block;margin-top:3px;'>";
							echo "<input type='hidden' name='cmd' value='_s-xclick'>";
							echo "<input type='hidden' name='hosted_button_id' value='" . htmlspecialchars($datos[$producto]["btnppal"]) . "'>";
							echo "<input type='image' src='../../images/tienda/comprar.png' border='0' class='button' name='submit' value='Comprar' alt=''>";
							echo "<img alt='' border='0' src='https://www.paypal.com/es_ES/i/scr/pixel.gif' width='1' height='1'>";
						echo "</form>";
						echo "<a href='https://bit.ly/" . htmlspecialchars($datos[$producto]["grupo"]) . htmlspecialchars($datos[$producto]["nombre"])."' class='descarga' style='margin-top:3px;margin-left:9px;display:inline-block;'><img src='../../images/tienda/descargar.png' border='0'></a>";
					}
					
					else if($datos[$producto]["estado"] == "preorder"){
					}
					
					else if($datos[$producto]["estado"] == "lanzamiento"){
						echo "<br><strong>Formato:</strong> " . htmlspecialchars($datos[$producto]["formato"]);
						echo "<br><strong>Lanzamiento:</strong>  " . htmlspecialchars($datos[$producto]["lanzamiento"]);
						echo "<br><strong>Precio:</strong>  " . htmlspecialchars($datos[$producto]["precio"]) . " (Envío incluido)";
						echo "<br>Este disco estar&aacute; disponible próximamente.<br>Suscríbete a nuestra newsletter para estar informado";
					}
					
					else{
						echo "<br><strong>Formato:</strong> " . htmlspecialchars($datos[$producto]["formato"]);
						echo "<br><strong>Lanzamiento:</strong>  " . htmlspecialchars($datos[$producto]["lanzamiento"]);
						echo "<br>Esta edición se ha agotado. En caso de que estés interesado en una reedición, ponte en contacto con nosotros<br>";
						echo "<a href='https://bit.ly/" . htmlspecialchars($datos[$producto]["grupo"]) . htmlspecialchars($datos[$producto]["nombre"])."' class='descarga' style='display:inline-block;' ><img src='../../images/tienda/descargar.png' border='0'></a>";
					}
					echo "</div>";
					
					echo "<div class='playerDisco' style='text-align:left;font-family:Arial; font-size:12px;'>";
					if ($datos[$producto]["bcalbum"] != ""){
						echo '<iframe id="bc" width="300" height="390" style="position: relative; width: 300px; height: 390px;" src="https://bandcamp.com/EmbeddedPlayer/v=2/album=' . htmlspecialchars($datos[$producto]["bcalbum"]) . '/size=grande2/bgcol=FFFFFF/linkcol=333333/debug=true/" allowtransparency="true" frameborder="0"></iframe>';
						/*if ($datos[$producto]["estado"] == "preorder"){
							echo '<iframe style="border: 0; width: 100%; height: 42px;" src="https://bandcamp.com/EmbeddedPlayer/track=' . htmlspecialchars($datos[$producto]["bcalbum"]) . '/size=small/bgcol=ffffff/linkcol=333333/artwork=none/transparent=true/" seamless>Casi Nunca by Atencion Tsunami</iframe>';
						}
						else{
							echo '<iframe id="bc" width="300" height="390" style="position: relative; width: 300px; height: 390px;" src="https://bandcamp.com/EmbeddedPlayer/v=2/album=' . htmlspecialchars($datos[$producto]["bcalbum"]) . '/size=grande2/bgcol=FFFFFF/linkcol=333333/debug=true/" allowtransparency="true" frameborder="0"></iframe>';
						}*/
					}
					else if($datos[$producto]["estado"] == "preorder"){
						echo "<strong>Formato:</strong> " . htmlspecialchars($datos[$producto]["formato"]);
						echo "<br><strong>Lanzamiento:</strong>  " . htmlspecialchars($datos[$producto]["lanzamiento"]);
						echo "<br><strong>Precio:</strong>  " . htmlspecialchars($datos[$producto]["precio"]) . " (Envío incluido)";
						echo "<br>";
						echo "<form target='paypal' action='https://www.paypal.com/cgi-bin/webscr' method='post' style='display:inline-block;margin-top:3px;'>";
							echo "<input type='hidden' name='cmd' value='_s-xclick'>";
							echo "<input type='hidden' name='hosted_button_id' value='" . htmlspecialchars($datos[$producto]["btnppal"]) . "'>";
							echo "<input type='image' src='../../images/tienda/comprar.png' border='0' class='button' name='submit' value='Comprar' alt=''>";
							echo "<img alt='' border='0' src='https://www.paypal.com/es_ES/i/scr/pixel.gif' width='1' height='1'>";
						echo "</form>";
						/*echo "<br>Los env&iacute;os comenzar&aacute;n la segunda semana de noviembre";
						echo "<br>La semana antes del lanzamiento os haremos llegar un enlace de descarga";*/
						echo "<a href='https://bit.ly/" . htmlspecialchars($datos[$producto]["grupo"]) . htmlspecialchars($datos[$producto]["nombre"])."' class='descarga' style='margin-top:3px;margin-left:9px;display:inline-block;'><img src='../../images/tienda/descargar.png' border='0'></a>";
					}
					else{
						echo "<span style='font-size:36;text-align:left;'>EL DISCO SELECCIONADO<br>NO PUEDE ESCUCHARSE<br>ACTUALMENTE</span>";
					}
					echo "</div>";
				}
				else{
					echo "TODO";
				}
				?>
			</div>	
		</div>
	</div>
</body>
</html>

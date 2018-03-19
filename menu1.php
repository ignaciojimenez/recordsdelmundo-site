<?php
$root = "/";
$actual = substr(strrchr(substr($_SERVER['REQUEST_URI'],0,strlen($_SERVER['REQUEST_URI'])-1), "/"), 1);
$espacio = "&frasl;";

echo '<div class="cabecera_siglas_img transicion_cabeceras" id="cabecera_siglas_img">';
	echo '<a href="#" onclick="mostrar()"><img src="'.$root .'images/siglas.png" /></a>';
echo '</div>';
echo '<div class="cabecera_logo transicion_cabeceras" id="cabecera_logo">';
	echo '<a href="#" onclick="mostrar()"><img src="'.$root.'images/fosbury.png"/></a>';
echo '</div>';
echo '<div class="cabecera_menu1 transicion_cabeceras" id="cabecera_menu1">';
	if ($actual == 'at'){echo '<a href="#" class="active" onclick="esconder(\''.$root.'grupos/at' .'\');">ATENCI&Oacute;N TSUNAMI</a>';	}
	else{echo '<a href="#" onclick="esconder(\''.$root.'grupos/at' .'\');">ATENCI&Oacute;N TSUNAMI</a>';}
	if ($actual == 'inc'){echo '<a href="#" class="active" onclick="esconder(\''.$root .'grupos/inc\');">INCENDIOS</a>';}
	else{echo '<a href="#" onclick="esconder(\''.$root .'grupos/inc\');">INCENDIOS</a>';}
	if ($actual == 'par'){echo '<a href="#" class="active" onclick="esconder(\''.$root .'grupos/par\');">PARACA&Iacute;DAS</a>';}
	else{echo '<a href="#" onclick="esconder(\''.$root .'grupos/par\');">PARACA&Iacute;DAS</a>';}
echo '</div>';
echo '<div class="cabecera_menu2 transicion_cabeceras" id="cabecera_menu2">';
	if ($actual == 'info'){echo '<a href="#" class="active" onclick="esconder(\''.$root .'info\');">INFO</a>';}
	else{echo '<a href="#" onclick="esconder(\''.$root .'info\');">INFO</a>';}
	echo $espacio;
	if ($actual == 'blog'){echo '<a href="#" class="active" onclick="esconder(\''.$root .'blog\');">BLOG</a>';}
	else{echo '<a href="#" onclick="esconder(\''.$root .'blog\');">BLOG</a>';}
	echo $espacio;
	if ($actual == 'tienda'){echo '<a href="#" class="active" onclick="esconder(\''.$root .'tienda\');">TIENDA</a>';}
	else{echo '<a href="#" onclick="esconder(\''.$root .'tienda\');">TIENDA</a>';}
	echo $espacio;
	if ($actual == 'tour'){echo '<a href="#" class="active" onclick="esconder(\''.$root .'tour\');">TOUR</a>';}
	else{echo '<a href="#" onclick="esconder(\''.$root .'tour\');">TOUR</a>';}
echo '</div>';

?>


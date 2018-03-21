/**********************************************************
Codigo para la validacion del correo electronico
**********************************************************/
function echeck(str) {
	var at="@";
	var dot=".";
	var lat=str.indexOf(at);
	var lstr=str.length;
	var ldot=str.indexOf(dot);

	if (str.indexOf(at)===-1){return false;}
	if (str.indexOf(at)===-1 || str.indexOf(at)===0 || str.indexOf(at)===lstr){return false;}
	if (str.indexOf(dot)===-1 || str.indexOf(dot)===0 || str.indexOf(dot)===lstr){return false;}
	if (str.indexOf(at,(lat+1))!==-1){return false;}
	if (str.substring(lat-1,lat)===dot || str.substring(lat+1,lat+2)===dot){return false;}
	if (str.indexOf(dot,(lat+2))===-1){return false;}
	if (str.indexOf(" ")!==-1){return false;}
	return true;
}

/**********************************************************
Codigo para el envio de la peticion de alta en el mailing
**********************************************************/
var httpRequest = false;

function alertContents() {
	var result="";
	if (httpRequest.readyState === 4) {
		if (httpRequest.status === 200) {
			//alert(httpRequest.responseText);
			result = httpRequest.responseText;
			$(".success").text(result).fadeIn(1600).delay(2000).fadeOut(1600);
			$("#mailing_mail").val("");
		} else {//alert('There was a problem with the request.');
		}
	}
}

//funcion que envia los parametros y el formulario
function makeRequest(url, parameters) {
	httpRequest = false;
	if (window.XMLHttpRequest) { // Mozilla, Safari,...
		httpRequest = new XMLHttpRequest();
		if (httpRequest.overrideMimeType) {
			// set type accordingly to anticipated content type
			//httpRequest.overrideMimeType('text/xml');
			httpRequest.overrideMimeType("text/html");
		}
	} else if (window.ActiveXObject) { // IE
		try {
			httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
			httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
			//ActiveXError
			}
		}
	}
	if (!httpRequest) {
		//alert('Cannot create XMLHTTP instance');
		return false;
	}
	httpRequest.onreadystatechange = alertContents;
	httpRequest.open("GET", url + parameters, true);
	httpRequest.send(null);
}

function get() {
	document.getElementById("success").innerHTML ="";
	var getstr = "?";
	//el objeto es est�tico => el formulario que contiene los controles
	var mail = "";
	mail=document.getElementById("mailing_mail").value;
	if (!echeck(mail)){$(".success").text("Formato incorrecto").fadeIn(1600).delay(2000).fadeOut(1600); $("#mailing_mail").val("");}
	else{
		getstr += document.getElementById("mailing_mail").name + "=" + mail;
		//makeRequest('mailing/get.php', getstr);
		makeRequest("mailing/mcapi_listSubscribe.php", getstr);
	}
}

/**********************************************************
Codigo para el desplazamiento del menu de la cabecera
**********************************************************/
function go(url){
	$(".contenido").fadeOut(1000);
	$(".lateral_izq_inferior").fadeOut(1000);
	setTimeout(function(){ window.location = url; }, 1000);
}

function mostrar(){
document.getElementById("cabecera_siglas_img").style.marginTop="0px";
document.getElementById("cabecera_logo").style.marginTop="65px";
document.getElementById("cabecera_menu1").style.marginTop="23px";
document.getElementById("cabecera_menu2").style.marginTop="13px";
document.getElementsByClassName("lateral_izq_inferior")[0].style.marginTop="400px";
go("/");
}

function esconder(mostrar){

if (mostrar.indexOf("tienda") === -1){
	document.getElementById("cabecera_siglas_img").style.marginTop="-200px";
	document.getElementById("cabecera_logo").style.marginTop="0px";
	document.getElementById("cabecera_menu1").style.marginTop="-10px";
	document.getElementById("cabecera_menu2").style.marginTop="0px";
}
else if (mostrar.indexOf("producto") !== -1){
	//En caso de querer mostrar un producto
	}
else{
	document.getElementById("cabecera_siglas_img").style.marginTop="0px";
	document.getElementById("cabecera_logo").style.marginTop="-570px";
	document.getElementById("cabecera_menu1").style.marginTop="-40px";
	document.getElementById("cabecera_menu2").style.marginTop="-70px";
	document.getElementById("contenido").style.marginTop="400px";
}
go(mostrar);
}

/**********************************************************
Codigo para la ofuscacion del mail
**********************************************************/
function printmail(nombre,tagid){
	var mail = nombre + "@recordsdelmundo.es";
	var s0 = document.getElementById(tagid);
	var newlink = document.createElement("a");
	newlink.setAttribute("href", "mailto:" + mail);
	newlink.innerText =mail;
	s0.appendChild(newlink);
}

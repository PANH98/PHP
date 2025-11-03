<?php
#Sesion destroy se usará para el cierre de sesión#
	session_destroy();
	#Se enlaza con el script para realizar el inicio de sesión#
	if(headers_sent()){
		echo "<script> window.location.href='index.php?vista=login'; </script>";
	}else{
		header("Location: index.php?vista=login");
	}
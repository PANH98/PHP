<?php
#Se realiza la busqueda desde la subindice 0(página uno)#
	$inicio = ($pagina>0) ? (($pagina * $registros)-$registros) : 0;
	$tabla="";
#Se realiza la busqueda de acuerdo al termino a buscar#
	if(isset($busqueda) && $busqueda!=""){
#Comando /consulta para realizar la busqueda por termino LIKE# 
		$consulta_datos="SELECT * FROM usuario WHERE ((usuario_id!='".$_SESSION['id']."') AND (usuario_nombre LIKE '%$busqueda%' OR usuario_apellido LIKE '%$busqueda%' OR usuario_usuario LIKE '%$busqueda%' OR usuario_email LIKE '%$busqueda%')) ORDER BY usuario_nombre ASC LIMIT $inicio,$registros";
#Consulta del conteo de la busqueda global#
		$consulta_total="SELECT COUNT(usuario_id) FROM usuario WHERE ((usuario_id!='".$_SESSION['id']."') AND (usuario_nombre LIKE '%$busqueda%' OR usuario_apellido LIKE '%$busqueda%' OR usuario_usuario LIKE '%$busqueda%' OR usuario_email LIKE '%$busqueda%'))";

	}else{
#Se usan las variables de sesion#
		$consulta_datos="SELECT * FROM usuario WHERE usuario_id!='".$_SESSION['id']."' ORDER BY usuario_nombre ASC LIMIT $inicio,$registros";
#Se ordenan los registros de acuerdo al usuario y se asigna el limite#

#Se cuentan los registros encontrados según la consulta realizada#
		$consulta_total="SELECT COUNT(usuario_id) FROM usuario WHERE usuario_id!='".$_SESSION['id']."'";
		
	}
#Se realiza la codificación con la variable creada 
	$conexion=conexion();
 #Se aplica el ciclo de fetch para la busqueda en la consulta a realizar#
	$datos = $conexion->query($consulta_datos);
	$datos = $datos->fetchAll();
#Fetch column buscará todas las consultas en la base de datos#
	$total = $conexion->query($consulta_total);
	$total = (int) $total->fetchColumn();
# Npaginas calculará los registros#
	$Npaginas =ceil($total/$registros);
#Función Ceil: redondea el resultado del calculo de Npaginas al número más cercano#


#Se crea una variable y se concatena con el código de user_list.php # 
	$tabla.='
	<div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                	<th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
	';
#Si hay un total de registros puede continuar con el proceso#
	if($total>=1 && $pagina<=$Npaginas){
		$contador=$inicio+1;
		$pag_inicio=$inicio+1;
		#Se crea un bucle en el cual se leerán los datos de la columna# 
		foreach($datos as $rows){
			#Se colocan los campos de las tablas#
			$tabla.='
				<tr class="has-text-centered" >
					<td>'.$contador.'</td>
                    <td>'.$rows['usuario_nombre'].'</td>
                    <td>'.$rows['usuario_apellido'].'</td>
                    <td>'.$rows['usuario_usuario'].'</td>
                    <td>'.$rows['usuario_email'].'</td>
                    <td>
                        <a href="index.php?vista=user_update&user_id_up='.$rows['usuario_id'].'" class="button is-success is-rounded is-small">Actualizar</a>
                    </td>
                    <td>
                        <a href="'.$url.$pagina.'&user_id_del='.$rows['usuario_id'].'" class="button is-danger is-rounded is-small">Eliminar</a>
                    </td>
                </tr>
            ';
			#Se incrementa#
            $contador++;
		}
		$pag_final=$contador-1;
	}else{
		#Si hay registros se envia al usuario a la página 1#
		if($total>=1){
			#Se crean botones para actualizar el usuario#
			$tabla.='
				<tr class="has-text-centered" >
					<td colspan="7">
					
						<a href="'.$url.'1" class="button is-link is-rounded is-small mt-4 mb-4">
							Haga clic acá para recargar el listado
						</a>
					</td>
				</tr>
			';
			#Se cargan las vistas de la página web#
		}else{
			$tabla.='
				<tr class="has-text-centered" >
					<td colspan="7">
						No hay registros en el sistema
					</td>
				</tr>
			';
		}
	}
#Se cierra la tabla#

	$tabla.='</tbody></table></div>';
#Se imprime la información del registro de la tabla#
	if($total>0 && $pagina<=$Npaginas){
		$tabla.='<p class="has-text-right">Mostrando usuarios <strong>'.$pag_inicio.'</strong> al <strong>'.$pag_final.'</strong> de un <strong>vtotal de '.$total.'</strong></p>';
	}

	$conexion=null;
	#Se imprimen todos los registros de la tabla# 
	echo $tabla;


	#Función paginador de tablas#
	if($total>=1 && $pagina<=$Npaginas){
		echo paginador_tablas($pagina,
		$Npaginas,$url,7);
	}
	#Botones: muestra una cantidad x de botones#
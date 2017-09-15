<?php 

/*******************************Atencion*************************************/
// Esta hoja fue creada con la finalidad de proveer genericidad a la        *
// aplicacion, es decir, en este modulo se guardaran todas la funciones     *
// generales a fin de poder facilitar la creacion y manipulacion de los     *
// datos en nuevas hojas de script de php que se usaran en la aplicacion.   *
//                                                                          *
// Informacion Adisional: Basicamente esta seria la capa 0 de los codigos   *
// php, al crear una hoja para un uso en especifico simplemente usaremos la *
// funcion <<include('funciones_generales.php');>> para importar todas      *
// nuestras funciones genericas, y apoyarnos en estas funciones para        *
// manipular la informacion en general (includes, consultas a base de       *
// datos parametrizadas, etc...) mas facilmente.                            *
/****************************************************************************/

include('conexion.php');

/*funciones de include*/

function include_head($modulo_title) {
	include('iphp/head.php');
}

function include_aside($option) {
	include('iphp/aside.php');
}

/*funciones generales (algoritmos para usos en general)*/

/*Esta funcion transforma un array BIDIMENSIONAL de php en impresiones;
  <option></option> para cargar los select, util para transformar los
  resultset de las consultas SQL e intruducirlas asincronicamente con
  JQuery (puede ser a traves de:
  
  <<$.get(...)>>, 
  <<$.post(...)>>, 
  <<$.ajax(...)>>, 

  etc...)*/
function array_to_select_options($array_bidimensional, $opcion_indice, $opcion_valor, $select_placeholder = NULL, $opcion_indice_seleccionado = NULL) {
  if(!is_null($select_placeholder)) {
    echo '<option value=""'.((is_null($opcion_indice_seleccionado)) ? ' selected' : '').' disabled>'.($select_placeholder).'</option>';
  }

  foreach($array_bidimensional as $array) {
    echo '<option value="'.($array[$opcion_indice]).'"'.(((!is_null($opcion_indice_seleccionado)) && ($array[$opcion_indice] == $opcion_indice_seleccionado)) ? ' selected' : '').'>'.($array[$opcion_valor]).'</option>';
  }
}

function array_to_tabla_body($array_bidimensional) {
    
}



 ?>
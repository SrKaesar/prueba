<?php 

/********************************************************************************/
/* Esta hoja contiene las palabras, oraciones, etiquetas, y elementos informa-  */
/* tivos (en español) que se visualizaran en la aplicacion.                     */
/*                                                                              */
/* Informacion Adicional: Para cambiar el idioma de la aplicacion basta con     */
/* (1) Copiar esta hoja y sustituir los valores de cada variable por su         */
/* equivalente en el idioma correspondiente al que se desea traducir.           */
/* (2) Guardarlo con un nombre correspondiente al idioma traducido.             */
/* (3) Agregar la funcion <<include('[nombre del archivo guardado]');>> dentro  */
/* del algoritmo de la hoja php: <<cargar_idioma.php>>... y listo!!             */
/*                                                                              */
/********************************************************************************/

/*configuraciones*/

$formato_general_fecha = 'mm/dd/yyyy';

/*variables "index.php"*/

$index['iniciar-sesion-titulo'] = 'Iniciar Sesion';
$index['usuario'] = 'Usuario...'; // Campo Usuario
$index['contrasena'] = 'Contraseña...'; // Campo Contraseña
$index['recordar'] = 'Recordar'; // Check Recordar
$index['iniciar-sesion-boton'] = 'Iniciar Sesion'; // Boton Iniciar Sesion


/*variables del <aside>*/

$aside['clientes'] = 'Clientes';
$aside['citas'] = 'Citas';
$aside['orden-tiendas'] = 'Orden de tiendas';
$aside['orden'] = 'Orden';
$aside['buscar-producto'] = 'Buscar producto';
$aside['administracion'] = 'Administracion';
$aside['cerrar-sesion'] = 'Cerrar Sesion';

/*variables del <main> (customers.php)*/

$main['customers']['titulo-seccion'] = 'Listado de Clientes';
$main['customers']['boton-buscar'] = 'Buscar';
$main['customers']['boton-agregar-cliente'] = 'Agregar Cliente';

$main['appointments']['titulo-seccion'] = 'Citas';

/*variables del <main> (informacion_cliente.php)*/

$main['informacion-cliente']['titulo-seccion'] = 'Informacion del Cliente';

$main['informacion-cliente']['menu-opciones']['boton-close'] = 'Back';
$main['informacion-cliente']['menu-opciones']['boton-save'] = 'Save';
$main['informacion-cliente']['menu-opciones']['boton-appointment'] = 'Appointment';
$main['informacion-cliente']['menu-opciones']['boton-invoice'] = 'Invoice';
$main['informacion-cliente']['menu-opciones']['boton-order'] = 'Order';
$main['informacion-cliente']['menu-opciones']['boton-new-followup'] = 'New Followup';

/*nombres de los tabs (informacion_cliente.php)*/
$main['informacion-cliente']['tab-names']['tab-demographics'] = 'Demographics';
$main['informacion-cliente']['tab-names']['tab-others'] = 'Others';
$main['informacion-cliente']['tab-names']['tab-symptoms'] = 'Symptoms';
$main['informacion-cliente']['tab-names']['tab-applications'] = 'Applications';
$main['informacion-cliente']['tab-names']['tab-surgeries'] = 'Surgeries';
$main['informacion-cliente']['tab-names']['tab-history'] = 'history';
$main['informacion-cliente']['tab-names']['tab-call-log'] = 'Call Log';
$main['informacion-cliente']['tab-names']['tab-research'] = 'Research';

/*campos del tab demographics*/

$demographics['label-customer-no'] = 'Customer No°';
$demographics['label-cell-phone'] = 'Cell Phone';
$demographics['label-home-phone'] = 'Home Phone';
$demographics['label-first-name'] = 'First Name';
$demographics['label-last-name'] = 'Last Name';
$demographics['label-address'] = 'Address';
$demographics['label-address-continued'] = 'Address Continued';
$demographics['label-zip-code'] = 'Zip Code';
$demographics['label-state'] = 'State';
$demographics['label-city'] = 'City';
$demographics['label-dbo'] = 'DBO';
$demographics['label-customers-type'] = 'Customer Type';
$demographics['label-active-since'] = 'Active Since';
$demographics['label-member-no'] = 'Member No°';
$demographics['label-member-ending-date'] = 'Member Ending Date';
$demographics['label-source'] = 'Source';
$demographics['label-sales-person'] = 'Sales Person';
$demographics['label-taxt-exempt'] = 'Taxt Exempt'; 
$demographics['label-ssn'] = 'SSN';
$demographics['label-member-type'] = 'Member Type';
$demographics['label-osa'] = 'Old Shipping Address';

/*campos del tab Others*/

$others['label-ocupation'] = 'Ocupation';
$others['label-email'] = 'Email';
$others['label-marital-status'] = 'Marital Status';
$others['label-height'] = 'Height';
$others['label-width'] = 'Width';
$others['label-hours-of-rest'] = 'Hours of Rest';
$others['label-glasses-water'] = 'Glasses of Water';
$others['label-age'] = 'Age';
$others['label-eye-color'] = 'Eye Color';
$others['label-gender'] = 'Gender';
$others['label-medical-plan'] = 'Medical Plan';
$others['label-policy-no'] = 'Policy No°';
$others['label-excercise'] = 'Excercise';
$others['label-diet'] = 'Diet';
$others['label-believe'] = 'Believe in God';
$others['label-notes'] = 'Notes';

/*campos del tab Call Log*/

$call_log['label-comment'] = 'Comment';
$call_log['label-clh'] = 'Call Log History';

/*campos del tab Symptoms*/

$symptoms['avalible-symptoms'] = 'Symptoms (List)';
$symptoms['customers-symptoms'] = 'Symptoms (Customer)';

/*campos del tab Applications*/

$symptoms['avalible-applications'] = 'Applications (List)';
$symptoms['customers-applications'] = 'Applications (Customer)';

/*campos del tab Surgeries*/

$symptoms['avalible-surgeries'] = 'Surgeries (List)';
$symptoms['customers-surgeries'] = 'Surgeries (Customer)';

/*informacion_appointment.php*/

$main['informacion-apppointment']['titulo-seccion'] = 'Appointment Information';

$main['informacion-apppointment']['opcion-boton']['reschedule-appointment'] = 'Reschedule Appointment';
$main['informacion-apppointment']['opcion-boton']['confirm-appointment'] = 'Confirm Appointment';
$main['informacion-apppointment']['opcion-boton']['cancel-appointment'] = 'Cancel Appointment';
$main['informacion-apppointment']['opcion-boton']['incomplete'] = 'Incomplete';
$main['informacion-apppointment']['opcion-boton']['prepaid'] = 'Prepaid';

/*campos de informacion_appointment.php*/

$main['informacion-apppointment']['label-customer-name'] = 'Customer Name';
$main['informacion-apppointment']['label-appointment-type'] = 'Appointment Type';
$main['informacion-apppointment']['label-appointment-date'] = 'Appointment Date';
$main['informacion-apppointment']['label-status'] = 'Status';
$main['informacion-apppointment']['label-location'] = 'Location';
$main['informacion-apppointment']['label-source'] = 'Source';
$main['informacion-apppointment']['label-sales-rep'] = 'Sales Rep';
$main['informacion-apppointment']['label-reason'] = 'Reason';
$main['informacion-apppointment']['label-products-available'] = 'Products Available';
$main['informacion-apppointment']['label-products-recommeded'] = 'Products Recommeded';
$main['informacion-apppointment']['label-products-taken'] = 'Products Taken';

/*campos de orders.php*/

$main['orders']['titulo-seccion'] = 'Order Search';

$main['orders']['label-location'] = 'Location';
$main['orders']['label-order-status'] = 'Order Status';
$main['orders']['label-sales-reps'] = 'Sales Reps';
$main['orders']['label-order-no'] = 'Order No';
$main['orders']['label-order-date-start'] = 'Order Date Start';
$main['orders']['label-order-date-end'] = 'Order Date End';
$main['orders']['boton-search'] = 'Search';

/*campos de phone_order.php*/

$main['phone-order']['titulo-seccion'] = 'Phone Order';




 ?>

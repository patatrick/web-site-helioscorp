<?php 
include 'modelo.php';
$call = new Modelo();
switch ($_POST['metodo']) {
	case 'login':
		echo json_encode($call->Login($_POST['username'], $_POST['password']));
	break;
	default:
		echo json_encode(['Code'=> 405, 'Message'=> 'No se encontró el método solicitado.']);
	break;
}

?>
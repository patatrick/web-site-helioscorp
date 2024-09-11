<?php
session_start();
include 'config.php';

class Modelo
{
	const MESSAGE_EXITO = 'Operación realizada con exito.';
	const MESSAGE_ERR_ADJ = 'No se pudo guardar archivo adjunto.';
	const MESSAGE_NOT_FOUND = 'No se encontró la dirección url.';
	const MESSAGE_VACIO = 'No se encontraron datos.';
	const MESSAGE_ERROR_BD = 'No se realizó la solicitud en la base de datos.';
	const MESSAGE_ERROR_MAIL = 'Hubo un problema en el envío de correo, verifique que sea correcto y vuelva a intentarlo.';

	public function Login($username, $password)
	{
		try{
			$password = md5(sha1($password));
			$sp = 'CALL sp_login(?, ?)';
			$db = new db();
			$db = $db->connect();
			$stmt = $db->prepare($sp);
			$stmt->bindParam(1, $username, PDO::PARAM_STR);
			$stmt->bindParam(2, $password, PDO::PARAM_STR);
			$stmt->execute();
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$db = null;
			if($data){
				foreach ($data as $key => $value) {
					$_SESSION[$key] = $value;
				}
				return ['Code' => 200, 'Message' => MESSAGE_EXITO];
			}
			else{
				return['Code' => 404, 'Message' => 'Usuario o contraseña incorrecto.'];
			}
		}
		catch (Exception $e) {
			return ['Code'=> $e->getCode(), 'Message'=> $e->getMessage().' in line '.$e->getLine()];
		}
	}
}


?>
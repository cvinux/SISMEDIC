<?php 

	class LoginModel extends Sqlsrv
	{
		private $intIdUsuario;
		private $strUsuario;
		private $strPassword;
		private $strToken;

		public function __construct()
		{
			parent::__construct();
		}	

		public function loginUser(string $usuario, string $password)
		{

			$this->strUsuario = $usuario;
			$this->strPassword = $password;
			$sql = "SELECT idusuario,status FROM Usuario WHERE 
					email = '$this->strUsuario' and 
					password = '$this->strPassword' and 
					status != 0 ";
			$request = $this->select($sql);

			return $request;
		}

		public function sessionLogin(int $iduser){
			$this->intIdUsuario = $iduser;
			//BUSCAR ROLE 
			$sql = "SELECT p.idusuario,
							p.identificacion,
							p.nombres,
							p.apellidopaterno,
							p.apellidomaterno,
							p.telefono,
							p.email, 
							r.idrol,
							r.rol,
							p.status 
					FROM Usuario p
					INNER JOIN rol r
					ON p.idrol = r.idrol
					WHERE p.idusuario = $this->intIdUsuario";
			$request = $this->select($sql);
			$_SESSION['userData'] = $request;
			return $request;
		}

		public function getUserEmail(string $strEmail){
			$this->strUsuario = $strEmail;
			$sql = "SELECT idusuario,nombres,apellidopaterno,apellidomaterno,status FROM Usuario WHERE 
					email = '$this->strUsuario' and  
					status = 1 ";
			$request = $this->select($sql);
			return $request;
		}

		public function setTokenUser(int $idusuario, string $token){
			$this->intIdUsuario = $idusuario;
			$this->strToken = $token;
			$sql = "UPDATE Usuario SET token = ? WHERE idusuario = $this->intIdUsuario ";
			$arrData = array($this->strToken);
			$request = $this->update($sql,$arrData);
			return $request;
		}

		public function getUsuario(string $email, string $token){
			$this->strUsuario = $email;
			$this->strToken = $token;
			$sql = "SELECT idusuario FROM Usuario WHERE 
					email = '$this->strUsuario' and 
					token = '$this->strToken' and 					
					status = 1 ";
			$request = $this->select($sql);
			return $request;
		}

		public function insertPassword(int $idusuario, string $password){
			$this->intIdUsuario = $idusuario;
			$this->strPassword = $password;
			$sql = "UPDATE Usuario SET password = ?, token = ? WHERE idusuario = $this->intIdUsuario ";
			$arrData = array($this->strPassword,"");
			$request = $this->update($sql,$arrData);
			return $request;
		}
	}
 ?>
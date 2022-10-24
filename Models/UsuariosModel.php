<?php 

	class UsuariosModel extends Sqlsrv
	{
		private $intIdUsuario;
		private $strIdentificacion;
		private $strNombre;
		private $strApellidoPaterno;
		private $strApellidoMaterno;
		private $intTelefono;
		private $strEmail;
		private $strPassword;
		private $strToken;
		private $intTipoId;
		private $intStatus;
		private $strNit;
		private $strNomFiscal;
		private $strDirFiscal;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario(string $identificacion, string $nombre, string $apellidopaterno, string $apellidomaterno, int $telefono, string $email, string $password, int $tipoid, int $status){

			$this->strIdentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strApellidoPaterno = $apellidopaterno;
			$this->strApellidoMaterno = $apellidomaterno;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;
			$return = "";

			$sql = "SELECT * FROM usuario WHERE 
					email = '{$this->strEmail}' or identificacion = '{$this->strIdentificacion}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO usuario(identificacion,nombres,apellidopaterno,apellidomaterno,telefono,email,password,idrol,status) 
								  VALUES(?,?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->strIdentificacion,
        						$this->strNombre,
        						$this->strApellidoPaterno,
        						$this->strApellidoMaterno,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strPassword,
        						$this->intTipoId,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist"; 

			} 
	        return $return;
		}

		public function selectUsuarios(){
			$whereAdmin = "";
			if($_SESSION['idUser'] != 1 ){
				$whereAdmin = " and p.idusuario != 1 ";
			}
			$sql = "SELECT p.idusuario,p.identificacion,p.nombres,p.apellidopaterno,p.apellidomaterno,p.telefono,p.email,p.status,r.idrol,r.rol 
					FROM usuario p 
					INNER JOIN rol r
					ON p.idrol = r.idrol
					WHERE p.status != 0 ".$whereAdmin;
					$request = $this->select_all($sql);
					return $request;
		}
		public function selectUsuario(int $idusuario){
			$this->intIdUsuario = $idusuario;
			$sql = "SELECT p.idusuario,p.identificacion,p.nombres,p.apellidopaterno,p.apellidomaterno,p.telefono,p.email,r.idrol,r.rol,p.status, p.fechacreacion as fechaRegistro 
					FROM usuario p
					INNER JOIN rol r
					ON p.idrol = r.idrol
					WHERE p.idusuario = $this->intIdUsuario";
			$request = $this->select($sql);
			return $request;
		}

		public function updateUsuario(int $idusuario, string $identificacion, string $nombre, string $apellidopaterno,string $apellidomaterno, int $telefono, string $email, string $password, int $tipoid, int $status){

			$this->intIdUsuario = $idusuario;
			$this->strIdentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strApellidoPaterno = $apellidopaterno;
			$this->strApellidoMaterno = $apellidomaterno;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM usuario WHERE (email = '{$this->strEmail}' AND idusuario != $this->intIdUsuario)
										  OR (identificacion = '{$this->strIdentificacion}' AND idusuario != $this->intIdUsuario) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE usuario SET identificacion=?, nombres=?, apellidopaterno=?, apellidomaterno=?, telefono=?, email=?, password=?, idrol=?, status=? 
							WHERE idusuario = $this->intIdUsuario ";
					$arrData = array($this->strIdentificacion,
	        						$this->strNombre,
	        						$this->strApellidoPaterno,
	        						$this->strApellidoMaterno,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->strPassword,
	        						$this->intTipoId,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE usuario SET identificacion=?, nombres=?, apellidopaterno=?, apellidomaterno=?, telefono=?, email=?, idrol=?, status=? 
							WHERE idusuario = $this->intIdUsuario ";
					$arrData = array($this->strIdentificacion,
	        						$this->strNombre,
	        						$this->strApellidoPaterno,
	        						$this->strApellidoMaterno,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->intTipoId,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}
		public function deleteUsuario(int $intIdusuario){
			$this->intIdUsuario = $intIdusuario;
			$sql = "UPDATE usuario SET status = ? WHERE idusuario = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

		public function updatePerfil(int $idusuario, string $identificacion, string $nombre, string $apellidopaterno, string $apellidomaterno, int $telefono, string $password){
			$this->intIdUsuario = $idusuario;
			$this->strIdentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strApellidoPaterno = $apellidopaterno;
			$this->strApellidoMaterno = $apellidomaterno;
			$this->intTelefono = $telefono;
			$this->strPassword = $password;

			if($this->strPassword != "")
			{
				$sql = "UPDATE usuario SET identificacion=?, nombres=?, apellidopaterno=?,  apellidomaterno=?, telefono=?, password=? 
						WHERE idusuario = $this->intIdusuario ";
				$arrData = array($this->strIdentificacion,
								$this->strNombre,
								$this->strApellidoPaterno,
								$this->strApellidoMaterno,
								$this->intTelefono,
								$this->strPassword);
			}else{
				$sql = "UPDATE usuario SET identificacion=?, nombres=?, apellidopaterno=?,	apellidomaterno=?, telefono=? 
						WHERE idusuario = $this->intIdUsuario ";
				$arrData = array($this->strIdentificacion,
								$this->strNombre,
								$this->strApellidoPaterno,
								$this->strApellidoMaterno,
								$this->intTelefono);
			}
			$request = $this->update($sql,$arrData);
		    return $request;
		}

	 
	}
 ?>
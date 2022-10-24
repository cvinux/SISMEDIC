<?php 

	class PacientesModel extends Sqlsrv
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

		public function insertPaciente(string $nombre, string $apellidopaterno, string $apellidomaterno,string $nrodocumento, string $fechanacimiento, string $nropasemedico, string $fechapruebacovid, int $idempresa,  int $idpuesto, int $idturno, int $nrodiasturno, int $idgruposanguineo){

			$fechanacimiento= date('Y-m-d H:i:s');
			$fechapruebacovid= date('Y-m-d H:i:s');

			$this->strNombre = $nombre;
			$this->strApellidoPaterno = $apellidopaterno;
			$this->strApellidoMaterno = $apellidomaterno;			
			$this->strNroDocumento = $nrodocumento;
			$this->strFechaNacimiento = $fechanacimiento;
			$this->strNroPaseMedico = $nropasemedico;
			$this->strFechaPruebaCovid = $fechapruebacovid;
			$this->intCboEmpresa = $idempresa;
			$this->intCboPuesto = $idpuesto;
			$this->intCboTurno = $idturno;
			$this->intCboDiasTurno = $nrodiasturno;  
			$this->intCboGrupoSanguineo = $idgruposanguineo;
			$this->intStatus = 1;
			$return = "";
			$sql = "SELECT * FROM paciente WHERE 
					  nrodocumento = '{$this->strNroDocumento}' ";
			$request = $this->select_all($sql);


			if(empty($request))
			{
				$query_insert  = "INSERT INTO paciente(nombres,apellidopaterno,apellidomaterno,nrodocumento,fechanacimiento,nropasemedico,fechapruebacovid,idempresa,idpuesto,idturno,nrodiasturno,idgruposanguineo,status) 
								  VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->strNombre,
        						$this->strApellidoPaterno,
        						$this->strApellidoMaterno,
        						$this->strNroDocumento,
        						$this->strFechaNacimiento,
        						$this->strNroPaseMedico,
        						$this->strFechaPruebaCovid,
        						$this->intCboEmpresa,
        						$this->intCboPuesto,
        						$this->intCboTurno,
        						$this->intCboDiasTurno,
        						$this->intCboGrupoSanguineo,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;

	        	$query_insert1  = "INSERT INTO AntecedentesPersonales(idpaciente) 
								  VALUES(?)";
	        	$arrData1 = array($request_insert);
	        	$request_insert1 = $this->insert($query_insert1,$arrData1);

	        	$query_insert2  = "INSERT INTO motivoatencion(idpaciente) 
								  VALUES(?)";
	        	$arrData2 = array($request_insert);
	        	$request_insert2 = $this->insert($query_insert2,$arrData2);
	        
	        	$query_insert3  = "INSERT INTO funcionesbiologicas(idpaciente) 
								  VALUES(?)";
	        	$arrData3 = array($request_insert);
	        	$request_insert3 = $this->insert($query_insert3,$arrData3);

	        	$query_insert4  = "INSERT INTO ExamenFisico(idpaciente) 
								  VALUES(?)";
	        	$arrData4 = array($request_insert);
	        	$request_insert4 = $this->insert($query_insert4,$arrData4);
			}else{
				$return = "exist"; 

			} 
	        return $return;
		}

		public function selectPacientes()
		{
			$whereAdmin = "";
			if($_SESSION['idUser'] != 1 ){
				$whereAdmin = " and p.idPaciente != 1 ";
			}
			$sql = "SELECT p.idpaciente,p.nrodocumento,p.nombres,p.apellidopaterno,p.apellidomaterno,me.empresa,mt.turno,p.status
					FROM Paciente p 
					INNER JOIN MaestraEmpresa me
					ON p.idempresa = me.idempresa
					INNER JOIN MaestraTurno mt
					on p.idturno=mt.idturno
					WHERE p.status != 0 ".$whereAdmin;
					$request = $this->select_all($sql);
					return $request;
		}
		public function selectPaciente(int $idpaciente){
			$this->intIdPaciente = $idpaciente;
			$sql = "SELECT p.idpaciente,p.nrodocumento,p.nombres,p.apellidopaterno,p.apellidomaterno,me.empresa,mt.turno,p.status
					FROM Paciente p 
					INNER JOIN MaestraEmpresa me
					ON p.idempresa = me.idempresa
					INNER JOIN MaestraTurno mt
					on p.idturno=mt.idturno
					WHERE p.idpaciente = $this->intIdPaciente";
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
		public function deletePaciente(int $intIdpaciente)
		{
			$this->intIdPaciente = $intIdpaciente;
			$sql = "UPDATE paciente SET status = ? WHERE idpaciente = $this->intIdPaciente ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		} 

	 
	}
 ?>
<?php 

	class PermisosModel extends Sqlsrv
	{
		public $intIdpermiso;
		public $intRolid;
		public $intModuloid;
		public $r;
		public $w;
		public $u;
		public $d;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectModulos()
		{
			$sql = "SELECT * FROM modulo WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}	
		public function selectPermisosRol(int $idrol)
		{
			$this->intRolid = $idrol;
			$sql = "SELECT * FROM permisos WHERE idrol = $this->intRolid";
			$request = $this->select_all($sql);
			return $request;
		}

		public function deletePermisos(int $idrol)
		{
			$this->intRolid = $idrol;
			$sql = "DELETE FROM permisos WHERE idrol = $this->intRolid";
			$request = $this->delete($sql);
			return $request;
		}

		public function insertPermisos(int $idrol, int $idmodulo, int $r, int $w, int $u, int $d){
			$this->intRolid = $idrol;
			$this->intModuloid = $idmodulo;
			$this->r = $r;
			$this->w = $w;
			$this->u = $u;
			$this->d = $d;
			$query_insert  = "INSERT INTO permisos(idrol,idmodulo,r,w,u,d) VALUES(?,?,?,?,?,?)";
        	$arrData = array($this->intRolid, $this->intModuloid, $this->r, $this->w, $this->u, $this->d);
        	$request_insert = $this->insert($query_insert,$arrData);		
	        return $request_insert;
		}

		public function permisosModulo(int $idrol){
			$this->intRolid = $idrol;
			$sql = "SELECT p.idrol,
						   p.idmodulo,
						   m.titulo as modulo,
						   p.r,
						   p.w,
						   p.u,
						   p.d 
					FROM permisos p 
					INNER JOIN modulo m
					ON p.idmodulo = m.idmodulo
					WHERE p.idrol = $this->intRolid";
			$request = $this->select_all($sql);
			$arrPermisos = array();
			for ($i=0; $i < count($request); $i++) { 
				$arrPermisos[$request[$i]['idmodulo']] = $request[$i];
			}
			return $arrPermisos;
		}

		public function getRol(int $idrol){
			$this->intRolid = $idrol;
			$sql = "SELECT * FROM rol WHERE idrol = $this->intRolid";
			$request = $this->select($sql);
			return $request;
		}
	}
 ?>
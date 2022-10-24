<?php 

	class Pacientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			//session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MPACIENTES);
		}

		public function Pacientes()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_id'] = 4;
			$data['page_tag'] = "Pacientes";
			$data['page_name'] = "Pacientes Listado";
			$data['page_title'] = "Pacientes <small> </small>";
			$data['page_functions_js'] = "functions_pacientes.js";
			$this->views->getView($this,"Pacientes",$data);
		}

		public function HojaAtencion()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_id'] = 4;
			$data['page_tag'] = "Pacientes";
			$data['page_name'] = "Pacientes Crear";
			$data['page_title'] = "Pacientes <small> </small>";
			$data['page_functions_js'] = "functions_pacientes.js";
			$this->views->getView($this,"HojaAtencion",$data);
		}

		public function setPaciente(){
			if($_POST){			
				if(empty($_POST['txtNombre']) ){
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{ 
					$idPaciente= intval($_POST['idPaciente']);					
					$strNombre = ucwords(strClean($_POST['txtNombre']));
					$strApellidoPaterno = ucwords(strClean($_POST['txtApellidoPaterno']));
					$strApellidoMaterno = ucwords(strClean($_POST['txtApellidoMaterno']));
					$strNroDocumento = strClean($_POST['txtNroDocumento']);
					$strFechaNacimiento = strClean($_POST['dtpFechaNacimiento']);
					$intNroPaseMedico = intval(strClean($_POST['txtNroPaseMedico']));
					$strFechaPruebaCovid = strClean($_POST['dtpFechaPruebaCovid']); 
					$intCboEmpresa = intval(strClean($_POST['cboEmpresa']));
					$intCboPuesto = intval(strClean($_POST['cboPuesto']));
					$intCboTurno = intval(strClean($_POST['cboTurno']));
					$intCboDiasTurno = intval(strClean($_POST['cboDiasTurno']));
					$intCboGrupoSanguineo = intval(strClean($_POST['cboGrupoSanguineo']));
					$request_user = 0;
					if($idPaciente == 0)
					{
						$option = 1;
						if($_SESSION['permisosMod']['w']){
							$request_user = $this->model->insertPaciente($strNombre, 
																				$strApellidoPaterno, 
																				$strApellidoMaterno, 
																				$strNroDocumento, 
																				$strFechaNacimiento,
																				$intNroPaseMedico, 
																				$strFechaPruebaCovid, 
																				$intCboEmpresa,
																				$intCboPuesto,
																				$intCboTurno,
																				$intCboDiasTurno,
																				$intCboGrupoSanguineo); 


						}
					}else{
						$option = 2;
						if($_SESSION['permisosMod']['u']){
							$request_user = $this->model->updatePaciente($strNombre, 
																				$strApellidoPaterno, 
																				$strApellidoMaterno, 
																				$strNroDocumento, 
																				$strFechaNacimiento,
																				$intNroPaseMedico, 
																				$strFechaPruebaCovid, 
																				$intCboEmpresa,
																				$intCboPuesto,
																				$intCboTurno,
																				$intCboDiasTurno,
																				$intCboGrupoSanguineo);
						}

					}

					 
					if($request_user > 0 and $request_user !== "exist" )
					{
						if($option == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						}
					}else if($request_user == "exist"){
						$arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la identificación ya existe, ingrese otro.');		
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE); 
			}
			die();
		}

		public function getPacientes(){
			if($_SESSION['permisosMod']['r']){
				$arrData = $this->model->selectPacientes();
				for ($i=0; $i < count($arrData); $i++) {
					$btnView = '';
					$btnEdit = '';
					$btnDelete = '';

					if($arrData[$i]['status'] == 1)
					{
						$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
					}else{
						$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
					}

					if($_SESSION['permisosMod']['r']){
						$btnView = '<button class="btn btn-info btn-sm btnViewPaciente" onClick="fntViewPaciente('.$arrData[$i]['idpaciente'].')" title="Ver paciente"><i class="far fa-eye"></i></button>';
					}
					if($_SESSION['permisosMod']['u']){
						if(($_SESSION['idUser'] == 1 and $_SESSION['userData']['idrol'] == 1) ||
							($_SESSION['userData']['idrol'] == 1 and $arrData[$i]['idrol'] != 1) ){
							$btnEdit = '<button class="btn btn-primary  btn-sm btnEditPaciente" onClick="fntEditPaciente(this,'.$arrData[$i]['idpaciente'].')" title="Editar paciente"><i class="fas fa-pencil-alt"></i></button>';
						}else{
							$btnEdit = '<button class="btn btn-secondary btn-sm" disabled ><i class="fas fa-pencil-alt"></i></button>';
						}
					}
					if($_SESSION['permisosMod']['d']){
						if(($_SESSION['idUser'] == 1 and $_SESSION['userData']['idrol'] == 1) ||
							($_SESSION['userData']['idrol'] == 1 and $arrData[$i]['idrol'] != 1) ){
							$btnDelete = '<button class="btn btn-danger btn-sm btnDelPaciente" onClick="fntDelPaciente('.$arrData[$i]['idpaciente'].')" title="Eliminar paciente"><i class="far fa-trash-alt"></i></button>';
						}else{
							$btnDelete = '<button class="btn btn-secondary btn-sm" disabled ><i class="far fa-trash-alt"></i></button>';
						}
					}
					$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
				}
				echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function getPaciente($idpaciente){
			if($_SESSION['permisosMod']['r']){
				$idusuario = intval($idusuario);
				if($idusuario > 0)
				{
					$arrData = $this->model->selectUsuario($idusuario);
					if(empty($arrData))
					{
						$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
					}else{
						$arrResponse = array('status' => true, 'data' => $arrData);
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

		public function delPaciente(){
			if($_POST){
				if($_SESSION['permisosMod']['d']){
					$intIdpaciente = intval($_POST['idpaciente']);
					$requestDelete = $this->model->deletePaciente($intIdpaciente);
					if($requestDelete)
					{
						$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el usuario');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el usuario.');
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

		public function getSelectRoles(){
			$htmlOptions = "";
			$arrData = $this->model->selectRoles();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					if($arrData[$i]['status'] == 1 ){
					$htmlOptions .= '<option value="'.$arrData[$i]['idrol'].'">'.$arrData[$i]['rol'].'</option>';
					}
				}
			}
			echo $htmlOptions;
			die();		
		}



	}
 ?>
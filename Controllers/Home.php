<?php 
	//require_once("Models/TCategoria.php");
	//require_once("Models/TProducto.php");
	class Home extends Controllers{
		//use TCategoria, TProducto;
		public function __construct()
		{
			parent::__construct(); 

			session_start();
			if(isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/dashboard');
				die();
			}
			parent::__construct();
		}

		public function home()
		{
			//$pageContent = getPageRout('inicio');
			$data['page_tag'] = NOMBRE_EMPRESA;
			$data['page_title'] = NOMBRE_EMPRESA;
			$data['page_name'] = "Petrotal";
			//$data['page'] = $pageContent;
			//$data['slider'] = $this->getCategoriasT(CAT_SLIDER);
			//$data['banner'] = $this->getCategoriasT(CAT_BANNER);
			//$data['productos'] = $this->getProductosT();
			$this->views->getView($this,"home",$data); 
		}

	}
 ?>

<?php 


   /*Mapear la url ingresada en el navedador 
	1-controlador
	2-metodo
	3-Parámetro
	Ejemplo /articulos/actualizar/4

   */

	class Core{
		protected $controladorActual = 'paginas';
		protected $metodoActual = 'index';
		protected $parametros = [];

		public function __construct(){

			//print_r($this->getUrl());

			$url = $this->getUrl();

			//buscar en controladores si el controlador existe
			if (file_exists('../app/controladores/' . ucwords($url[0]. '.php'))) {
				//si existe se setea como controlador por defecto
				$this->controladorActual = ucwords($url[0]);

				unset($url[0]) ;
			}

			//requerie el controlador
			require_once '../app/controladores/' . $this->controladorActual . '.php';
			$this->controladorActual = new $this->controladorActual;

			//chequear la segunda parte de la url que sería el método


			if (isset($url[1])){

					if(method_exists($this->controladorActual, $url[1] )){
						//chequeamos el método
						$this->metodoActual = $url[1];
					}
				
				echo $this->metodoActual;
			}
			



		}

		public function getUrl(){

		//	echo $_GET['url'];

			if (isset($_GET['url'])){

				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/',$url);
				return $url;

			}

		}
	}


<?php

	class conexion{
		protected $data;
		function __construct($conf){
			var_dump($conf);
			$this->data = new PDO($conf['driver'].':host='.$conf['dbhost'].';dbname='.$conf['dbname'],$conf['dbuser'],$conf['dbpass']);
		}
		
		public function conectar(){
			
			return $this->data;
		}

	}
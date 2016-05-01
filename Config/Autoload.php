<?php namespace Config;
	
	class Autoload{

		public static function arranque(){
			spl_autoload_register(function($class){
				$ruta = srt_replace("\\", "/", $class) . ".php";
				include_once $ruta;
			});
		} 

	}

?>
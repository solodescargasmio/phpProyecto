<?php
	define("DB_HOST", "localhost");//servidor
	define("DB_USR", "root");//usuario del server
	define("DB_PASS", "");//pass: yo no uso
	define("DB_DB", "prueba");//nombre BD
//a continuacion configuracion de smarty : es obligatoria.
	$template_config = 
    array(
        'template_dir' => 'vistas/',//donde van los .tpl
        //de aca para abajo donde guarda los archivos temporales
        'compile_dir' => 'libs/smarty/templates_c/',
        'cache_dir' => 'libs/smarty/cache/',
        'config_dir' => 'libs/smarty/configs/',
        );
?>
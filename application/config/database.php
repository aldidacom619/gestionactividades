<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$active_group = 'db_actividades';
$query_builder = TRUE;

$db['db_actividades'] = array(
	'dsn'	=> '', 
	'hostname' => 'localhost',
	'username' => 'postgres',
	'password' => '1982',
	'database' => 'actividades_db', 
	'dbdriver' => 'postgre',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

/*$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root', 
	//'username' => 'id9969591_aldidacomuser',
	'password' => '',
	//'password' => 'gonzo1982**',	
	'database' => 'db_aldidacom_ventas',
	//'database' => 'id9969591_basealdidacom',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);*/




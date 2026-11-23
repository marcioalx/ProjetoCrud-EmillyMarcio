<?php
    $servidor="localhost";
	$banco="dbteste";
	$usuario="root";
	$senha="12345678";
	$porta="3305";
	$cmd=new PDO("mysql:host=$servidor;port=$porta;dbname=$banco",$usuario,$senha);
?>

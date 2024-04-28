<?php

/**
 *	die show function ist nur zum variable zu Teste
 */

function show($stuff)
{
	echo'<pre>';
	print_r($stuff);
	echo'</pre>';
}

function esc($str)
{
	return htmlspecialchars($str);
}

/**
 * Benutzt von: LoginModel class, 
 */
function redirect($path)
{

	header('location:'.URL.$path);
	//header("Location: ".URL.$path);
	exit;
}



?>
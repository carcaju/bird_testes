<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('dd'))
{
	function dd($variavel)
	{
        var_dump($variavel);
        exit;
	}
}


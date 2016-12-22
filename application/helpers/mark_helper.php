<?php 
if(!function_exists('generate_url'))
{
	function generate_url($url_type, $pageid){
		return base_url('/'. $url_type. '/'. $pageid);
	}
}

if(!function_exists('dump'))
{
	function dump($array){
	    echo "<pre>";
	    print_r($array);
	}
}
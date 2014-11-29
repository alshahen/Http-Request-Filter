<?php 
/**
 * Http Request Filter : security REQUEST method POST,GET from xss and sql injection
 * 
 * PHP version 5.3
 * 
 * @category Security
 * @package  Http-Request-Filter
 * @author   Ahmad Hassan <me@ahalshahen.com>
 * @license  MIT License
 * @link     https://github.com/alshahen/HttpRequestFilter
 * 
 */


class HttpRequestFilter{
	
public function HttpClean(){

	if ($_SERVER['REQUEST_METHOD'] === 'POST' and count($_POST) != 0) {
	    
		foreach ($_POST as $key => $value) {

			$_POST[$key] = htmlspecialchars(addslashes($value));

		}

		}elseif ($_SERVER['REQUEST_METHOD'] === 'GET' and count($_GET) != 0) {
	    
			foreach ($_GET as $key => $value) {

			$_GET[$key] = htmlspecialchars(addslashes($value));

			}

		}


	}

}

$HttpRequestFilter = new HttpRequestFilter();
$HttpRequestFilter->httpclean();

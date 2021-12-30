<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
	case '/my-tuition' :
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: https://www.troweprice.com/usis/go-tuition-gift/maryland-529/62583a3c014b4e32b6b6c3676fe291d9");
		break;
	default:
		http_response_code(404);
		break;
}
<?php

$EV = [
	"css" => "assets/css/",
	"js" => "assets/js"
];

function css($name) {
	$link = $GLOBALS['EV']['css'] . $name . ".css";
	return "<link rel=\"stylesheet\" type=\"text/css\" href=\"$link\">";
}

function js($name) {
	$link = $GLOBALS['EV']['js'] . $name . ".js";
	return "<script type=\"text/javascript\" src=\"$link\"></script>";
}

?>



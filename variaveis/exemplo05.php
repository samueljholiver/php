<?php

$nome = "Samuel";

function teste() {
	global $nome;
	echo $nome;
}

function teste2() {
	$nome = "Jonatas";
	echo $nome."agora no teste2";
}

teste();
teste2();

?>
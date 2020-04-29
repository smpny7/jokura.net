<?php
	require_once __DIR__ . '/MinecraftPing.php';
	require_once __DIR__ . '/MinecraftPingException.php';

	use xPaw\MinecraftPing;
	use xPaw\MinecraftPingException;

	$Query = new MinecraftPing( 'jokura-vanila.work', 25565 );
	$Query = $Query->Query();

	return $Query;

?>

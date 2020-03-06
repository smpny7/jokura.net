<?php
	require __DIR__ . '/query/MinecraftPing.php';
	require __DIR__ . '/query/MinecraftPingException.php';

	use xPaw\MinecraftPing;
	use xPaw\MinecraftPingException;

	try {
        $Query = new MinecraftPing( 'jokura-vanila.work', 25565 );
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/serverRefresh.js"></script>';
	}

	catch( MinecraftPingException $e ) {
	}

	finally {
		if( $Query ) {
			$Query->Close();
		}
	}
?>

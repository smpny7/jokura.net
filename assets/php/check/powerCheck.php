<?php
	require __DIR__ . '/../query/MinecraftPing.php';
	require __DIR__ . '/../query/MinecraftPingException.php';

	use xPaw\MinecraftPing;
	use xPaw\MinecraftPingException;

	function power(){
		try {
			$Query = new MinecraftPing( 'jokura-vanila.work', 25565 );
			return 1;
		}

		catch( MinecraftPingException $e ) {
			return 0;
		}

		finally {
			if( $Query ) {
				$Query->Close();
			}
		}
	}
?>

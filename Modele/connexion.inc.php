		<?php
		include('configBD.php');
		try
		{
		$bdd = new PDO('mysql:host=172.31.21.41;dbname=hf231884;charset=utf8', 'hf231884', 'hf231884');
		//print("ok");
		}
		catch (Exception $e)
		{
			print("pas ok");
        die('Erreur : ' . $e->getMessage());
		}
		?>
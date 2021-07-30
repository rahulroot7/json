<?php

		$json = file_get_contents('https://www.deere.com/en/index.json');
		$json_data = json_decode($json,true);

?>

<table>

<?php      
			$data = $json_data['Page']['nesting_regional-homepage-pub-nest'];
			echo "<pre>";
			print_r($data);die;
		
			foreach($json_data['Page']['image-feature']['OverlayContainer']['OverlayRow'] as $val)
			{
				foreach ($val['ButtonContainer'] as $key => $value) {
					echo $val['ButtonLink'];
				}
			}
		


?>
</table>
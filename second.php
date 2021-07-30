<!DOCTYPE html>
<html>
<head>
	<title></title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
			.container1 {
			  position: relative;
			  text-align: center;
			  color: white;
			
			}
			.centered {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			}

			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			td, th {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}

			tr:nth-child(even) {
			  background-color: #dddddd;
			}
						
			
	</style>
</head>
<body>




<?php

		$json = file_get_contents('https://www.deere.com/en/loaders/backhoes/index.json');
		$json_data = json_decode($json,true);

?>

	<div class="container1">
	  <img style="width: 1260px;" src="https://www.deere.com/assets/images/common/products/backhoes/Backhoe-R4D062216-1366x347.jpg?>">
	  <div class="centered"><h2>Backhoes</h2></div>
	</div>


	<div class="container">
	  <h2>Table</h2>    
	  <p>The .table-striped class adds zebra-striping to any table row within tbody (not available in IE8):</p>                  
	  <table class="table table-striped">
	    <thead>
	     <tr>
		    <th>MODEL</th>
		    <th>NET PEAK POWER</th>
		    <th>STANDARD DIPPERSTICK DIG DEPTH</th>
		    <th>OPERATING WEIGHT</th>
		    <th>POWERSHIFT™ TRANSMISSIONR</th>
		    <th>AUTOSHIFT</th>
		    <th>LIFT MODE</th>
		  </tr>
	    </thead>
	    <tbody>
	    	<?php
	    	foreach($json_data['Page']['table']['TableInfo']['Column'] as $val)
			{
				echo "<tr>";
			   foreach ($val['Attribute'] as $key => $value) {	 ?>
			   	<td> <?php echo($value['Data']);?></td>

			   <?php	

			   }
				echo "</tr>";
			}
			?>
			     
	    </tbody>
	  </table>
	</div>
	








</body>
</html>















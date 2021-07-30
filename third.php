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

			table.center {
			  margin-left: auto; 
			  margin-right: auto;
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

				$json = file_get_contents('https://www.deere.com/en/index.json');
				$json_data = json_decode($json,true);

		?>
		
	


   <table class="center" style="margin-top: 50px">
		<?php      
			$data =  $json_data['Page']['industry-selector']['ParagraphContainer']['ParagraphContainerImage'];
			
			// print_r($data);die;
		
	    	foreach($json_data['Page']['industry-selector']['ParagraphContainer']['ParagraphContainerImage'] as $val)
			{
				?>
			   
			   <?php $img =  $val['ImageLarge'];
			   		 $url =  $val['CategoryUrl'];
			   		 $name = $val['CategoryName'];

			   ?>
			 	<td><img style="width: 160px;" src="https://www.deere.com/<?php echo $img;?>">
			 	<a href="<?php echo $url;  ?>"><h4 style="text-align:center"><?php echo $name; ?></h4></a></td>
			 	
			   <?php	   
			}

		?>
	</table><br>


	<div class="container1">
	  <img style="width: 1460px;" src="https://www.deere.com/<?php $img1 = $json_data['Page']['hero']['ParagraphContainer']['ImageLarge']; echo $img1; ?>">
	  <div class="centered"><h2>BUILT TO EMPOWER</h2></div>
	</div><br>
	<table style="margin-left: 350px">
	<?php 

			$data =  $json_data['Page']['quick-tool-ribbon']['ImageLinkContainer']['ImageLinkContainerGray'];

			foreach ( $json_data['Page']['quick-tool-ribbon']['ImageLinkContainer']['ImageLinkContainerGray'] as $val) {
				$url = $val['Link'];
				$name = $val['ImageCaption'];
				$img2 = $val['ImageLarge'];
				// print_r($img2);
				?>
				<td style="background-color: black"><a href="<?php echo $url; ?>"><img style="width: 60px;" src="https://www.deere.com/<?php echo $img2; ?>"><?php echo $name ?></a><td>

				
			<?php
			}
	?>
	</table><br><br>

	<div style="margin-left:80px ">
		<table>
			<tr>
			<?php
				$data =  $json_data['Page']['image-feature']['OverlayContainer']['OverlayRow'];
				// echo "<pre>";
				// print_r($data);die;
			
				foreach($json_data['Page']['image-feature']['OverlayContainer']['OverlayRow'] as $val)
				{
					$desc = $val['Description'];
					$title = $val['Title'];
					$url4 = $val['ButtonContainer']['ButtonLink'];
					$img4 = $val['ImageContainer']['ImagePath'];
					 ?>
				  	<td><h3 style="margin-left: 350px"><?php echo $title;?><br></h3></td>
				  	<td><h3 style="margin-left: 70px"><?php echo $desc;?><br></h3></td>

				   <?php	

				   
					echo "</tr>";
				}
				?>
				
				<td><h3 style="margin-left: 350px"><a href="<?php echo $url4; ?>"><img style="width: 620px;" src="https://www.deere.com/<?php echo $img4; ?>"></a></h3></td>
				<td><h3 style="margin-left: 25px"><a href="<?php echo $url4; ?>"><img style="width: 620px;" src="https://www.deere.com/<?php echo $img4; ?>"></a></h3></td>
				<?php
			?>
		</tr>
		<tr>
			<?php
				$data =  $json_data['Page']['image-feature']['OverlayContainer']['OverlayRow'];
				// echo "<pre>";
				// print_r($data);die;
			
				foreach($json_data['Page']['image-feature']['OverlayContainer']['OverlayRow'] as $val)
				{
					$desc = $val['Description'];
					$title = $val['Title'];
					$url4 = $val['ButtonContainer']['ButtonLink'];
					$img4 = $val['ImageContainer']['ImagePath'];
					 ?>
				  	<td><h3 style="margin-left: 350px"><?php echo $title;?><br></h3></td>
				  	<td><h3 style="margin-left: 70px"><?php echo $desc;?><br></h3></td>

				   <?php	

				   
					echo "</tr>";
				}
				?>
				
				<td><h3 style="margin-left: 350px"><a href="<?php echo $url4; ?>"><img style="width: 620px;" src="https://www.deere.com/assets/images/common/home-page/deere-season-march-632x384.jpg; ?>"></a></h3></td>
				<td><h3 style="margin-left: 25px"><a href="<?php echo $url4; ?>"><img style="width: 620px;" src="https://www.deere.com/assets/images/common/home-page/store-parts-march-632x384.jpg; ?>"></a></h3></td>
				<?php
			?>
		</tr>
		</table>

</div><br>



	<div style=" margin-left:475px ;">
          <table id="customers">
             
        
					<?php 
						$data =  $json_data['Page']['nesting_regional-homepage-pub-nest']['Title'];
						?>
						<h2 style="margin-left:380px; "><?php echo $data; ?></h2><br>
					<tr>	
						<td><img style="width: 320px;" src="https://www.deere.com/<?php $data =  $json_data['Page']['nesting_regional-homepage-pub-nest']['content-panel2']['ParagraphContainer']['ImageLarge']; echo $data; ?>">  
						<img style="width: 320px;" src="https://www.deere.com/<?php $data =  $json_data['Page']['nesting_regional-homepage-pub-nest']['content-panel']['ParagraphContainer']['ImageLarge']; echo $data; ?>">
					    <img style="width: 320px;" src="https://www.deere.com/<?php $data =  $json_data['Page']['nesting_regional-homepage-pub-nest']['content-panel1']['ParagraphContainer']['ImageLarge']; echo $data; ?>"></td>
					</tr> 
					    <td><h3><?php $data2 =  $json_data['Page']['nesting_regional-homepage-pub-nest']['content-panel2']['ParagraphContainer']['ContentPanelHeadline']; echo $data2; ?><?php $data2 =  $json_data['Page']['nesting_regional-homepage-pub-nest']['content-panel']['ParagraphContainer']['ContentPanelHeadline']; echo $data2; ?></h3>
					    	
					    </td>          

                
      </table>

      <div class="col-4">
	  <div class="row"><img style="width: 320px;" src="https://www.deere.com/<?php $data =  $json_data['Page']['nesting_regional-homepage-pub-nest']['content-panel2']['ParagraphContainer']['ImageLarge']; echo $data; ?>"> </div>
	  <div class="row"><img style="width: 320px;" src="https://www.deere.com/<?php $data =  $json_data['Page']['nesting_regional-homepage-pub-nest']['content-panel']['ParagraphContainer']['ImageLarge']; echo $data; ?>"></div>
	  <div class="col"> <img style="width: 320px;" src="https://www.deere.com/<?php $data =  $json_data['Page']['nesting_regional-homepage-pub-nest']['content-panel1']['ParagraphContainer']['ImageLarge']; echo $data; ?>"></div>
	</div>


		


</body>
</html>
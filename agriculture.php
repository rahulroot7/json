<!DOCTYPE html>
<html>
<head>
	<title>json</title>
	<link rel="stylesheet" href="style.css">
	<style>
			.container {
			  position: relative;
			  text-align: center;
			  color: white;
			
			}
			
			.center{
				  position:absolute;
				  top: 40%;
				  left: 17%;
				  
			}
			.center1{
				  position:absolute;
				  top: 40%;
				  left: 35%;
				  
			}
			.center2{
				  position:absolute;
				  top: 40%;
				  left: 52%;
				  
			}
			.center3{
				  position:absolute;
				  top: 40%;
				  left:69%;
				  
			}
			.center4{
				  position:absolute;
				  top : 840px;
				  left:40%;
				  
			}
			.center5{
				  position:absolute;
				  top : 930px;
				  left:16%;
				  
			}
			.center6{
				  position:absolute;
				  top : 930px;
				  left:50%;
				  
			}
			.center7{
				  position:absolute;
				  top : 1380px;
				  left:16%;
				  
			}
			.center8{
				  position:absolute;
				  top : 1480px;
				  left:15%;
				  
			}
			.center9{
				  position:absolute;
				  top : 1480px;
				  left:65%;
				  
			}
			.center10{
				  position:absolute;
				  top : 2080px;
				  left:16%;
				  
			}
			.center11{
				  position:absolute;
				  top : 2780px;
				  left:16%;
				  right:14px;
				  
			}
			.center14{
				  position:absolute;
				  top : 3800px;
				  left:2%;
				  right:14px;
				  
			}
			.container1 {
			  position: relative;
			  text-align: center;
			  color: white;
			  top : 3000px;
			
			}
			.centered {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			}
			
			

			</style>
</head>
<body>

<?php

		$json = file_get_contents('https://www.deere.com/en/agriculture/index.json');
		$json_data = json_decode($json,true);

?>
	<div class="container">
	  <img style="width: 1260px;" src="https://www.deere.com/<?php $slider = ($json_data['Page']['hero']['ParagraphContainer']['ImageLarge']); echo $slider; ?>">
	  <div class="centered"><h2><?php $title = ($json_data['Page']['hero']['Title']); echo $title; ?></h2></div>
	</div>

	<div class="center"><h2><?php $heding = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['0']['CategoryName']); echo $heding; ?></h2>
		
		<a href="<?php $url = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['0']['SubCategoryContainer']['0']['SubCategoryURL']); echo $url ?>">Cutters and Shredders</a><br><br>

		<a href="<?php $url1 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['1']['SubCategoryContainer']['1']['SubCategoryURL']); echo $url1 ?>">Harvesting Equipment</a><br><br>

		<a href="<?php $url2 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['SubCategoryContainer']['2']['SubCategoryURL']); echo $url2 ?>">Hay and Forage Equipment</a><br><br>

		<a href="<?php $url3 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['3']['SubCategoryContainer']['3']['SubCategoryURL']); echo $url3 ?>">Performance Upgrade Kits</a><br><br>

		<a href="<?php $url4 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['4']['SubCategoryContainer']['4']['SubCategoryURL']); echo $url4 ?>">Planting Equipment</a><br><br>

		<a href="<?php $url5 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['5']['SubCategoryContainer']['5']['SubCategoryURL']); echo $url5 ?>">Precision Ag Technology</a><br><br>

		<a href="<?php $url6 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['6']['SubCategoryContainer']['6']['SubCategoryURL']); echo $url6 ?>">Seeding Equipmenty</a><br><br>

		<a href="<?php $url7 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['7']['SubCategoryContainer']['7']['SubCategoryURL']); echo $url7 ?>">Sprayers & Applicators</a><br><br>

		<a href="<?php $url8 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['8']['SubCategoryContainer']['8']['SubCategoryURL']); echo $url8 ?>">Tillage Equipment</a><br>

	</div>

	<div class="center1"><h2><?php $heding1 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['1']['CategoryName']); echo $heding1; ?></h2>
		
		<a href="<?php $url9 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['1']['SubCategoryContainer']['1']['SubCategoryURL']); echo $url9 ?>">Loaders</a><br><br>

		<a href="<?php $url10 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['SubCategoryContainer']['2']['SubCategoryURL']); echo $url10 ?>">Home and Workshop Products</a><br><br>

		<a href="<?php $url11 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['3']['SubCategoryContainer']['3']['SubCategoryURL']); echo $url11 ?>">Used Equipment</a><br><br>

	</div>

	<div class="center2"><h2><?php $heding3 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['CategoryName']); echo $heding3; ?></h2>
		
		<a href="<?php $url9 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['0']['SubCategoryContainer']['0']['SubCategoryURL']); echo $url9 ?>">Front End Loaders</a><br><br>

		<a href="<?php $url10 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['SubCategoryContainer']['1']['SubCategoryURL']); echo $url10 ?>">4WD/Track Tractors (390 – 640 Engine HP)</a><br><br>

		<a href="<?php $url11 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['SubCategoryContainer']['2']['SubCategoryURL']); echo $url11 ?>">Compact Tractors (22.4 - 66 Engine HP)<br>Scraper Systems</a><br><br>

		<a href="<?php $url12 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['SubCategoryContainer']['4']['SubCategoryURL']); echo $url12 ?>">Row Crop Tractors (140 – 410 Engine HP)</a><br><br>

		<a href="<?php $url13 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['SubCategoryContainer']['5']['SubCategoryURL']); echo $url13 ?>">Specialty Tractors (75 – 155 Engine HP)</a><br><br>

		<a href="<?php $url12 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['SubCategoryContainer']['6']['SubCategoryURL']); echo $url12 ?>">Utility Tractor Attachments</a><br><br>

		<a href="<?php $url13 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['2']['SubCategoryContainer']['7']['SubCategoryURL']); echo $url13 ?>">Utility Tractors (45 - 250 Engine HP)</a><br><br>

	</div>

	<div class="center3"><h2><?php $heding1 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['3']['CategoryName']); echo $heding1; ?></h2>
		
		<a href="<?php $url9 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['3']['SubCategoryContainer']['0']['SubCategoryURL']); echo $url9 ?>">Gator™ UV Attachments</a><br><br>

		<a href="<?php $url10 = ($json_data['Page']['industry-sub-navigation']['CategoryContainer']['3']['SubCategoryContainer']['1']['SubCategoryURL']); echo $url10 ?>">Gator™ Utility Vehicles</a><br><br>

		
	</div>


	<div class="center4">
		<h2><?php $third = ($json_data['Page']['nesting_Launch321']['Description']); echo $third ?></h2>
		 
	</div>
	<div class="center5">
		
		 <img style="width: 560px;" src="https://www.deere.com/<?php $slider1 = ($json_data['Page']['nesting_Launch321']['block-content9']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $slider1; ?>">
		 <h2><?php $third = ($json_data['Page']['nesting_Launch321']['block-content9']['ParagraphContainer']['BlockImageContainer']['BlockImageTitle']); 
             echo $third ?></h2>
         <p><?php $desc = ($json_data['Page']['nesting_Launch321']['block-content9']['ParagraphContainer']['BlockDescription']); echo $desc ?></p>

	</div>

	<div class="center6">
		
		 <img style="width: 560px;" src="https://www.deere.com/<?php $slider1 = ($json_data['Page']['nesting_Launch321']['block-content9']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $slider1; ?>">
		 <h2><?php $third = ($json_data['Page']['nesting_Launch321']['block-content8']['ParagraphContainer']['BlockTitle']); echo $third ?></h2>
         <p><?php $desc = ($json_data['Page']['nesting_Launch321']['block-content8']['ParagraphContainer']['BlockDescription']); echo $desc ?></p>

	</div>

	<div class="center7">
		<h2>Discover New Products</h2>
		 
	</div>

	<div class="center8">
		<img style="width: 860px;" src="https://www.deere.com/<?php $slider1 = ($json_data['Page']['block-content7']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $slider1; ?>">
		
	</div>

	<div class="center9">
		<h2><?php $third = ($json_data['Page']['block-content7']['ParagraphContainer']['BlockTitle']); echo $third ?></h2>
		
		 <p><b><?php $desc = ($json_data['Page']['block-content7']['ParagraphContainer']['BlockDescription']); echo $desc ?></b></p>
		 <a href="<?php $url9 = ($json_data['Page']['block-content7']['ParagraphContainer']['CTAContainer']['Link']); echo $url9 ?>">Enter Here</a><br><br>
	</div>

	<div class="center10">
		<h2><?php $third = ($json_data['Page']['title1']['ParagraphContainer']['Title']); echo $third ?></h2>
		
		
        <table align="center" style="padding: 35px">
          <td>
            <img style=" width:650px "src="https://www.deere.com/<?php $img12 = ($json_data['Page']['nesting_performance-technology']['block-content2']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $img12; ?>" alt="sec">
            <h2><?php $third = ($json_data['Page']['nesting_performance-technology']['block-content2']['ParagraphContainer']['BlockTitle']); echo $third ?></h2>
           <p><b><?php $desc = ($json_data['Page']['nesting_performance-technology']['block-content2']['ParagraphContainer']['BlockDescription']); echo $desc ?></b></p>
            <a href="<?php $url9 = ($json_data['Page']['block-content7']['ParagraphContainer']['CTAContainer']['Link']); echo $url9 ?>">Explore More</a><br><br>
            
           
          </td>   
          <td>
           <img style=" width:650px "src="https://www.deere.com/<?php $img12 = ($json_data['Page']['nesting_performance-technology']['block-content3']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $img12; ?>" alt="sec">
            <h2><?php $third = ($json_data['Page']['nesting_performance-technology']['block-content3']['ParagraphContainer']['BlockTitle']); echo $third ?></h2>
           <p><b><?php $desc = ($json_data['Page']['nesting_performance-technology']['block-content3']['ParagraphContainer']['BlockDescription']); echo $desc ?></b></p>
            <a href="<?php $url9 = ($json_data['Page']['block-content7']['ParagraphContainer']['CTAContainer']['Link']); echo $url9 ?>">Explore More</a><br><br>
              

            </div>
          </td> 
              
        </table> 
	</div>


	<div class="center11">
		<h2><?php $third = ($json_data['Page']['title1']['ParagraphContainer']['Title']); echo $third ?></h2>
		
		
        <table align="center" style="padding: 35px">
          <td>
            <img style=" width:450px "src="https://www.deere.com/<?php $img12 = ($json_data['Page']['nesting_drivegreen-select']['block-content1']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $img12; ?>" alt="sec">
            <h2><?php $third = ($json_data['Page']['nesting_drivegreen-select']['block-content1']['ParagraphContainer']['BlockTitle']); echo $third ?></h2>	
           <p><b><?php $desc = ($json_data['Page']['nesting_drivegreen-select']['block-content1']['ParagraphContainer']['BlockDescription']); echo $desc ?></b></p>
            <a href="<?php $url9 = ($json_data['Page']['nesting_drivegreen-select']['block-content1']['ParagraphContainer']['CTAContainer']['Link']); echo $url9 ?>">View current offers</a><br><br>
            
           
          </td>   
          <td>
           <img style=" width:450px "src="https://www.deere.com/<?php $img12 = ($json_data['Page']['nesting_drivegreen-select']['block-content4']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $img12; ?>" alt="sec">
            <h2><?php $third = ($json_data['Page']['nesting_drivegreen-select']['block-content4']['ParagraphContainer']['BlockTitle']); echo $third ?></h2>
           <p><b><?php $desc = ($json_data['Page']['nesting_drivegreen-select']['block-content4']['ParagraphContainer']['BlockDescription']); echo $desc ?></b></p>
            <a href="<?php $url9 = ($json_data['Page']['nesting_drivegreen-select']['block-content1']['ParagraphContainer']['CTAContainer']['Link']); echo $url9 ?>">View current offer</a><br><br>
              

        
          </td> 
             <td>
           <img style=" width:450px "src="https://www.deere.com/<?php $img12 = ($json_data['Page']['nesting_drivegreen-select']['block-content5']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $img12; ?>" alt="sec">
            <h2><?php $third = ($json_data['Page']['nesting_drivegreen-select']['block-content5']['ParagraphContainer']['BlockTitle']); echo $third ?></h2>
           <p><b><?php $desc = ($json_data['Page']['nesting_drivegreen-select']['block-content5']['ParagraphContainer']['BlockDescription']); echo $desc ?></b></p>
            <a href="<?php $url9 = ($json_data['Page']['nesting_drivegreen-select']['block-content5']['ParagraphContainer']['CTAContainer']['Link']); echo $url9 ?>">Explore More</a><br><br>
              

          </td> 
              
        </table> 
	</div>

	<div class="container1">
	  <img style="width: 129	0px;" src="https://www.deere.com/<?php $slider = ($json_data['Page']['mediafeature']['Large']); echo $slider; ?>">
	  <div class="centered"><h2><?php $title = ($json_data['Page']['mediafeature']['Title']); echo $title; ?></h2></div><br>
	  <div class="centered"><h3> <a href="<?php $url9 = ($json_data['Page']['mediafeature']['ButtonURL']); echo $url9 ?>">View Ag News</a></h3></div>
	</div>


	<div class="center14">
		
        <table align="center" style="padding: 35px">
          <td>
           
            <h2 style=""><?php $third = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['Description']); echo $third ?></h2>
            <strong>Shop and Buy</strong><br>
            <a href="<?php $url9 = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['link-list-simple']['link']['0']['url']); echo $url9 ?>">Build Your Own</a><br><br>
             <a href="<?php $url9 = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['link-list-simple']['link']['1']['url']); echo $url9 ?>">Find a Dealer</a><br><br>
              <a href="<?php $url9 = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['link-list-simple']['link']['2']['url']); echo $url9 ?>">Build Your Own</a><br><br>
               <a href="<?php $url9 = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['link-list-simple']['link']['3']['url']); echo $url9 ?>">John Deere Financial</a><br><br>
                
          </td>   
          <td>
            
            <strong>Shop and Buy</strong><br>
          
             <a href="<?php $url9 = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['link-list-simple1']['link']['url']); echo $url9 ?>">Product Safety</a><br><br>
             
            
          </td> 
          <td>
          
           <li><strong>Shop and Buy</strong></li>
            <a href="<?php $url9 = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['link-list-simple2']['link']['0']['url']); echo $url9 ?>">Build Your Own</a><br><br>
             <a href="<?php $url9 = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['link-list-simple2']['link']['1']['url']); echo $url9 ?>">Find a Dealer</a><br><br>
              <a href="<?php $url9 = ($json_data['Page']['nesting_at-industry-default-link-list-3-cols']['link-list-simple2']['link']['2']['url']); echo $url9 ?>">Build Your Own</a><br><br>
               
          </td>        
        </table> 
	</div>



</body>
</html>


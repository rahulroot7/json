  <!DOCTYPE html>
<html>
<head>
  <title>JSON</title>
     <link rel="stylesheet" href="style.css">
     <style>
       #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
      }
     </style>
</head>
<body>

</body>
</html>

<?php


	// Read JSON file
	$json = file_get_contents('https://www.deere.com/en/harvesting/index.json');

	//Decode JSON
	$json_data = json_decode($json,true);

?>
		 
   <div   style=" margin:25px ;"><img style="padding-left:250px "; src="https://www.deere.com/<?php $img = ($json_data['Page']['hero']['ParagraphContainer']['ImageSmall']); echo $img ?>" alt="first"></div>
   <div style=" margin:75px; padding-left:250px" class="underherocopy";> <h3><?php $desc = ($json_data['Page']['open-html']['Code']);echo $desc;  ?> </h3> </div>
      

   <div class="myDiv" style="margin:200px";>   
     
        <table align="center" style="padding: 35px">
          <td>
            <img style=" width:250px "src="https://www.deere.com//assets/images/region-4/products/combines/s790-combine/s_790_combine_r4d088296_large_48c383c836120b08043ae2ceb51f08eb44940930.jpg" alt="sec">
            <h4 style="padding-left:45px"><a href="https://www.deere.com/en/harvesting/s-series-combines/">S Series Combines</a></h4>
            <li style="padding-left:40px"><strong>Class 6, 7, 8 and 9</strong></li>
            <p><strong>300 and 400 bushels</strong><br>Commonly used for:<br>High moisture corn, tough-threshing small grains.</p>
            <div>
                <p>Available Model:<p>
                
                    <li><a href="https://www.deere.com/en/harvesting/s-series-combines/s760-combine/" tabindex="0" data-linkid="cta : slide-model : s series combines : s760" data-linktype="internal-defer">S760</a>,
                    <a href="https://www.deere.com/en/harvesting/s-series-combines/s760-combine/" tabindex="0" data-linkid="cta : slide-model : s series combines : s760" data-linktype="internal-defer">S760</a>
                    <a href="https://www.deere.com/en/harvesting/s-series-combines/s780-combine/" tabindex="0" data-linkid="cta : slide-model : s series combines : s780" data-linktype="internal-defer">S780</a>
                    <a href="https://www.deere.com/en/harvesting/s-series-combines/s790-combine/" tabindex="0" data-linkid="cta : slide-model : s series combines : s790" data-linktype="internal-defer">S790</a></li>
                 
            </div>
          </td>   
          <td>
            <img style=" width:250px ;"src="https://www.deere.com///assets/images/region-4/products/harvesting/x-series/x91000-r4x000619_rrd.jpg" alt="third">
            <h4 style="padding-left:45px"><a href="https://www.deere.com/en/harvesting/x-series-combines/">X Series Combines</a></h4>
            <li style="padding-left:40px"><strong>Class 10 and 11</strong></li> 
            <p><strong>420 and 460 bushels</strong><br>Commonly used for:<br>High moisture corn, tough-threshing small grains.</p>
            <div>
              <p>Available Model:</p>
                <a href="https://www.deere.com/en/harvesting/x-series-combines/x91000-combine/" tabindex="0" data-linkid="cta : slide-model : x series combines : x9 1000" data-linktype="internal-defer">X9 1000</a>,
                <a href="https://www.deere.com/en/harvesting/x-series-combines/x91100-combine/" tabindex="0" data-linkid="cta : slide-model : x series combines : x9 1100" data-linktype="internal-defer">X9 1100</a>

            </div>
          </td> 
          <td>
           <img style=" width:250px ;"src="https://www.deere.com//assets/images/region-4/products/combines/t670/t670_r2c001198_tech_rrd_ml_2_large_6c51fa68662b21435dd2137ac5878bf7a677911d.jpg" alt="four">
            <h4 style="padding-left:45px"><a href="https://www.deere.com/en/harvesting/t670-combine/">T Series Combine</a></h4>
            <li style="padding-left:40px"><strong>Class 7 </strong></li>
            <p><strong>300 bushels</strong><br>Commonly used for:<br>High moisture corn, tough-threshing small grains.</p>
            <div>
              <p>Available Model:</p>
                <a href="https://www.deere.com/en/harvesting/t670-combine/" tabindex="0" data-linkid="cta : slide-model : t series combine : t670" data-linktype="internal-defer">T670</a>
            </div>
          </td>        
        </table>         
      </div>
     
   </div>


   <div style=" margin:175px ;">
          <table id="customers">
              <h1>Headers & Platforms</h1>
                <tr>
                  <td><img style=" width:250px ;" class="image" src="https://www.deere.com/assets/images/region-4/products/harvesting/x9/drapers-r4f086435-rrd-01.jpg" 
                      alt="Draper Platform moving through field"><br>
                      <h2><?php $title1 = ($json_data['Page']['nesting_headers-block']['block-content1']['ParagraphContainer']['BlockTitle']); echo $title1; ?> </h2>
                      <p><?php $desc1 = ($json_data['Page']['nesting_headers-block']['block-content1']['ParagraphContainer']['BlockDescription']); echo $desc1; ?></p>
                      <a href="<?php $link = ($json_data['Page']['nesting_headers-block']['block-content1']['ParagraphContainer']['CTAContainer']['Link']); echo $link ?>">View Drapers</a>
                      </td>
                    <td><img style=" width:250px ;" class="image" src="https://www.deere.com/assets/images/region-4/products/harvesting/x9/drapers-r4f086435-rrd-01.jpg" 
                      alt="Draper Platform moving through field"><br>
                      <h2>Corn Heads</h2>
                      <p><?php $desc3 = ($json_data['Page']['nesting_headers-block']['block-content']['ParagraphContainer']['BlockDescription']);
                          echo $desc3; ?></p>
                       <a href="<?php $link1 = ($json_data['Page']['nesting_headers-block']['block-content']['ParagraphContainer']['CTAContainer']['Link']); echo $link1 ?>">View Corn Heads</a>
                      </td>
                      <td><img style=" width:250px ;" class="image" src="https://www.deere.com/<?php $img2 = ($json_data['Page']['nesting_headers-block']['block-content']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $img2; ?>" alt="Draper Platform moving through field"><br>
                      
                      <h2><?php $heding3 = ($json_data['Page']['nesting_headers-block']['block-content6']['ParagraphContainer']['BlockTitle']); echo $heding3; ?> </h2>
                      <p><?php $desc2 = ($json_data['Page']['nesting_headers-block']['block-content6']['ParagraphContainer']['BlockDescription']); echo $desc2 ?></p>
                      <a href="<?php $link4 = ($json_data['Page']['nesting_headers-block']['block-content6']['ParagraphContainer']['CTAContainer']['Link']); echo $link4; ?>">View Auger Platforms</a>
                      </td>
                      <td><img style=" width:250px ;" class="image" src="https://www.deere.com/<?php $img4 = ($json_data['Page']['nesting_headers-block']['block-content5']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $img4; ?>" 
                      alt="Draper Platform moving through field"><br>
                      <h2>Belt Pickup</h2>
                      <p><?php $desc5 = ($json_data['Page']['nesting_headers-block']['block-content5']['ParagraphContainer']['BlockDescription']); echo $desc5; ?></p>
                      <a href="<?php $link5 = ($json_data['Page']['nesting_headers-block']['block-content5']['ParagraphContainer']['CTAContainer']['Link']); echo $link5; ?> ">View Belt Pickup</a>
                      </td>
                </tr>
                <tr>
                  

                
      </table>

      <div class="table" style="background-color:#F8F8F8">
      <table>
        <td><h2><?php $hed1 = ($json_data['Page']['title']['ParagraphContainer']['Title']); echo $hed1; ?></h2>
                      <img style=" width:250px ;" class="image" src="https://www.deere.com/<?php $img6 = ($json_data['Page']['nesting_cotton-harvesting']['block-content2']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']);; echo $img6; ?>" 
                         alt="Draper Platform moving through field"><br>
                      <h3><?php $title = ($json_data['Page']['nesting_cotton-harvesting']['block-content2']['ParagraphContainer']['BlockTitle']);
                       echo $title;  ?></h3>
                       <p><?php $desc6 = ($json_data['Page']['nesting_cotton-harvesting']['block-content2']['ParagraphContainer']['BlockDescription']); echo $desc6; ?></p>
                       <a href="<?php $link6 = ($json_data['Page']['nesting_cotton-harvesting']['block-content2']['ParagraphContainer']['CTAContainer']['Link']);
                        echo $link6 ?>">View the CP690 Cotton Picker</a>
                     </td>
                  <td><h2><?php $hed7 = ($json_data['Page']['nesting_cotton-harvesting']['block-content3']['ParagraphContainer']['BlockTitle']); echo $hed7; ?></h2>
                      <img style=" width:250px ;" class="image" src="https://www.deere.com/<?php $img7 = ($json_data['Page']['nesting_cotton-harvesting']['block-content3']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']); echo $img7; ?>" 
                         alt="Draper Platform moving through field"><br>
                      <h3><?php $title = ($json_data['Page']['nesting_cotton-harvesting']['block-content3']['ParagraphContainer']['BlockTitle']);
                       echo $title;  ?></h3>
                       <p><?php $desc7 = ($json_data['Page']['nesting_cotton-harvesting']['block-content3']['ParagraphContainer']['BlockDescription']); echo $desc7; ?></p>
                       <a href="<?php $link7 = ($json_data['Page']['nesting_cotton-harvesting']['block-content3']['ParagraphContainer']['CTAContainer']['Link']);
                        echo $link7 ?>">View the CS690 Cotton Stripper</a>
                     </td>
                  <td><h2><?php $hed1 = ($json_data['Page']['title']['ParagraphContainer']['Title']); echo $hed1; ?></h2>
                      <img style=" width:250px ;" class="image" src="https://www.deere.com/<?php $img6 = ($json_data['Page']['nesting_cotton-harvesting']['block-content7']['ParagraphContainer']['BlockImageContainer']['BlockImageLarge']);; echo $img6; ?>" 
                         alt="Draper Platform moving through field"><br>
                      <h3><?php $title = ($json_data['Page']['nesting_cotton-harvesting']['block-content7']['ParagraphContainer']['BlockTitle']);
                       echo $title;  ?></h3>
                       <p><?php $desc6 = ($json_data['Page']['nesting_cotton-harvesting']['block-content7']['ParagraphContainer']['BlockDescription']); echo $desc6; ?></p>
                       <a href="<?php $link6 = ($json_data['Page']['nesting_cotton-harvesting']['block-content7']['ParagraphContainer']['CTAContainer']['Link']);
                        echo $link6 ?>">Learn more about the CM11</a>
                     </td>
                </tr>
        
      </table>
    </div>
   </div>

    




















    <?php  echo "<pre>";
    print_r($json_data['Page']['nesting_cotton-harvesting']);

    ?>


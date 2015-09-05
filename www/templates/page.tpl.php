<html>
  <head>
    <title>Anteleon</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" >
  </head>

  <body>
    <?php 
    $i=0;
    foreach($menu as $n=>$m ):
    $i++
    ?>
    <div class="menu menu<?php echo $i;?>">
		<!-- html option 
		<span class="shiny"><?php echo $n;?></span>
		<div id="shiner-<?php echo $i ;?>" class="shiner">&nbsp;</div>
		<!-- -->
      <?php 
      	//randomise reflect 
      	$shineDuration	= 0.7;
      	$shineColor		= '#f0f0f0';
      	$bgColor		= '#000000';
      	$duration		= rand(10,30);
      	$trigger		= ($duration-$shineDuration)/$duration;
      ?>
      <svg width="200" height="40">
		<defs>
			<linearGradient id="grad<?php echo $i ;?>" x1="0%" y1="0%" x2="200%" y2="20%">
			  <stop offset="0%" style="stop-color:<?php echo $bgColor;?>;stop-opacity:1" />
			  <stop offset="50%" style="stop-color:<?php echo $shineColor;?>;stop-opacity:1" />
			  <stop offset="100%" style="stop-color:<?php echo $bgColor;?>;stop-opacity:1" />
			  
			  <animate attributeType="XML"
				 attributeName="x1"
				 from="-100%" 
				 to="200%"
				 dur="<?php echo $duration?>s"
				 repeatCount="indefinite"
				 values        = "-200%;-200%;200%"    
				 keyTimes      = "0;<?php echo $trigger?>;1"
				 />
			  <animate attributeType="XML"
				 attributeName="x2"
				 from="200%" 
				 to="300%"
				 dur="<?php echo $duration?>s"
				 repeatCount="indefinite"
				 values        = "-100%;-100%;300%"    
				 keyTimes      = "0;<?php echo $trigger?>;1"
				 
				 />
			</linearGradient>
		</defs>
		<text x="20"  y="40"
				style="font-family: Arial;
				 font-size  : 20;
				 font-weight: bold;
				"
				fill="url(#grad<?php echo $i ;?>)"
		  >
		  <?php echo $n;?>
		</text>
	  </svg>
	  
      
      <ul class="list">
        <?php foreach($m as $i=>$element ):?>
        <li class="element element-<?php echo $i;?>" data-menuid="<?php echo $i;?>">
          <div class="menulabel  -floating "><?php echo $element['label'];?> </div>
          <div class="content"><?php echo $element['content'];?> </div>
        </li>
        <?php endforeach;?>
      </ul>
    </div>
    <?php endforeach;?>
    <div style="position: fixed; bottom:0;height:80%;width:100%;left:0; background:none;opacity:0">Hide to prevent rollover</div>
  </body>
</html>
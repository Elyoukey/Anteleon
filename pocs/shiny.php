<?php
$menu = array();
$menu['Products'] = array();
$menu['Products'][] = array(
  'label' => 'scryptoTRACE',
  'content' => 'scryptoTRACE <h2>Product Description</h2>
This product hides codes in any text or graphics. It is best described as an "Invisible barcode that can be read by a smartphone".
When those codes are read by the phone, a pre-defined message is displayed or (if Internet is available) a pre-defined web page can be displayed.

The phone does not rely on a permanent Internet connection to operate, but needs to be configured with the correct software and data. This can either be done sporadically and securely through the Internet, or when initially supplied.

Results can be securely fed back to a central database where they can be displayed using mapping software or spreadsheets and made available to your brand protection or marketing departments.

'
);
$menu['Products'][] = array(
  'label' => 'nanoTRACE',
  'content' => 'nanoTRACE <h2>Product Description</h2>
This product does for images what scryptoTRACE does for text. It is a package which can invisibly "watermark" any image to hide codes in it. The watermark can only be decoded by using the smartphone app.
This invisible watermark is robust enough to survive most image cropping, resizing or rotation. It can be a valuable tool in your armoury against counterfeiters and allow you to stay one step ahead.

When the watermark is read by the phone, it will display a message or re-direct to a pre-defined web page.

The phone does not rely on a permanent Internet connection to operate, but needs to be configured with the correct software and data, which can either be done sporadically and securely through the Internet, or when initially supplied.

Results can also be securely fed back to a central database where they can be displayed using mapping software, spreadsheets etc. available for your brand protection or marketing departments.'
);

$menu['About us'] = array();
$menu['About us'][] = array(
  'label' => 'Anteleon Imaging',
  'content' => 'We have been developing mobile solutions in the field of digital imaging since 2003 for applications in brand protection, copyright protection, high security and track and trace. Anteleon is part of the U-Nica group of companies.'
  
  
); 


?><html>
  <head>
    <title>Anteleon</title>
    <style>
    html {
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }

    body
    {
        cursor: pointer;
        text-align: center;
        background: #1C5285;
        background: white;
        font-family: arial;
    }
    ul,
    ul li
    {
        list-style: none;
    }
    
      .menu{
       
        width: 200px;
        height: 10px;
        position: fixed;
        top:0;
        left: 30%;
        
      }
      .menu1{left:20%;}
      .menu2{left:50%;}
      .menu3{left:60%;}
      .menu4{left:80%;}
      
      .list{
        
      }
      .element{
        
      }
      .content{
        position: fixed;
        bottom:0;
        left:0;
        padding: 20px;
        width: 100%;
        height: 80%;
      }
      

      .menu .list .element .content
      {
            
            opacity: 0;            
            transition-duration: 1s;  
      }
      
      /**/
      .menu .list .element .menulabel
      {
            transition-duration: 1s;
            color: transparent;
            text-shadow: 0 0 3px rgba(0,0,0,0.9);
            margin:10px;
            padding: 3px;
            
      }
      .menu:hover .list .element .menulabel
      {
            color: black;
            text-shadow: none;
            transition-duration: 1s;
      }
      
      
      .menu .list .element:hover .content
      {
        display: block;
        opacity: 1;
        transition-duration: 1s;
      }
      
      
      .shiny
      {
      	  color: #1C5285;
      	  font-weight: bold;
      	  font-size: 20px;
      	  -text-shadow: 1px 0 0 #15436D, -1px 0 0 #15436D, 0 1px 0 #15436D, 0 -1px 0 #15436D, 1px 1px #15436D, -1px -1px 0 #15436D, 1px -1px 0 #15436D, -1px 1px 0 #15436D;
      }
      .shiner
      {
		margin: 0;
		margin-top: -20px;
		padding: 0px;

opacity: 0.9;

      	  display: block;
      	  top: 0;
      	  left:0;
      	  width: 55px;
      	  height:20px;
  background: -webkit-linear-gradient(left, transparent, white , transparent); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(right, transparent, white, transparent); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(right, transparent, white, transparent); /* For Firefox 3.6 to 15 */
  background: linear-gradient(to right, transparent, white , transparent); /* Standard syntax */
  
      	  overflow:hidden;
		-ms-transform: rotate(7deg); /* IE 9 */
		-webkit-transform: rotate(7deg); /* Chrome, Safari, Opera */
		transform: rotate(7deg);
		
		animation-duration: 6s;
  animation-name: shine;
  animation-iteration-count: infinite;
      }
       #shiner-1{
       animation-delay: -7000ms;
       }
       
/* Standard syntax */
@keyframes shine {
    0% {margin-left:0;}
    25% {margin-left:100%;}
    100%{margin-left:100%;}
}
      
      
      
      /*
==============================================
floating
==============================================
*/

.floating{
	animation-name: floating;
	-webkit-animation-name: floating;

	animation-duration: 5s;	
	-webkit-animation-duration: 5s;

	animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
}

@keyframes floating {
	0% {
		transform: translateX(0%);	
    transform: rotate(-1deg);
	}
	25% {
		transform: translateX(50%);	
    transform: rotate(+1deg);
	}	
	50% {
		transform: translateY(10%);	
    transform: rotate(-1deg);
	}	
	75% {
		transform: translateY(20%);	
    transform: rotate(+1deg);
	}	
	100% {
		transform: translateY(10%);
    transform: rotate(-1deg);
	}			
}

/*glossy effect */

.glossy p {
	margin: 6px 0 0 0;
	text-align: center;
	position: relative;
	z-index: 1;
}
.glossy {
	width: 230px;
	height: 25px;

	margin: 10px auto;
	position: relative;

	background: #94c4fe;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(31%,#94c4fe), color-stop(100%,#d3f6fe));
	background: -webkit-linear-gradient(top,  #94c4fe 31%,#d3f6fe 100%);
	background: -moz-linear-gradient(top,  #94c4fe 31%, #d3f6fe 100%);
	background: -o-linear-gradient(top,  #94c4fe 31%,#d3f6fe 100%);
	background: -ms-linear-gradient(top,  #94c4fe 31%,#d3f6fe 100%);
	background: linear-gradient(to bottom,  #94c4fe 31%,#d3f6fe 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#94c4fe', endColorstr='#d3f6fe',GradientType=0 );

	-webkit-border-radius: 25px;
	-moz-border-radius: 25px;
	border-radius: 25px;

	border: 1px solid #4864a9;

	color: #000;
	font-size: 0.750em;
	text-shadow: 1px 1px 0px rgba(255,255,255,.5);

	-webkit-box-shadow:  0px 1px 3px 0px rgba(0, 0, 0, .2);    
    box-shadow:  0px 1px 3px 0px rgba(0, 0, 0, .2);

    position: relative;
}
.glossy:before {
	content: "";
	-width: 220px;
	height: 16px;

	display: block;
	position: absolute;
	left: 5px;

	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;

	background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(255,255,255,0.7) 8%, rgba(255,255,255,0) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(8%,rgba(255,255,255,0.7)), color-stop(100%,rgba(255,255,255,0)));
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.7) 8%,rgba(255,255,255,0) 100%);
	background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.7) 8%,rgba(255,255,255,0) 100%);
	background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.7) 8%,rgba(255,255,255,0) 100%);
	background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.7) 8%,rgba(255,255,255,0) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 );
}

/*Green*/

.glossy.green {
	background: #54bc3e;
	background: -moz-linear-gradient(top,  #54bc3e 0%, #aee850 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#54bc3e), color-stop(100%,#aee850));
	background: -webkit-linear-gradient(top,  #54bc3e 0%,#aee850 100%);
	background: -o-linear-gradient(top,  #54bc3e 0%,#aee850 100%);
	background: -ms-linear-gradient(top,  #54bc3e 0%,#aee850 100%);
	background: linear-gradient(to bottom,  #54bc3e 0%,#aee850 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#54bc3e', endColorstr='#aee850',GradientType=0 );
	border: 1px solid #1d6511;
}

    </style>
  </head>

  <body>
    <?php 
    $i=0;
    foreach($menu as $n=>$m ):
    $i++?>
    <div class="menu menu<?php echo $i;?>">
      
      <span class="shiny"><?php echo $n;?></span>
      <div id="shiner-<?php echo $i ;?>" class="shiner">&nbsp;</div>
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
    <div style="position: fixed; bottom:0;height:80%;width:100%;left:0; background:none;opacity:0">Hider to prevent rolover</div>
  </body>
</html>



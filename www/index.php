<?php

/*******************************************************************************
	Get menu
	$menu variable must be set
*******************************************************************************/
require('menu.inc.php');

/*******************************************************************************
	Set contents in menu
	
*******************************************************************************/
foreach( $menu as $i => $items )
{
	foreach( $items as $j => $item )
	{
		$file = 'contents/'.$item['source'];
		if( file_exists( $file ) )
		{
			$menu[$i][$j]['content'] = file_get_contents( $file );
		}
		else
		{
			$menu[$i][$j]['content'] = ' --- File not found - '.$file.' --- ';
		}
	}
}
/*******************************************************************************
	Import template
	Display the html result
*******************************************************************************/
include('templates/page.tpl.php');
?>



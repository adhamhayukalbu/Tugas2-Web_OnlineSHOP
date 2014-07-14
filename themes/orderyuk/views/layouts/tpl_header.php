<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OrderYuk</title>	
	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>	
    <!-- the styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/bootstrap-responsive.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Pontano+Sans'>
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/jquery.ui.datepicker.js" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/template.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/themes/default/default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/nivo-slider.css" >
	 <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/style4.css">   
    <script type="text/javascript" src="<?php echo $baseUrl;?>/js/swfobject/swfobject.js"></script>
	<script type="text/javascript" src="<?php echo $baseUrl;?>/js/lightbox/js/lightbox.js"></script>
    <!-- style switcher -->
    <script type="text/javascript" src="<?php echo $baseUrl;?>/js/styleswitcher.js"></script>
  </head>
<body>
<section id="header">
</section>
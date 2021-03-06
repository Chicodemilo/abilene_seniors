<!DOCTYPE html>
<html lang="en" >
<head>
    <title>
      <?php echo $blog[0]['title']; ?>
    </title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/abilene_seniors_main.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon_favicon.ico">
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $blog[0]['title']; ?>">
    <meta name="keywords" content="<?php echo $blog[0]['keyword_1']; ?>, <?php echo $blog[0]['keyword_2']; ?>, <?php echo $blog[0]['keyword_3']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url();?>css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>javascript/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>javascript/jquery-ui-1.10.4.custom.js"></script>
    <script src="https://code.createjs.com/createjs-2015.05.21.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>javascript/seniors_javascript.js"></script>
    <link rel='stylesheet' media='only screen and (max-width: 1084px)' href='<?php echo base_url();?>css/abilene_seniors_main_med.css'/>
    <link rel='stylesheet' media='only screen and (max-width: 700px)' href='<?php echo base_url();?>css/abilene_seniors_main_small.css'/>
    <link rel="stylesheet" href="<?php echo base_url();?>malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css" />
    <script src="<?php echo base_url();?>malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-67486424-1', 'auto');
      ga('send', 'pageview');

    </script>

    <style type="text/css">
    </style>
</head>
<body onload="init();">

    

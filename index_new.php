<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CryptoParty ATX</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Load Google Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
            .logo { 	/* just playing around with this, feel free to change or remove */
            	background:url("cryptoicon.png");
            	width:325px;
            	height:250px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
        
<!-- LOGO: just playing around with this, feel free to remove or change as needed -->        
        <a href="?page=0"><div class="logo">&nbsp;</div></a>
<!-- /LOGO -->

      
          <div class="list-group">
            <a href="?page=0" class="list-group-item active">
              About CryptoParty ATX
            </a>
            <a href="?page=1" class="list-group-item">How-To Guides</a>
            <a href="?page=2" class="list-group-item">Upcoming Events</a>
            <a href="?page=3" class="list-group-item">Contribute</a>
            <!-- <a href="#" class="list-group-item">Vestibulum at eros</a> -->
          </div>
        </div>
        <div class="col-lg-8">

<?php

$pageid = $_GET['page'];
if (!$pageid || ($pageid < 0) || ($pageid > 3)){ 
	$pageid=0;
}

if ($pageid==0){
	include "content/ATX.html";
}
if ($pageid==1){
	include "content/HT-EM.html";
}
if ($pageid==2){
	include "content/events.html";
}
if ($pageid==3){
	include "content/contrib.html";
}

?>

<hr>
          <p><strong>Copyleft Notice:</strong> This document is covered under GNU General Public License. The applications used in this guide are open-source and can be obtained at the creators' websites, listed above. (Please consult application documentation for their specific licenses.)</p>

          <p>If you find problems with this guide, need help, or have improvements or suggestions, please contribute to the git repo or email me at <a href="mailto:plexiglass@riseup.net">plexiglass@riseup.net</a>.</p>
        </div>
      </div>

    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>

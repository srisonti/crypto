<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- ALL YOUR ENCRYPTION ARE BELONG TO US -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <title>CryptoParty ATX</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Load Google Web Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
            .logo { 
            	background:url("crypto-icon-wide.png");
            	width:325px;
            	height:44px;
            }
            .sub-item {
				font-size: .9em;
				padding-left:2em;
            }
            .subactive {
            	background-color:#FF925D;
            	padding-left:2em;
            }
            a.sub-item:hover {
            	background-color:#FDCDAF;
            }
            .hideme {
            	display:none;
            }
            .osSelect {
            	float:right;
            	clear:right;
            	/*width:150px;*/
            	background:#DDDDDD;
            	padding:.25em;
            	margin:.25em;
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
        
        <a href="?page=0"><div class="logo">&nbsp;</div></a>

<?php

$pageid = $_GET['page'];
if (!$pageid){
	$pageid=0;
}
else if($pageid>3){
	$pageid=0;
}
else if($pageid<0){
	$pageid=0;
}
?>     
      
        <div class="list-group">
            <a href="?page=0" class="list-group-item<?php if($pageid==0)echo ' active'; ?>">
              About CryptoParty ATX
            </a>
            <a href="?page=1" class="list-group-item<?php if($pageid >= 1 && $pageid < 2)echo ' active'; else $inactive=true; ?>">Crypto Info and How-To Guides</a>
                <a href="?page=1.1" class="list-group-item sub-item<?php if($pageid==1.1)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Email Encryption</a>
                <a href="?page=1.2" class="list-group-item sub-item<?php if($pageid==1.2)echo ' subactive'; if($inactive) echo ' hideme'; ?>">File and Folder Encryption</a>
                <a href="?page=1.3" class="list-group-item sub-item<?php if($pageid==1.3)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Instant Message Encryption</a>
                <a href="?page=1.4" class="list-group-item sub-item<?php if($pageid==1.4)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Text Message (SMS) Encryption</a>
                <a href="?page=1.5" class="list-group-item sub-item<?php if($pageid==1.5)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Encrypted Web Browsing</a>
                <a href="?page=1.6" class="list-group-item sub-item<?php if($pageid==1.6)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Choosing Secure Passwords</a>
                <a href="?page=1.7" class="list-group-item sub-item<?php if($pageid==1.7)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Keysigning and Keyservers</a>
                <a href="?page=1.8" class="list-group-item sub-item<?php if($pageid==1.8)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Securely Delete Data</a>
            <a href="?page=2" class="list-group-item<?php if($pageid==2)echo ' active'; ?>">Upcoming Events</a>
            <a href="?page=3" class="list-group-item<?php if($pageid==3)echo ' active'; ?>">Contribute</a>
        </div>
        <div>Follow <a href="https://twitter.com/atxcrypto">ATXCrypto on Twitter</a></div>
    </div>
    <div class="col-lg-8">



<?php





if ($pageid==0){
	include "content/ATX.html";
}
else if ($pageid==1){
	include "content/how-to.html";
}
	else if ($pageid==1.1){
		include "content/HT-EMAIL.html";
	}
	else if ($pageid==1.2){
		include "content/HT-FILE.html";
	}
	else if ($pageid==1.3){
		include "content/HT-OTR.html";
	}
	else if ($pageid==1.4){
		include "content/HT-SMS.html";
	}
	else if ($pageid==1.5){
		include "content/HT-WEB.html";
	}
	else if ($pageid==1.6){
		include "content/HT-PASSWD.html";
	}
	else if ($pageid==1.7){
		include "content/HT-KEYS.html";
	}
	else if ($pageid==1.8){
		include "content/HT-DELETE.html";
	}

else if ($pageid==2){
	include "content/events.html";
}
else if ($pageid==3){
	include "content/contrib.html";
}

?>

        <hr>
          <p><img width=44 src="images/gplv3-88x31.png" />&nbsp;&nbsp;<strong>Copyleft Notice:</strong> The content on this page is covered under <a href="https://www.gnu.org/copyleft/gpl.html">GNU General Public License version 3.0</a> unless otherwise noted. The applications referenced in this site are open-source unless otherwise noted and can be obtained at the creators' websites, listed when used. Please consult application documentation for specific licenses. We have no affiliation with any linked site unless otherwise noted.</p>

          <p>If you find problems with this site, need help, or have improvements or suggestions, please contribute to the <a href="https://github.com/srisonti/crypto">git repo</a> or email me at <a href="mailto:plexiglass@riseup.net">plexiglass@riseup.net</a>.</p>
        </div>
      </div>

    </div> <!-- /container -->        
    
<!-- do we even use these??? pretty sure we don't...   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
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
        
-->       
    </body>
</html>

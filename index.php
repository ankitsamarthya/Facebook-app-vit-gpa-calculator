<?php
require 'facebook.php';
$facebook = new Facebook(array(
    'appId' => 'cb50a7534ed9d6f9a3f6e82011d0d120',
    'secret' => 'b914b54101d1fa9892af18ffe761c157',
    'cookie' => true, 
));

$session = $facebook->getSession();
$me = null;
try{
    
    $me = $facebook->api('/me');
}
catch(FacebookApiException $e){}

if($me)
{
    ?>
<html>
    <head>
	<title>Vit CGPA Calculator</title>
	<style>
	body {
	    font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
	    font-size: 'small';
	    
	}
	h1 a {
	    text-decoration: none;
	    color:#3b5998;
	}
	h1 a:hover {
	    text-decoration:underline;
	}
	</style>
    </head>
    <body>
	<h1><font color=darkblue>VIT CGPA Calculator</font></h1>
	<p>
	    # Leave the field(s) blank if you have less subjects.<br/>
	    
	    # Any invalid entry will be considered as null or zero value.
	    <form action="answer.php" method="get">
		<br/><br/>
		Subject 1: Credits:<input type="text" name="c1" />&nbsp;Grade:<input type="text" name="g1" />
		<br/><br/>
		Subject 2: Credits:<input type="text" name="c2" />&nbsp;Grade:<input type="text" name="g2" />
		<br/><br/>
		Subject 3: Credits:<input type="text" name="c3" />&nbsp;Grade:<input type="text" name="g3" />
		<br/><br/>
		Subject 4: Credits:<input type="text" name="c4" />&nbsp;Grade:<input type="text" name="g4" />
		<br/><br/>
		Subject 5: Credits:<input type="text" name="c5" />&nbsp;Grade:<input type="text" name="g5" />
		<br/><br/>
		Subject 6: Credits:<input type="text" name="c6" />&nbsp;Grade:<input type="text" name="g6" />
		<br/><br/>
		Subject 7: Credits:<input type="text" name="c7" />&nbsp;Grade:<input type="text" name="g7" />
		<br/><br/>
		Subject 8: Credits:<input type="text" name="c8" />&nbsp;Grade:<input type="text" name="g8" />
		<br/><br/>
		Subject 9: Credits:<input type="text" name="c9" />&nbsp;Grade:<input type="text" name="g9" />
		<br/> <br/>
		<input type="submit" value="Calculate" />
	    </form>
    </body>
</html>
<?php
		
}
else
{
    ?>
    
    <html xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
	</head>
	<body>
	    <div id="fb-root"></div>
	    <script>
	    window.fbAsyncInit = function(){
		FB.init({
		    appId : '<?php echo $facebook->getAppId(); ?>',
		    session : <?php echo json_encode($session); ?>,
		    status : true,
		    cookie : true,
		    xfbml : true
		    
		});
		FB.Event.subscribe('auth.login',function(){
		    window.location.reload();
		});
	    };
	    (function(){
		var e = document.createElement('script');
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
		
	    }());
	    </script>
	    <div>
		You still have not installed this application. Press the following login button in order to install it.
		<p><fb:login-button></fb:login-button>
		</p>
	    </div>
	    <?php
    
}
?>
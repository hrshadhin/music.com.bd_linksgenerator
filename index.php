<?php
require_once './include/parse.php';
$err="";
if(isset($_POST['submitted'])){
$url=$_POST['url'];
	if($url==""){
		$err="<h1>Please Fill up field with album url</h1>";
	}
	else{
	   $obl = new myParse;
	   $data=$obl->multiLink($url);
	   if(count($data)<1){
	   	$err="<h1>Please give album url.You have provided wrong link!!!</h1>";
	   }

	}
}

?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TuxBot->Linkgen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/my.css">

</head>
<body>
<!-- Headder row -->
    <div class="row">
       <div class="container">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<a class="navbar-brand" href="http://hrshadhin.tk">
				TuxBot
				<br/> <em><small>Another CrazyCoder</small></em> 
			</a>
			<h2 class="navbar-text navbar-middle">
			www.music.com.bd Album songs direct link generator
		</h2>
	
		<div class="navbar-text btn-group navbar-right">
			<button type="button" class="btn btn-default btn-lg mv">
				<a href="https://github.com/hrshadhin/music.com.bd_linksgenerator" target="_new"><span class="glyphicon glyphicon-cloud-download"></span>Get Sources</a>
			</button>
			
		</div>
	</nav>
</div>
 </div>
 <div class="row" id="low">
 	 <div class="container">
 	<form  action="index.php" method="POST" enctype="text/plain"> 
     <label class="lead">Album URL:</label>
    <input class="cl" name="url" type="text" value="" size="60"/>
    <button type="submit" name="submitted" class="btn btn-default btn-lg cl">
				<span class="glyphicon glyphicon-link"></span>Get Links</a>
			</button>
    
</form> 
 </div>
</div>


	<div class="row">
	<div id="boxe">
   <?php
   	 if($err!="")
   	 {
   	 	echo $err;
   	 }
   	 else{
   	 	 echo "<h3>";
   	 	 foreach ($data as $key => $value) {
	   		echo "<a href='".$value."' targer='_blank'>".$key."</a><br>";
	   
	   }
	   echo "</h3>";
   	 }
   ?>
  

	</div>
	</div>
</body>
</html>

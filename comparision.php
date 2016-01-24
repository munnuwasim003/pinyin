<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PinYin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.min.js"></script>
    <script src="js/app.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-app="store">
      <div id="logoo">
      <img src="logo.jpg">
      </div>
   <div ng-include="'nav.html'"></div>
	<div class="text-center">
		<form action="result.php" method="post">
		<label>
		<input type="text" name="name" placeholder="search your product" style="width:300px">
		<input type="submit" value="search">
		</label>
	</form>
	<div class="warning">
	<p class="text-left" style="font-size:30px; padding-left:20px">We will provide you every products price<br>All you have to do is to search and select one</p>
		
	</div>

	<footer>
     <header>
       <h3 class="text-center">Thanks for using our service!!!</h>
     </header>
   </footer>
</div>
</body>
</html>
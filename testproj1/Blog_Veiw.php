<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- helloworld.html
     A trivial document
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> Our first document: Hello World! </title>
  <link rel = "stylesheet" tupe = "text/css" href = "style1.css" title = "Style 1"/>
   <style>
   body {background-color:lightyellow}
   </style>
   <style type="text/css">

	body
  		{ 
                margin-top: 0;
		margin-bottom: 0;
    		margin-left: 0;
    		margin-right: 0;
    		padding-left: 0;
    		padding-right: 0;
  		}
  	
  	#header
		{
		text-align: center;
		font-size: 340%;
		font-style: italic;
		color: blue;
		font-weight: 900;
		}

  	#menu 
		{
                margin-left: 15px;
		font-size: 130%;
    		padding: 0px;
    		width: 800px;
    		color: blue;
    		font-weight: 300;
  		}

  	#content 
		{
		margin-left: 1780px;
		font-size: 120%;
		left: 100px;
    		padding: 0px;
		width: 200px;
		margin-right: 15px;
  		}

  	#footer 
		{
    		background-color: red
  		}

   </style>
  <link rel = "alternate stylesheet" tupe = "text/css" href = "style2.css" title = "Style 2"/>
  </head>
  <body>
	
	<div id = "header">
		Vlog on Jun's Vloggers 
	</div>

	<div id = "content">
	<ul>
		<li> <a href = "http://localhost/testproj1/Login_Blog.php">Login</a> </li>
		<li> <a href = "http://localhost/testproj1/index.php">Add blog</a> </li>
	</ul>
	</div>
	
	<div id = "menu">
	    <?php
                  $myFile = array_reverse(file("File.txt"));
                  foreach($myFile as $line)
                  {
                      echo $line . "<br />";
                  }
	    ?>
	</div>

  </body>
</html>

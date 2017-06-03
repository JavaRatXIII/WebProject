<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
    <head> <title> Our first document: Hello World! </title>
        <style>
            body {background-color:lightyellow}
        </style>

    </head>
    <body>
        <p>
            <a href = "Blog_Veiw.php">Return to Vlog</a>
        </p>

        <h1> Vlog on Jun's Vloggers </h1>

        <form action="Login_Blog.php" method="post">
            User Name:&nbsp;&nbsp;<input type="text" name="Name"><br /><br />
            Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass"><br />
            <input type="submit" name="submit" value ="Log In"></p>
        </form>

        <?php
        $Username = isset($_POST['Name']) ? $_POST['Name'] : '';
        $Pass = isset($_POST['pass']) ? $_POST['pass'] : '';
        $Sumit = isset($_POST['submit']) ? $_POST['submit'] : '';

        if (isset($Sumit)) {
        
	    if ($Sumit == True)
	    {
	      if (($Username == "Jun") and ($Pass == "1994"))
	      {
		if (!headers_sent())
		{
		  header("Location: http://localhost/testproj1/index.php");
		  exit;
		}
	      }
	    }
	}
        ?>

  </body>
</html>
<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- helloworld.html
     A trivial document
-->
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

        <form action="index.php" method="post">
            Title:&nbsp;&nbsp;<input type="text" name="title"><br /><br />
            VLog:<textarea name = "vlog" rows = "15" cols = "100" value=""></textarea><br>
            <input type="submit" name="submit" value="Submit">
            <button Onclick="return ConfirmDelete();" type="reset" name="actiondelete" value="1">Clear
        </form>

        <?php
        $Title = isset($_POST['title']) ? $_POST['title'] : '';
        $Vlog = isset($_POST['vlog']) ? $_POST['vlog'] : '';
        $Sumit = isset($_POST['submit']) ? $_POST['submit'] : '';
        $Clear = isset($_POST['clear']) ? $_POST['clear'] : '';
        $VlogDate = date("l, d/m/Y");

        if (isset($Sumit)) {
            $File = fopen("File.txt", "a");

            if ($File == null) {
                die("Error file cannot be opended");
            }

            if(isset($_POST['title']))
            {
                fwrite($File, $VlogDate . "\r\n");
                fwrite($File, $Vlog . "\r\n");
                fwrite($File, $Title . "\r\n");
                fwrite($File, "\r\n");
            }
        }
        
        ?>
        
        <script>
            function ConfirmDelete()
            {
                var x = confirm("Are you sure you want to delete?");
                if (x)
                    return true;
                else
                    return false;
            }
        </script>

  </body>
</html>
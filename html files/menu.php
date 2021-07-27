<?php

                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                                if($_POST["submit"]=="Show all Images")
                                {
                                        header("Location: http://13.68.130.186/listVm.php");
                                        exit();
                                }
                                else if($_POST["submit"]=="Filter Images")
                                {
                                        header("Location: http://13.68.130.186/filter.php");
                                        exit();
                                }
                                else if($_POST["submit"]=="Add Image")
                                {
                                        header("Location: http://13.68.130.186/add.php");
                                        exit();
                                }
                                else if($_POST["submit"]=="Logout")
                                {
                                        header("Location: http://13.68.130.186/index.php");
                                        exit();
                                }
                        }
?>

<html>
        <head>
                <style>
                h1{text-align: center;}
                form{text-align: center;}
                </style>
        </head>
        <body>
                <h1>SELECT OPTION:</h1><br>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="submit" name="submit" value="Show all Images"style="height:50px; width:150px"><br><br>
                <input type="submit" name="submit"  value="Filter Images" style="height:50px; width:150px"><br><br>
                <input type="submit" name="submit" value="Add Image" style="height:50px; width:150px"><br><br>
                <input type="submit" name="submit"  value="Logout" style="height:50px; width:150px">
                </form>
        </body>
</html>
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
~                                                                                                                                                                                                           
"menu.php" 44L, 1206C                                                                                                                                                                     14,4-32       All

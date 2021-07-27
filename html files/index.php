<?php
                        //define variables and set empty values
                        $nameErr = $passwordErr = "";

                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                                if(empty($_POST["name"]) || (($_POST["name"]) != "guest"))
                                {
                                        $nameErr = "Invalid Username";
                                }
                                if(empty($_POST["password"]) || (($_POST["password"]) != "guest"))
                                {
                                         $passwordErr = "Invalid Password";
                                }

                                if(($nameErr == "") && ($passwordErr == ""))
                                {
                                        header("Location: http://13.68.130.186/menu.php");
                                        exit();
                                }
                        }
?>

<html>
        <style>
        .error {color: #FF0000;}
        </style>
        <body>

                <h2>GUEST USER</h2>
                <p><span class="error">* required field</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                Name:<input type="text" name ="name">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
                Password:<input type="password" name="password">
                <span class="error">* <?php echo $passwordErr;?></span>
                <br><br>
                <input type = "submit">
                </form>

        </body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                     
                                                                                                                                                                                          10,1-8        All

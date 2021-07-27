<?php
//session_start();

                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                                if($_POST["submit"] == "Add Image Metadata")
                                {
                                        //print_r($_POST);
                                        for($i=0;!empty($_POST["key"][$i]);$i++)
                                        {

                                                //echo $_POST["key"][$i];
                                                //echo $_POST["value"][$i];
                                                $Document[$_POST["key"][$i]] = $_POST["value"][$i];
                                        }

                                        //var_dump($Document);
                                        $bulk = new MongoDB\Driver\BulkWrite;
                                        $_image1 = $bulk->insert($Document);
                                        $manager = new MongoDB\Driver\Manager("mongodb://20.55.40.30:27017");
                                        $result = $manager->executeBulkWrite('ImageDB.image',$bulk);

                                        header("Location: listVm.php");
                                        exit();
                                }
                        }
?>

<html>
        <head>
                <style>
                h1{text-align: center;}
                </style>
        </head>
        <body>
                <h1>Add Image:</h1><br>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <?php

                        for($i=0;$i<5;$i++)
                        {
                ?>

                                KEY:<input type="text" name="key[<?php echo $i ?>]"     style="height:50px; width:150px"><br><br>
                                VALUE:<input type="text" name="value[<?php echo $i ?>]" style="height:50px; width:150px"><br><br>
                <?php
                        }
                ?>

                <input type="submit" name="submit"  value="Add Image Metadata" style="height:30px; width:150px">
                </form>
        </body>
</html>
~                                                                                                                                                                                                           
"add.php" 53L, 1254C                                                                                                                                                                      24,12-47      All

<html>
        <head>
                <style>
                h1{text-align: center;}
                h2{text-align: center;}
                </style>
        </head>
        <body>
                <h1>Add Filters:</h1><br>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <?php

                        for($i=0;$i<10;$i++)
                        {
                ?>

                                KEY:<input type="text" name="key[<?php echo $i ?>]"     style="height:50px; width:150px"><br><br>
                                VALUE:<input type="text" name="value[<?php echo $i ?>]" style="height:50px; width:150px"><br><br>
                <?php
                        }
                ?>

                <input type="submit" name="submit"  value="Add Filter" style="height:30px; width:150px">
                </form>
                <br><br>
                <h2>VALUES AFTER FILTERING ARE:</h2>
                        <?php
                                if($_SERVER["REQUEST_METHOD"] == "POST")
                                {
                                        if($_POST["submit"] == "Add Filter")
                                        {
                                                //print_r($_POST);
                                                for($i=0;!empty($_POST["key"][$i]);$i++)
                                                {

                                                        $filter[$_POST["key"][$i]] = $_POST["value"][$i];
                                                        if($i>0)
                                                                $filter = ["$and" => [$filter]];
                                                }
                                                var_dump($filter);
                                                //$filter = ["$and" => $filter];
                                                $manager = new MongoDB\Driver\Manager("mongodb://20.55.40.30:27017");
                                                $options = [
                                                                   'maxTimeMS' => 1000,
                                                   ];
                                        $query = new MongoDB\Driver\Query($filter,$options);
                                        $cursor = $manager->executeQuery('ImageDB.image',$query);

                                        foreach($cursor as $document)
                                        {
                                                var_dump($document);
                                        }

                                }
                            }
                    ?>
                    
            </body>
    </html>
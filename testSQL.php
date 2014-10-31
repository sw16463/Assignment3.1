

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            include("header.php");            
        ?>
        <!--<p>HELLO WORLD</p>-->
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="row">
                    <div class="well">
                        <h4>Add your Comments Here</h4>
                        <input type="text" class="form-control" placeholder="comment">
                    </div>
                </div>
                <?php

                    if (!$link = mysql_connect('127.0.0.1:3306', 'root', 'Goodgirl21!')) {
                        echo 'Could not connect to mysql';
                        exit;
                    }

                    if (!mysql_select_db('practicecs242', $link)) {
                        echo 'Could not select database';
                        exit;
                    }

                    $sql    = 'SELECT userscom FROM users';
                    $result = mysql_query($sql, $link);

                    if (!$result) {
                        echo "DB Error, could not query the database\n";
                        echo 'MySQL Error: ' . mysql_error();
                        exit;
                    }

                    while ($row = mysql_fetch_assoc($result)) {
                        echo "<div class='row'><div class='well'>";
                        echo $row['userscom'];
                        echo "<hr>";
                        echo "<h4>Add your Comments Here</h4>";
                        if( $_GET["name"] || $_GET["age"] )
                          {
                             echo "Welcome ". $_GET['name']. "<br />";
                             echo "You are ". $_GET['age']. " years old.";
                             
                          }
                        echo "<form action='$_PHP_SELF' method='GET'>";
                        echo "Name: <input type='text' name='name' />";
                        echo "Age: <input type='text' name='age' />";
                        echo "<input type='submit' />";
                        echo "</form>";
                        echo "</div></div>";
                    }

                    mysql_free_result($result);
            
                    ?>
            </div>
        </div>
    </body>
</html>

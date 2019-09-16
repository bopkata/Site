<?php
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db-connection.php";

$title = "Координати";


?>
    <section class="section centre">
        <?php
        $searcher = isset($_GET['input']) ? $_GET['input'] : '';
    if($searcher){
        echo "<div class='form_result'>".$searcher."</div>";
    }

        $foo_connection = db_connect($host, $user_name, $user_password, $database);
        $sql = "SELECT * FROM data";

        $result = mysqli_query($foo_connection, $sql);

        if(mysqli_num_rows($result) > 0){
            print "<table>";
            print "<tr>
                        <th>Име</th>
                        <th>Координати</th>
                        <th>Област</th>
                   </tr>";
            foreach($result as $key => $cols){

                print "<tr>" .
                        "<td>" . $cols['name'] . "</td>  " .
                        "<td>" . $cols['coordinates'] . "</td>  " .
                        "<td>" . $cols['district'] . "</td>" .
                        "</tr>";

            }
            print "</table>";
        }
        else {
            print "0 results";
        }

        mysqli_close($foo_connection);
        ?>

    </section>

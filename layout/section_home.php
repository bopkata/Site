<?php

$title = "Home";

?>
<section class="section">
    <?php
    $searcher = isset($_GET['input']) ? $_GET['input'] : '';
    if($searcher){
        echo "<div class='form_result'>".$searcher."</div>";
    }
    ?>


</section>


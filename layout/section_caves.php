<?php
$title = "Пещери";


?>

<section class="section">
    <?php
    $searcher = isset($_GET['input']) ? $_GET['input'] : '';
    if($searcher){
        echo "<div class='form_result'>".$searcher."</div>";
    }
    ?>
    <h2>Ягодинската Пещера</h2>
    <img src="images/iagodinskata_peshtera.jpg" alt="image">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Architecto atque aut consequuntur facere itaque minus nostrum officia, perferendis placeat quia unde veritatis, vero voluptate.
        Dignissimos, numquam voluptatem. Error, minima, quasi?</p>
    <span class="clear"></span>
    <h2>Леденика</h2>
    <img src="images/ledenika.jpg" alt="image">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Architecto atque aut consequuntur facere itaque minus nostrum officia, perferendis placeat quia unde veritatis, vero voluptate.
        Dignissimos, numquam voluptatem. Error, minima, quasi?</p>
    <span class="clear"></span>

    <a href="http://localhost/www/Site/monasteries.php" class="baner"></a>
</section>
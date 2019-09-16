<?php
$title = "Манастири";
?>
<section class="section">
    <?php
    $searcher = isset($_GET['input']) ? $_GET['input'] : '';
    if($searcher){
        echo "<div class='form_result'>".$searcher."</div>";
    }
    ?>
    <h2>Рилски Манастир</h2>
    <img src="images/rilski.jpg" alt="image">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Architecto atque aut consequuntur facere itaque minus nostrum officia, perferendis placeat quia unde veritatis, vero voluptate.
        Dignissimos, numquam voluptatem. Error, minima, quasi?</p>
    <span class="clear"></span>
    <h2>Гложенски Манастир</h2>
    <img src="images/glojenski.jpg" alt="image">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Architecto atque aut consequuntur facere itaque minus nostrum officia, perferendis placeat quia unde veritatis, vero voluptate.
        Dignissimos, numquam voluptatem. Error, minima, quasi?</p>
    <span class="clear"></span>
</section>
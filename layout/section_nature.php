<?php
$title = "Природа";
?>
<section class="section">
    <?php
    $searcher = isset($_GET['input']) ? $_GET['input'] : '';
    if($searcher){
        echo "<div class='form_result'>".$searcher."</div>";
    }
    ?>
    <h2>Чудните Мостове</h2>
    <img src="images/chudnite_mostove.jpg" alt="image">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Architecto atque aut consequuntur facere itaque minus nostrum officia, perferendis placeat quia unde veritatis, vero voluptate.
        Dignissimos, numquam voluptatem. Error, minima, quasi?</p>
    <span class="clear"></span>
    <h2>Очите на Бога</h2>
    <img src="images/ochite.jpg" alt="image">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Architecto atque aut consequuntur facere itaque minus nostrum officia, perferendis placeat quia unde veritatis, vero voluptate.
        Dignissimos, numquam voluptatem. Error, minima, quasi?</p>
    <span class="clear"></span>

</section>
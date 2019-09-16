<?php
$title = "История";

?>
<section class="section">
<?php
$searcher = isset($_GET['input']) ? $_GET['input'] : '';
if($searcher){
    echo "<div class='form_result'>".$searcher."</div>";
}
?>

    <h2>Шипка</h2>
    <img src="images/shipka.jpg" alt="image">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Architecto atque aut consequuntur facere itaque minus nostrum officia, perferendis placeat quia unde veritatis, vero voluptate.
        Dignissimos, numquam voluptatem. Error, minima, quasi?</p>
    <span class="clear"></span>
    <h2>Царевец</h2>
    <img src="images/krepostta-carevec.jpg" alt="image">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Architecto atque aut consequuntur facere itaque minus nostrum officia, perferendis placeat quia unde veritatis, vero voluptate.
        Dignissimos, numquam voluptatem. Error, minima, quasi?</p>
    <span class="clear"></span>


</section>
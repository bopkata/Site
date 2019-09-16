<?php
$title = "Контакти";
?>
<section class="section">
    <?php
    $searcher = isset($_GET['input']) ? $_GET['input'] : '';
    if($searcher){
        echo "<div class='form_result'>".$searcher."</div>";
    }
    ?>

<form  action="" method="post"  class="fields" name="contact">

        <div class="form" >
            <label for="name">Въведете Име</label><br>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form">
            <label for="email">Въведете Email</label><br>
            <input type="email" name="email" id="email">
        </div>

        <div class="form">
            <label for="text">Въведете Съобщение</label><br>
        <textarea cols="40" rows="20" name="text" id="text" >

        </textarea>
        </div>
        <div class="form">
            <input type="submit" name="submit" value="Изпрати">
        </div>

</form>
    <?php
    if(isset($_POST['submit'])){

        $userName = input_data($_POST['name']);
        $userEmail = input_data($_POST['email']);
        $userText = input_data($_POST['text']);

        echo "<div class='form_result'> <br>".$userName." <br>".$userEmail."<br>".$userText."</div>";
    }
    function input_data($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</section>

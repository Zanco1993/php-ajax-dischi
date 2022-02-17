<?php

include __DIR__ . "/db/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">

        <header>
            <img src="./img/logo.png" alt="">
        </header>

        <div class="container-cards">
            <!-- ciclo le card con php -->
            <?php foreach ($dischi['response'] as $disc) {
            ?>
                <div class="box-card">
                    <img src="<?php echo $disc['poster']?>" alt="">
                    <h3><?php echo $disc['title'] ?></h3>
                    <p><?php echo $disc['author'] ?></p>
                    <p><?php echo $disc['year']?></p>
                </div>
                
                <?php } ?>

        </div>



    </div>


    <script src="./js/script.js"></script>
</body>

</html>
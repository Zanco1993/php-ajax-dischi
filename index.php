<?php

include __DIR__ . "/db/db.php";

// var_dump($dischi);
$filteredDisc = [];
$filterName = key_exists("author", $_GET) ? $_GET["author"] : "";

if (!$filterName) {
    $filteredDisc = $dischi['response'];
} else {
    foreach ($dischi['response'] as $disc) {
        $valid = true;

        // se esiste il valore filterName e se la ricerca inserita dall'utente non viene
        // trovata nell'array disc, allora $valid = false
        if ($filterName && strpos(strtolower($disc['author']), strtolower($filterName)) === false) {
            $valid = false;
        }
        if ($valid) {
            $filteredDisc[] = $disc;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="./style/styleIndex.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>


    <header>
        <div class="content-logo">
            <img src="./img/logo.png" alt="">
        </div>
        <div class="box-input">
            <form action="">
                <input type="text" name="author" value="<?php echo $filterName ?>" placeholder="Cerca Artista">
                <button href="" type="submit">Cerca</button>
                <div type="reset">
                    <a href="index.php">Reset</a>
                </div>
            </form>
        </div>

    </header>

    <div class="container-cards">
        <!-- ciclo le card con php -->
        <?php foreach ($filteredDisc as $disc) {
        ?>
            <div class="box-card">
                <img src="<?php echo $disc['poster'] ?>" alt="">
                <h3><?php echo $disc['title'] ?></h3>
                <p><?php echo $disc['author'] ?></p>
                <p><?php echo $disc['year'] ?></p>
            </div>

        <?php } ?>

    </div>

</body>

</html>
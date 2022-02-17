<?php

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

            <!-- stampa delle cards attraverso una chiamata axios e poi eseguita in vue -->
            <div v-for="disc in discs" class="box-card">

                <img :src="disc.poster" alt="">
                <h3>{{disc.title}}</h3>
                <p>{{disc.author}}</p>
                <p>{{disc.year}}</p>

            </div>

        </div>

    </div>


    <script src="./js/script.js"></script>
</body>

</html>
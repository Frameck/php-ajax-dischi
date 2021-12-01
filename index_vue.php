<?php

require_once __DIR__ . '/data/dischi.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="bg-header-secondary p-3">
        <img src="assets/img/spotify-logo.png" alt="spotify-logo">
    </header>

    <main class="bg-main-primary p-5" id="root">
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-md-5 gx-5 gy-4 py-5">
                <div class="col" v-for="(disco, i) in dischi" :key="disco + i">
                    <div class="card bg-header-secondary border-0 px-4 pt-4 pb-card rounded-0">
                        <img :src="disco.poster" :alt="disco.title" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class='text-light mb-3'>{{ disco.title.toUpperCase() }}</h4>
                            <h5 class='cart-text m-0'>{{ disco.author }}</h5>
                            <h6 class='cart-text'>{{ disco.year }}</h6>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </main>

    <script src="./js/script.js"></script>
</body>
</html> 
</html>
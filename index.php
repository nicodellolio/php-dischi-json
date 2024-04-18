<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Popular Album This Week</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="./assets/img/Huawei_Music_logo.webp" alt="">
        </div>
        <nav class="menu">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </nav>
        <div class="logo-bol">
            <img src="./assets/img/boolean.png" alt="" srcset="">
        </div>
    </header>

    <div id="app">

        <div class="main">

            <div class="container text-success-emphasis album-box mt-5">
                <div class="row">
                    <div v-for="(album, index) in albums" class="col-4 g-5">
                        <div @click="anteprima(index)" class="card text-center py-4 px-4 h-100 w-100 text-white album_card">

                            <img :src="album.poster" :alt="album.title + ' by ' + album.author + ' cover image'" srcset="">

                            <span class="title">{{ album.title }}</span>
                            <span class="artist">{{ album.author }}</span>
                            <span class="year pb-3">{{ album.year }}</span>

                        </div>

                        <div v-if="show" class="container position-fixed">
                            <div class="row">
                                <div class="col-1">
                                    <div class="card">
                                        {{index}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>
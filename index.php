<?php 

// include __DIR__ . '/api.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Popular Album This Week</title>
</head>
<body>
    
    <div id="app">
        <div class="header">

        </div>

        <div class="main">

            <div class="container w-75 text-success-emphasis album-box">
                <div class="row">
                    <div class="col-4 g-5">
                        <div class="card text-center py-2 px-4 h-100">
                            <!--                             
                            <img :src="album.poster" :alt="album.title + ' by ' + album.author + ' cover image'" srcset="">
                            
                            <span class="fw-bold fs-5 title">{{ album.title }}</span>
                            <span class="artist">{{ album.author }}</span>
                            <span class="year fw-light pb-3">{{ album.year }}</span> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer">

        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>
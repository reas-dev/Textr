<!doctype html>
<html lang="en" id="Home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Textr</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark primary-bg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Textr</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li id="menuHome" class="nav-item active">
                        <a class="nav-link page-scroll" href="#Home">Home</a>
                    </li>
                    <li id="menuGames" class="nav-item">
                        <a class="nav-link page-scroll" href="#Games">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="news.html">News</a>
                    </li>
                    <li id="menuAbout" class="nav-item">
                        <a class="nav-link page-scroll" href="#About">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="primary-bg text-light svg-back">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-sm-5 col-10 my-auto">
                    <h1 class="display-4"><strong>Best Player's Choice</strong></h1>
                    <h2><small>Game Review Site</small></h2>
                </div>
                <div class="col-sm-6 col-10 pt-3">
                    <img src="img/Icon2.png" class="mw-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div id="Games" class="secondary-bg">

    </div>

    <div class="secondary-bg h-100 pt-3">
        <div class="container pt-5">
            <div class="text-primary">
                <h4><a id="Gamesa" class="page-scroll" href="#Games"><u>Games</u></a> | <a id="News" class="page-scroll"
                        href="news.html">News</a>
                </h4>
            </div>
            <div class="row row-cols-1 row-cols-md-3 pt-3">
                <div class="card-hover col pb-4">
                    <div class="shadowa">
                        <a href="GamesDBD.html">
                            <img src="img/dbd/dbdBanner.png" class="card-img-top" alt="...">
                            <div class="rounded-bottom accent-bg">
                                <h5 class="text-center pb-1">Dead By Daylight</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-hover col pb-4">
                    <div class="shadowa"><a href="GamesDOTA.html">
                            <img src="img/dota2/dota2icon.jpg" class="card-img-top" alt="...">
                            <div class="rounded-bottom accent-bg">
                                <h5 class="text-center pb-1 text-truncate">Defense Of The Ancients 2</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-hover col pb-4">
                    <div class="shadowa"><a href="GamesR6.html">
                            <img src="img/r6/r6Banner.jpg" class="card-img-top" alt="...">
                            <div class="rounded-bottom accent-bg">
                                <h5 class="text-center pb-1">Rainbow 6 Siege</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="primary-bg svg-back-reverse pt-5">
        <div class="container pt-5 text-light">
            <div id="About" class="row justify-content-center py-5">
                <div class="col-sm-8 p-3">
                    <h3 class="mb-3">About Me</h3>
                    <p class="text-justify text-indent">Textr.com merupakan website yang berisikan pembahasan seputar
                        game yang
                        berfokus pada game pc.
                        Textr.com bertujuan untuk memberikan informasi dari game yang telah dirilis maupun yang akan
                        dirilis serta memberikan informasi yang berkaitan dengan publisher dari game pc.
                        Pembuatan awal website ini bertujuan untuk memenuhi tugas mata kuliah Pemrograman Web dan
                        memberikan informasi kepada pengunjung seputar game pc.
                        Textr.com dikelola dan dikembangkan oleh Andreas, seorang mahasiswa TI Universitas Dian
                        Nuswantoro.</p>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3 p-3">
                    <h3 class="mb-3">Connect Me</h3>
                    <div class="my-3" id="WA" onclick="ubahWA(this)" onmouseout="balikWA(this)"><img
                            src="img/icon/wa.png" alt="..." height="30px"> Click Me!</div>
                    <div class="my-3" id="FB" onclick="ubahFB(this)" onmouseout="balikFB(this)"><img
                            src="img/icon/fb.png" alt="..." height="30px"> Click Me!</div>
                    <div class="my-3" id="TWIT" onclick="ubahTWIT(this)" onmouseout="balikTWIT(this)"><img
                            src="img/icon/twitter.png" alt="..." height="30px"> Click Me!</div>
                </div>
            </div>
        </div>
    </div>

    <div class="primary-bg py-5">
        <div class="container text-light">
            <h3 class="mb-3">Contact Me</h3>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comment</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>
        </div>
    </div>

    <div class="footer-bg">
        <div class="justify-content-center pt-3 pb-4">
            <p class="text-light text-center">Copyright © textr.com 2019, All rights reserved.<br>Powered by VSCode</p>
        </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js">
    </script>
    <script src="script.js"></script>
</body>

</html>
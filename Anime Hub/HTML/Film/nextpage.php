<?php
include '../../HTML/General/conn.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Films/filmcss.css">
    <link rel="stylesheet" href="../../CSS/swiper-bundle.min.css">
    <link rel="shortcut icon" href="/img/fav-icon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>AnimeHub - Watch Now</title>
</head>
<body>
    <!--Header-->
    <header>
        <div class="nav container">
        <a href="../../HTML/Film/Main.php" class="logo">
                Anime<span>Hub</span>
            </a>
            <div class="search-box">
                <span><?php echo $_SESSION['name'] ?></span>
                <i class='bx bx-user-circle'></i>
            </div>
            <!--USERRRRRRRRRRRR-->
            <a href="" class="user">
                <img src="../../img/user.jpg" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="../../HTML/Film/Main.html" class="nav-link nav-action">
                    <i class='bx bx-home-alt' ></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="../../HTML/General/logout.php" class="nav-link">
                    <i class='bx bx-log-out'></i>
                    <span class="nav-link-title">Log-out</span>
                </a>
            </div>
        </div>
    </header>
    <section class="movies container" id="movies">
        <div class="heading">
        </div>
        <div class="movies-content">
            <!-- MOVIE 1-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/attack on titan.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Attack on Titan
                        </h2>
                        <span class="movie-type">Drama - Short  </span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 2-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/Boku_no_Hero_Academia_Volume_1.png" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Boku no Hero Academia
                        </h2>
                        <span class="movie-type">Action - Drama</span>
                        <a href=" " class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 3-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/death-note-from-the-shadows-i58005.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DeathNote From The Shadows
                        </h2>
                        <span class="movie-type">Action - suspense</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 4-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer : Kimetsu no Yaiba
                        </h2>
                        <span class="movie-type">Action - Adventure</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 5-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/hunterxhunter.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">HUNTER X HUNTER
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 6-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/juju.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">JuJuStu Kaisen
                        </h2>
                        <span class="movie-type">Action - Animation</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 7-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/nartuo.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Naruto Shippuden: The Kazekage's Rescue
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 8-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/tokyo reve.webp" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Tokyo Revengers
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 9-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/Child of Kamiari Month.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Child of Kamiari Month.jpg
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 10-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/Doraemon Movie 40 Nobita's New Dinosaur.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Doraemon Movie 40 Nobita's New Dinosaur
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 11-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/Fruits Basket Prelude.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Fruits Basket Prelude
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 12-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/Over the Sky.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Over the Sky
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 13-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/Princess Principal Crown Handler Movie 2.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Princess Principal Crown Handler
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 14-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/The Journey.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">The Journey
                        </h2>
                        <span class="movie-type">Action - Crime</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 15-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/The Seven Deadly Sins.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">The Seven Deadly Sins 
                        </h2>
                        <span class="movie-type">Drama - Animation</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 16-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../Film Media/sp posters/tokyo rev.jpe" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">Tokyo Revengers ES.1
                        </h2>
                        <span class="movie-type">Action - Drama </span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="next-page">
        <a href="../../HTML/Film/Main.php" class="next-btn">Back Page</a>
    </div>
<div class="copyright">
    <p>copyright &copy; 2022 v233Team</p>
</div>

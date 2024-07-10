<?php
include '../../../HTML/General/conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/Films/filmcss.css">
    <link rel="shortcut icon" href="../../../img/fav-icon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>DemonSlayer : Kimetsu no Yaiba</title>
</head>
<body>
    <!--Header-->
    <header>
        <div class="nav container">
        <a href="../../../HTML/Film/Main.php" class="logo">
                Anime<span>Hub</span>
            </a>
            <div class="search-box">
                <span><?php echo $_SESSION['name'] ?></span>
                <i class='bx bx-user-circle'></i>
            </div>
            <!--USERRRRRRRRRRRR-->
            <a href="" class="user">
                <img src="../../../img/user.jpg" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="../../../HTML/Film/Main.php" class="nav-link nav-action">
                    <i class='bx bx-home-alt' ></i>
                    <span class="nav-link-title">Home</span>
                <a href="#up" class="nav-link nav-action">
                    <i class='bx bx-film'></i>
                    <span class="nav-link-title">Anime</span>
                </a>
                <a href="#download" class="nav-link">
                    <i class='bx bxs-download' ></i>
                    <span class="nav-link-title">Download</span>
                </a>
                <a href="#movies" class="nav-link">
                    <i class='bx bx-compass' ></i>
                    <span class="nav-link-title">Episodes</span>
                </a>
                <a href="../../../HTML/General/logout.php" class="nav-link">
                    <i class='bx bx-log-out'></i>
                    <span class="nav-link-title">Log-out</span>
                </a>
            </div>
        </div>
    </header>
    <div id="up" class="play-container container">
        <img src="../../../Movies play page/Demon.jpg" alt="" class="play-img">
        <div class="play-text">
            <h2>DemonSlayer : Kimetsu no Yaiba</h2>
            <div class="rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
            </div>
            <div class="tags">
                <span>Action</span>
                <span>Drama</span>
                <span>4k</span>
            </div>
            <a href="" class="watch-btn">
                <i class='bx bx-right-arrow' ></i>
                <span>Watch The Trailer</span>
            </a>
        </div>
        <i class='bx bx-right-arrow play-movie' ></i>
        <div class="video-container">
            <div class="video-box">
                <video id="myvideo" src="../../Videos/THIS IS 4K ANIME Ultra HD Anime.mp4" controls></video>
                <i class='bx bx-x close-video' ></i>

            </div>
        </div>
    </div> 
    <div  class="about-movie container">
        <h2>DemonSlayer : Kimetsu no Yaiba</h2>
        <p>A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.</p>
        <h2 class="cast-heading">Anime Characters</h2>
        <div  class="cast">
            <div class="cast-box">
                <img src="../../../Movies play page/DemonSlayer characters/tangero.webp" alt="" class="cast-img">
                <span class="cast-title">Tangero Kamado</span>
            </div>
            <div id="download" class="cast-box">
                <img src="../../../Movies play page/DemonSlayer characters/Zenitsu Agatsuma.jpg" alt="" class="cast-img">
                <span class="cast-title">Zenitsu Agatsuma</span>
            </div>
            <div class="cast-box">
                <img src="../../../Movies play page/DemonSlayer characters/Nezuko Kamado.jpg" alt="" class="cast-img">
                <span class="cast-title">Nezuko Kamado</span>
            </div>
            <div class="cast-box">
                <img src="../../../Movies play page/DemonSlayer characters/Muzan Kibutsuji.webp" alt="" class="cast-img">
                <span class="cast-title">Muzan Kibutsuji.webp</span>
            </div>
            <div class="cast-box">
                <img src="../../../Movies play page/DemonSlayer characters/Hashibira Inosuke.jpg" alt="" class="cast-img">
                <span class="cast-title">Hashibira Inosuke</span>
            </div>
            <div class="cast-box">
                <img src="../../../Movies play page/DemonSlayer characters/Giyu Tomioka.jpg" alt="" class="cast-img">
                <span class="cast-title">Giyu Tomioka</span>
            </div>
        </div>
    </div>
    <div  class="download">
        <h2 class="download-title">Download Anime</h2>
        <div class="download-link">
            <a href="../../../Videos/THIS IS 4K ANIME Ultra HD Anime.mp4" download>480p</a>
            <a href="../../../Videos/THIS IS 4K ANIME Ultra HD Anime.mp4" download>720p</a>
            <a href="../../../Videos/THIS IS 4K ANIME Ultra HD Anime.mp4" download>1080p</a>
        </div>
    </div>

    <section class="movies container" id="movies">
        <div class="heading">
            <h2 class="heading-title">Episodes</h2>
        </div>
        <div class="movies-content">
            <!-- MOVIE 1-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../../Movies play page/DemonSlayer characters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer
                        </h2>
                        <span class="movie-type">Episode No. 1  </span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 2-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../../Movies play page/DemonSlayer characters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer
                        </h2>
                        <span class="movie-type">Episode No. 2</span>
                        <a href="Demonslayer.php" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 3-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../../Movies play page/DemonSlayer characters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer
                        </h2>
                        <span class="movie-type">Episode No. 3</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 4-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../../Movies play page/DemonSlayer characters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer
                        </h2>
                        <span class="movie-type">Episode No. 4</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 5-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../../Movies play page/DemonSlayer characters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer
                        </h2>
                        <span class="movie-type">Episode No. 5</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 6-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../../Movies play page/DemonSlayer characters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer
                        </h2>
                        <span class="movie-type">Episode No. 6</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 7-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../../Movies play page/DemonSlayer characters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer 
                        </h2>
                        <span class="movie-type">Episode No. 7</span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOVIE 8-->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="../../../Movies play page/DemonSlayer characters/facetangero.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="box-title">DemonSlayer
                        </h2>
                        <span class="movie-type">Episode No. 8 </span>
                        <a href="" class="watch-btn play-btn">
                            <i class='bx bx-right-arrow' ></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="copyright">
        <p>copyright &copy; 2022 v233Team</p>
    </div>
    <script>
                let playButton = decument.querySelector('.play-movie');
                let video = decument.querySelector('.video-container');
                let myvideo = decument.querySelector('#myvideo');
                let closebtn = decument.querySelector('.close-video');
                playButton.onclick = () =>{
                video.classList.add("show-video")
                myvideo.play();
                }
                playButton.onclick = () =>{
                video.classList.remove("show-video")
                myvideo.play();
                }
    </script>
    
    </body>
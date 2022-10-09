<?php
require_once('config.php');

$stmt = $pdo->prepare("SELECT * FROM features");
$stmt->execute();

$stmt2 = $pdo->prepare("SELECT * FROM reviews");
$stmt2->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/062299588e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" />
    <title>Home | MrFoxy.eth</title>

    <meta name="description" content="Your description here">
    <meta name="keywords" content="keywords, goes, here, seperated, with, commas">
    <meta name="theme-color" content="#F1BE28">
    <meta name="author" content="polite#1745">
</head>

<body>
    <header class="hero">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="/assets/img/logo.png" alt="JakeIsBaked">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero-text">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1>The last moderation bot<br> your server will need</h1>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn-main">Invite Bot</a>
                            <a href="#" class="btn-main ml-3">Discord</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 168.452">
            <path id="Path_1" data-name="Path 1" d="M0,492.864s292.583-67.921,567.751-17.416,717.526,111.46,930,95.786S1920,475.448,1920,475.448V625.223H0Z" transform="translate(0 -456.77)" fill="#131519" />
        </svg>
    </header>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Blazing Fast</h5>
                            <span class="icon mx-auto mb-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.104 32.492">
                                    <defs>
                                        <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#56ccf2" />
                                            <stop offset="1" stop-color="#2f80ed" />
                                        </linearGradient>
                                    </defs>
                                    <path id="Path_2" data-name="Path 2" d="M19.246,14.858V3L4,21.634H15.858V33.492L31.1,14.858Z" transform="translate(-3 -2)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="url(#linear-gradient)" />
                                </svg>
                            </span>
                            <p class="card-text">MrFoxy is a moderation bot that will help you to moderate your server. It will help you to kick, ban, mute, and warn people.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Blazing Fast</h5>
                            <span class="icon mx-auto mb-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.104 32.492">
                                    <defs>
                                        <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#56ccf2" />
                                            <stop offset="1" stop-color="#2f80ed" />
                                        </linearGradient>
                                    </defs>
                                    <path id="Path_2" data-name="Path 2" d="M19.246,14.858V3L4,21.634H15.858V33.492L31.1,14.858Z" transform="translate(-3 -2)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="url(#linear-gradient)" />
                                </svg>
                            </span>
                            <p class="card-text">MrFoxy is a moderation bot that will help you to moderate your server. It will help you to kick, ban, mute, and warn people.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Blazing Fast</h5>
                            <span class="icon mx-auto mb-3 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.104 32.492">
                                    <defs>
                                        <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#56ccf2" />
                                            <stop offset="1" stop-color="#2f80ed" />
                                        </linearGradient>
                                    </defs>
                                    <path id="Path_2" data-name="Path 2" d="M19.246,14.858V3L4,21.634H15.858V33.492L31.1,14.858Z" transform="translate(-3 -2)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="url(#linear-gradient)" />
                                </svg>
                            </span>
                            <p class="card-text">MrFoxy is a moderation bot that will help you to moderate your server. It will help you to kick, ban, mute, and warn people.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="real-features">
        <div class="container">
            <div class="section-title text-center my-5">
                <h2>The Real Features</h2>
            </div>
            <?php $i = 0;
            while ($row = $stmt->fetch()) {
                $i++; ?>
                <?php if ($i & 1) { ?>
                    <div class="feature <?= ($i < 2) ? 'mt-5' : '' ?>">
                        <div class="row">
                            <div class="col-md-5 my-auto" data-aos="fade-right" data-aos-delay="<?= $i * 100 + 150 ?>" class="aos-init aos-animate">
                                <h2><?= $row['title'] ?></h2>
                                <p class="mb-4"><?= $row['text'] ?></p>
                                <a href="#" class="btn-second"><?= $row['btn-text'] ?></a>
                            </div>
                            <div class="col-md-6 offset-md-1" data-aos="fade-left" data-aos-delay="<?= $i * 100 + 150 ?>" class="aos-init aos-animate">
                                <img src="<?= $row['img'] ?>" alt="feature<?= $i ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="feature even <?= ($i < 2) ? 'mt-5' : '' ?>">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-right" data-aos-delay="<?= $i * 100 + 150 ?>" class="aos-init aos-animate">
                                <img src="<?= $row['img'] ?>" alt="feature<?= $i ?>" class="img-fluid">
                            </div>

                            <div class="col-md-5 offset-md-1 my-auto" data-aos="fade-left" data-aos-delay="<?= $i * 100 + 150 ?>" class="aos-init aos-animate">
                                <h2><?= $row['title'] ?></h2>
                                <p class="mb-4"><?= $row['text'] ?></p>
                                <a href="#" class="btn-second"><?= $row['btn-text'] ?></a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

    <section id="reviews">
        <div class="container">
            <div class="section-title text-center my-5">
                <h2>Reviews</h2>
            </div>
            <div class="owl-carousel owl-theme" data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                <?php while ($row = $stmt2->fetch()) { ?>
                    <div class="h-100">
                        <div class="review-card">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['name'] ?></h5>
                                    <p class="card-text"><?= $row['text'] ?></p>
                                    <div class="d-flex">
                                        <?php for ($i = 0; $i < $row['stars']; $i++) { ?>
                                        <span class="main">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="my-5 text-center" data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                <widgetbot server="929373187089768450" channel="946905598623092837" width="800" height="400"></widgetbot>
                <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
            </div>
        </div>
    </section>

    <footer class="mt-5">
        <div class="container">
            <p class="mb-0">Copyright © 2022 MrFoxy | All Rights Reserved.</p>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://cdn.jsdelivr.net/npm/@widgetbot/crate@3' async defer></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                900: {
                    items: 2
                },
                1400: {
                    items: 3
                }
            }
        })

        AOS.init({
            duration: 1200,
        })
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/6cfea94df0.js" crossorigin="anonymous"></script>
        <link rel="icon" href="images\argus_eternal_2x_transparent.png">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/article.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/images.css">
        <title>Home</title>
        <meta name="description" content="Home page of the showcase website">
    </head>

    <body>

        <!-- NAVIGATION BAR -->
        <ul class="navbar">
            <!-- TITLE & LOGO -->
            <div class="navbar_logo-title_base">
                <li class="navbar_logo">
                    <a href="index.php">
                        <img src="images\argus_eternal_2x_transparent.png" alt="argus_logo_2x_transparent">
                    </a>
                </li>
                <li>
                    <div>
                        <a class="navbar_title" href="index.php">Nikolay Favorskiy</a>
                        <a Class="navbar_title_aka" href="index.php">aka Lord Nikolas</a>
                    </div>
                </li>
            </div>
            <!-- PAGES -->
            <div class="navbar_pages_base">
                <li>
                    <a class="navbar_button" href="profile.php">Profile</a>
                </li>
                <li>
                    <a class="navbar_button" href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a class="navbar_button" href="faq.php">FAQ</a>
                </li>
                <li>
                    <a class="navbar_button" href="blog.php">Blog</a>
                </li>
            </div>
            <!-- SOCIALS -->
            <div class="navbar_socials_base">
                <li>
                    <a target="_blank" href="https://discordapp.com/users/410051248964763648">
                        <i class="fab fa-discord"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/LordNikolas">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://twitter.com/LordNikolas1">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://steamcommunity.com/id/lord_nikolas">
                        <i class="fab fa-steam"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://open.spotify.com/user/p7e2dfd1divv187hkq4yz1hgl">
                        <i class="fab fa-spotify"></i>
                    </a>
                </li>
            </div>
        </ul>

        <!-- HEADER -->
        <header>
            <h1 class="page_title">
                Welcome to the showcase website!
            </h1>
        </header>

        <hr class="seal_line">

        <article class="page_content">
            <a href="https://hz.nl/en/study-programmes/it">
                <img class="index_main_img" src="images/hz-logo_transparent_2.png" alt="hz_logo_transparent">
            </a>
            <ul>
                <?php foreach ($tasks as $task) : ?>
                        <li>
                            <?php if ($task->completion) : ?>
                                <strike> <?= $task->description; ?> </strike>
                            <?php else : ?>
                                <?= $task->description; ?>
                            <?php endif; ?>
                        </li>
                <?php endforeach; ?>
            </ul>
            <p>
                Hello there! My name is Nikolay Favorsky and this is my showcase website.
                Its purpose is to introduce me to you in detail.
                Please feel free to read, use or even distribute any information you can find here).
            </p>
            <div class="index_ul">
                <p>
                    There are multiple reasons why I chose to study HBO-ICT in HZ University of Applied Sciences:
                </p>
                <ul>
                    <li>
                        <p>
                            I assume that is unknowable now, 
                            but for whatever reason in this spring my registration for the only exam in Russia for higher education was canceled.
                            When I realized that, it was too late to appeal.
                            That means I was forced to search options for abroad study.
                            Otherwise I would had to serve in Russian Army for a year or so...
                            Due to the fact, that I did not plan to study abroad, there were only a few programs to choose from.
                        </p>
                    </li>
                    <li>
                        <p>
                            But why software engineering in the first place?
                            I have a dream to become a video game developer at some point.
                            From my point of view, 
                            only a proficient software engineer can bind all the required pieces of art into a single one 
                            in order to acomplish an ambitious project like one I dream about.
                        </p>
                    </li>
                    <li>
                        <p>
                            There were multiple universities that offered me to enroll, including Czech Technical University in Prague.
                            For the last few years I spent a lot of my free time studying urbanism and social sciences.
                            It could not be any other way, as I always wondered why Russian cities are so terrible in comparason with European,
                            as well as why the quality of life and preservation of human rights are on such distant levels.
                            I realized, that this would be the best place to learn more about such things, which may have a positive impact on 
                            worldbuilding of my dream-game-project.
                        </p>
                    </li>
                </ul>
            </div>
            <p>
                I have no doubt that this program suits me well. The only thing left is to prove that to you ))).
            </p>
            <p>
                Which might take a while..
            </p>
        </article>

        <hr class="seal_line">
        <img class="bottom_seal" src="images/argus_eternal_5x.png" alt="argus_logo_5x">
        
        <!-- FOOTER -->
        <footer>
            <ul class="footer">
                <div class="footer_content">
                    <div>
                        <ul class="footer_list">
                            <h3>Socials</h3>
                            <li>
                                <a target="_blank" href="https://discordapp.com/users/410051248964763648">
                                    Discord
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://github.com/LordNikolas">
                                    Github
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/LordNikolas1">
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://steamcommunity.com/id/lord_nikolas">
                                    Steam
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://open.spotify.com/user/p7e2dfd1divv187hkq4yz1hgl">
                                    Spotify
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="footer_list">
                            <h3>Contact</h3>
                            <li>
                                <a target="_blank" href="mailto:lordnikolas9091@gmail.com">
                                    lordnikolas9091@gmail.com
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="mailto:favo0001@hz.nl">
                                    favo0001@hz.nl
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="tel:+79629749091">
                                    +79629749091
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://goo.gl/maps/fCk7fUxWgRhtUZ9s6">
                                    Boulevard Bankert 156
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://goo.gl/maps/ipxffraLDvusati4A">
                                    4382HK Vlissingen
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
            
            <p class="signing">
                Nikolay Favorskiy, 2021
            </p>
        </footer>

    </body>
</html>

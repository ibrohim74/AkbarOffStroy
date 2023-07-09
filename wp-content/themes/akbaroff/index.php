<?php
/*
Template Name: lindo
*/
?>
<?php get_header() ?>

<body>

    <header>
        <div class="header-opacity"></div>
        <div class="header-content">
            <div class="logo">
                <h1>AkbarOff Stroy</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam,
                    corrupti.</p>
            </div>
        </div>
    </header>
    <div class="container">
        <h1 style="text-transform: uppercase; color:#fab162; margin-top: 0.5rem;" class="s1-h1-txt">Bizning ishlarimiz
        </h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top: 15px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- <div class="carousel-txt">
                    <h1>Bizning ishlarimiz</h1>
                </div> -->
                <div class="carousel-item active">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/klassik1.jpg" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/loft1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/minimalizm1.jpg" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section class="s1">
        <div class="container">
            <h1 class="s1-h1-txt">Uslublar</h1>
            <div class="s1-box">
                <a href="/portfolio">
                    <div class="s1-item-opacity"></div>
                    <div class="s1-item">
                        <div class="s1-item-content">
                            <h1>Modern</h1>
                        </div>
                    </div>
                </a>
                <a href="/portfolio">
                    <div class="s1-item-opacity"></div>
                    <div class="s1-item">
                        <div class="s1-item-content">
                            <h1>Loft</h1>
                        </div>
                    </div>
                </a>
                <a href="/portfolio">
                    <div class="s1-item-opacity"></div>
                    <div class="s1-item">
                        <div class="s1-item-content">
                            <h1>Minimalizm</h1>
                        </div>
                    </div>
                </a>
                <a href="/portfolio">
                    <div class="s1-item-opacity"></div>
                    <div class="s1-item">
                        <div class="s1-item-content">
                            <h1>Klassika</h1>
                        </div>
                    </div>
                </a>
                <a href="/portfolio">
                    <div class="s1-item-opacity"></div>
                    <div class="s1-item">
                        <div class="s1-item-content">
                            <h1>Neo</h1>
                        </div>
                    </div>
                </a>
                <a href="/portfolio">
                    <div class="s1-item-opacity"></div>
                    <div class="s1-item">
                        <div class="s1-item-content">
                            <h1>
                                Exterior - Interior
                                <br>
                                design
                            </h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="s2">
        <div class="container">
            <div class="s2-box">
                <a href="<?php bloginfo('template_url') ?>/AkbarOffStroy.pdf" download>
                    Narxlar bilan tanishish
                </a>
            </div>
        </div>
    </section>
    <?php get_footer() ?>
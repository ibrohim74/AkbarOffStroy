<?php
/*
Template Name: portfolio
*/
?>
<?php
get_header() ?>
<section class="portfolio-box-index">
    <div class="container">
        <div class="portfolio-box">
            <?php
            $my_posts = get_posts(
                array(
                    'numberposts' => -1,
                    'category_name' => 'akbaroff',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true,
                    // подавление работы фильтров изменения SQL запроса
                )
            );

            foreach ($my_posts as $post) {
                setup_postdata($post);
                if (in_category('akbaroff')) {
                    ?>
            <a href="<?php echo get_permalink() ?>" class="portfolio-link">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="<?php the_field('firstimg'); ?>" alt="">
                    </div>
                    <div class="portfolio-content">
                        <h1><?php the_field('title'); ?></h1>
                        <p><?php the_field('subtitle'); ?></p>
                    </div>
                </div>
            </a>

            <?php
                }
            }

            wp_reset_postdata(); // сброс
            ?>
        </div>
    </div>
</section>
<?php get_footer() ?>
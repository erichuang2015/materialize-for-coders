<?php get_header() ?>
<main id="site-main">
    <div id="site-title" class="grey lighten-3">
        <div class="container">
            <h4 class="page-title light-blue-text">Blog</h4>
        </div>
        <!-- END div.container -->
    </div>
    <!-- END div#site-title -->
    <div class="row">
        <div class="col s12">
            <div class="container" id="site-content">
                <?php
                    //Displays page content
                    if (have_posts()) :
                    	while (have_posts()) : the_post(); ?>
                        <div id="card-wrapper" class="col s12">
                            <div class="card horizontal">
                                <!-- END div.card-image -->
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <span class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
                                        <span class="card-subtitle grey-text lighten-text-2">Written by <?php the_author(); ?> on <?php echo get_the_date(); ?> at <?php the_time(); ?></span>
                                        <br><br>
                                        <article><?php the_excerpt(); ?></article>
                                    </div>
                                    <!-- END div.card-content -->
                                    <div class="card-action">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Continue Reading</a>
                                    </div>
                                    <!-- END div.card-action -->
                                </div>
                                <!-- END div.card-stacked -->
                            </div>
                            <!-- END div.card horizontal -->
                        </div>
                        <!-- END div.col s12 m6#card-wrapper -->
                    	<?php endwhile;
                    endif;
                ?>
            </div>
            <!-- END div.container#site-content -->
        </div>
        <!-- END div.col s12 -->
    </div>
    <!-- END div.row -->
</main>
<!-- END main#site-main -->

<?php get_footer() ?>

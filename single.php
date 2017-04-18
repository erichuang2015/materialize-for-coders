<?php get_header() ?>
<main class="animated fadeIn" id="site-main">
    <div class="page-title grey lighten-3">
        <div class="container">
            <a class="light-blue-text" href="#" title="Return to Blog" onclick="window.history.go(-1); return false;"><i class="tiny material-icons">arrow_back</i></a>
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

                            <h4 class="light-blue-text"><?php the_title(); ?></h4>

                            <span class="grey-text lighten-text-2">Written by <?php the_author(); ?> on <?php echo get_the_date(); ?> at <?php the_time(); ?></span>

                            <?php the_content(); ?>

                            <span class="grey-text lighten-text-2">Last Modified on <?php the_modified_date(); ?> at <?php the_modified_time(); ?></span>
                    	<?php endwhile;
                    endif;
                ?>
            </div>
            <!-- END div.container#site-content -->
        </div>
        <!-- END div.col s12 -->
    </div>
    <!-- END div.row -->
    <div class="row">
        <div class="col s12">
            <div class="container">
                <?php comments_template(); ?>
            </div>
            <!-- END div.container -->
        </div>
        <!-- END div.col s12 -->
    </div>
    <!-- END div.row -->
</main>
<!-- END main#site-main -->

<?php get_footer() ?>

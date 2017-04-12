<?php get_header() ?>
<main id="site-main">
    <div id="site-title" class="grey lighten-3">
        <div class="container">
            <h2 class="page-title"><?php the_title(); ?></h2>
        </div>
        <!-- END div.container -->
    </div>
    <!-- END div#site-title -->
    <div class="row">
        <div class="col s12">
            <div class="container" id="site-content">
                <?php if (have_posts()) : ?>

                	<?php while (have_posts()) : the_post(); ?>

                		<?php // Post Content

                            the_content();

                        ?>

                	<?php endwhile; ?>

                		<?php // Navigation ?>

                	<?php else : ?>
                		<?php // No Posts Found ?>
                <?php endif; ?>
            </div>
            <!-- END div.container#site-content -->
        </div>
        <!-- END div.col s12 -->
    </div>
    <!-- END div.row -->
</main>
<!-- END main#site-main -->

<?php get_footer() ?>

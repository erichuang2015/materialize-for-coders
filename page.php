<?php get_header() ?>
<main class="animated fadeIn" id="site-main">
    <div id="site-title" class="grey lighten-3">
        <div class="container">
            <h4 class="page-title light-blue-text"><?php the_title(); ?></h4>
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
                    	while (have_posts()) : the_post();
                                the_content();
                    	endwhile;
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

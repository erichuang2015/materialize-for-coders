<?php
/*
Template Name: Page (No Title)
*/
?>

<?php get_header() ?>
<main class="animated fadeIn" id="site-main">
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

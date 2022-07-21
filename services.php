<?php
/*
Template Name: services
*/
        get_header(); ?>

        <header class="header--imgs page-header alignwide">
            <h1 class="services--page-title"><?php single_post_title(); ?>.</h1>
            <div class='wrapper'>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Service_1.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Service_2.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Service_3_ACTIVE.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Service_4.png">

            </div>
        </header>
        <main>
            <section class="section--text">
                <h2 class="section--text--title">Corp Parties</h2>
                <p class="section--text--paragraph"> 
                Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. 
                </p>
            </section>
            <section class="section--banneer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Service.png">
            </section>
        </main>

<?php    

 get_footer() ; ?>

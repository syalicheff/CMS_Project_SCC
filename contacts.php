<?php
/*
Template Name: contact
*/
get_header(); ?>

        <header class="page-header alignwide">
            <h1 class="page-title"><?php single_post_title(); ?>.</h1>
            <p class="text-contact">A desire for a big big party or a very select congress? Contact us.</p>
        </header>
        <div class='image'>
        <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
        ?>    
        </div>
        <div class='form'>
            <h2 class="page2-title">Write us here</h2>
            <p class="text-contact">Go! Don’t be shy.</p>
            <form action="#" method="POST" class="comment-form">
            <?php wp_nonce_field('contacter', 'contacter'); ?>
            <p>
                
                <input id="subject" type="text" name="subject" placeholder="subject"/>
            </p>
            <p>
                
                <input id="email" type="email" name="email" placeholder="email"/>
            </p>
            <p>
                
                <input id="phone" type="number" name="phone" placeholder="Phone no."/>
            </p>
            <p>
                <textarea id="message" name="message"
                        rows="5" cols="33" placeholder="message">
                </textarea>
            </p>
            <p>
                <input id="submit" type="submit" name="submit"  id="submit" class="submit" value="Submit" />
            </p>
            </form>
        </div>

<?php    

 get_footer() ; ?>

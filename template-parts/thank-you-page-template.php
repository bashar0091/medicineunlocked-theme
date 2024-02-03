<?php 

/* Template Name: Thank You */ 

get_header();

?>

<section class="py-20">
    <div class="container mx-auto px-5">

        <div class="pb-4 text-center">
            <h2 class="heading_main">Thank You For Your Subscription</h2>
            <h3 class="heading_main">Please Login and Create your First Post</h3>

            <a href="<?= home_url('/login')?>" class="custom_btn mx-auto mt-5">Login</a>
        </div>


    </div>
</section>

<?php
get_footer();
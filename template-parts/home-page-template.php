<?php 

if( isset($_GET['search_btn']) ) {

    $search_val = $_GET['search_val'];

    wp_redirect(home_url('/author-result/?keyword='.$search_val));
    exit;

}

/* Template Name: Home */ 

get_header();

?>

<section class="video_bg relative overflow-hidden">

    <video class="video_bg_src" poster="<?= get_stylesheet_directory_uri() . '/assets/img/video-cover.jpg'?>" autoplayd muted loop src="https://player.vimeo.com/external/338064905.sd.mp4?s=468058f956610f28d7d8cab7fbc5890b004a9481&profile_id=164&oauth2_token_id=57447761"></video>
    <div class="video_bg_overlay"></div>
    
    <div class="custom_container relative h-full">
        <div class="grid_wrapper_1 justify-between items-center h-full gap-20">
            <div class="w-full">
                <h1 class="title_1">Enter Medicine Medtrics Explore health innovations with us today</h1>
                <p class="text_1 pt-5 pb-10">Medicine Unlocked is your gateway to a treasure trove of medical insights, information, and knowledge.</p>
                <form action="" method="get" class="search_form">
                    <input type="text" name="search_val" placeholder="Search Authors">
                    <button type="submit" name="search_btn">Search Now</button>
                </form>
            </div>

            <div class="swiper banner_post_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 4,
                                'order' => 'ASC'
                            );
                            
                            $query = new WP_Query($args);
                            
                            if ($query->have_posts()) {

                                $post_count = 0;

                                while ($query->have_posts()) {
                                    $query->the_post();

                                    // Exclude the first and second posts
                                    if ($post_count < 1) {
                                        $post_count++;
                                        continue;
                                    }

                                    $categories = get_the_category();

                                    ?>
                                    <div class="flex items-center banner_article gap-4">
                                        <div class="banner_article_image">
                                            <?php 
                                                $feature_image = get_the_post_thumbnail_url();
                                                $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                                if( !empty($ai_generated_featured_image) ) {
                                                    echo '<img src="'.$ai_generated_featured_image.'" alt="image" />';
                                                } elseif( !empty($feature_image) ) {
                                                    echo '<img src="'.$feature_image.'" alt="image" />';
                                                }
                                                
                                            ?>
                                        </div>

                                        <div class="flex-1">
                                            <div class="flex items-center gap-2">
                                                <span class="author_text1">By </span>
                                                <span class="author_text2">
                                                    <?php 
                                                        $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                                        $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                                        $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                                        echo $author_first_name . " " . $author_last_name;                                                    
                                                    ?>
                                                </span>
                                                <span class="author_text3"> <?= get_the_date();?></span>
                                                
                                            </div>

                                            <div class="my-1">
                                                <h3 class="title_2">
                                                    <?php
                                                        $title_words = explode(' ', get_the_title());
                                                        $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                        echo count($title_words) > 10  ? $trimmed_title . '...' : $trimmed_title;
                                                    ?>    
                                                </h3>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="cat_1"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
                                                    <span class="cat_1"><?= !empty($categories[1]->name) ? $categories[1]->name : '';?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                        ?>
                    </div>

                    <div class="swiper-slide">
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 4,
                                'orderby'  => 'rand',
                            );
                            
                            $query = new WP_Query($args);
                            
                            if ($query->have_posts()) {

                                $post_count = 0;

                                while ($query->have_posts()) {
                                    $query->the_post();

                                    // Exclude the first and second posts
                                    if ($post_count < 1) {
                                        $post_count++;
                                        continue;
                                    }

                                    $categories = get_the_category();

                                    ?>
                                    <div class="flex items-center banner_article gap-4">
                                        <div class="banner_article_image">
                                            <?php 
                                                $feature_image = get_the_post_thumbnail_url();
                                                $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                                if( !empty($ai_generated_featured_image) ) {
                                                    echo '<img src="'.$ai_generated_featured_image.'" alt="image" />';
                                                } else if( !empty($feature_image) ) {
                                                    echo '<img src="'.$feature_image.'" alt="image" />';
                                                } else {
                                                    echo '<img src="https://via.placeholder.com/120/fff/000?text=No%20Featured%20Image" alt="image" />';
                                                }
                                                
                                            ?>
                                        </div>

                                        <div class="flex-1">
                                            <div class="flex items-center gap-2">
                                                <span class="author_text1">By </span>
                                                <span class="author_text2">
                                                    <?php 
                                                        $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                                        $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                                        $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                                        echo $author_first_name . " " . $author_last_name;                                                    
                                                    ?>
                                                </span>
                                                <span class="author_text3"> <?= get_the_date();?></span>
                                                
                                            </div>

                                            <div class="my-1">
                                                <h3 class="title_2">
                                                    <?php
                                                        $title_words = explode(' ', get_the_title());
                                                        $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                        echo count($title_words) > 10  ? $trimmed_title . '...' : $trimmed_title;
                                                    ?>    
                                                </h3>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="cat_1"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
                                                    <span class="cat_1"><?= !empty($categories[1]->name) ? $categories[1]->name : '';?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                        ?>
                    </div>

                    <div class="swiper-slide">
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 4,
                                'orderby'  => 'title',
                            );
                            
                            $query = new WP_Query($args);
                            
                            if ($query->have_posts()) {

                                $post_count = 0;

                                while ($query->have_posts()) {
                                    $query->the_post();

                                    // Exclude the first and second posts
                                    if ($post_count < 1) {
                                        $post_count++;
                                        continue;
                                    }

                                    $categories = get_the_category();

                                    ?>
                                    <div class="flex items-center banner_article gap-4">
                                        <div class="banner_article_image">
                                            <?php 
                                                $feature_image = get_the_post_thumbnail_url();
                                                $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                                if( !empty($ai_generated_featured_image) ) {
                                                    echo '<img src="'.$ai_generated_featured_image.'" alt="image" />';
                                                } else if( !empty($feature_image) ) {
                                                    echo '<img src="'.$feature_image.'" alt="image" />';
                                                } else {
                                                    echo '<img src="https://via.placeholder.com/120/fff/000?text=No%20Featured%20Image" alt="image" />';
                                                }
                                                
                                            ?>
                                        </div>

                                        <div class="flex-1">
                                            <div class="flex items-center gap-2">
                                                <span class="author_text1">By </span>
                                                <span class="author_text2">
                                                    <?php 
                                                        $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                                        $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                                        $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                                        echo $author_first_name . " " . $author_last_name;                                                    
                                                    ?>
                                                </span>
                                                <span class="author_text3"> <?= get_the_date();?></span>
                                                
                                            </div>

                                            <div class="my-1">
                                                <h3 class="title_2">
                                                    <?php
                                                        $title_words = explode(' ', get_the_title());
                                                        $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                        echo count($title_words) > 10  ? $trimmed_title . '...' : $trimmed_title;
                                                    ?>    
                                                </h3>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="cat_1"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
                                                    <span class="cat_1"><?= !empty($categories[1]->name) ? $categories[1]->name : '';?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                        ?>
                    </div>
                </div>
                <div class="swiper-pagination pagination_type1"></div>
            </div>
        </div>
    </div>

</section>

<section class="bg_color1 py-20">
    <div class="custom_container">

        <div class="pb-8 flex justify-between">
            <h2 class="heading_main">Trending On Medtrics</h2>
            <a href="#!" class="btn_2">View All</a>
        </div>

        <div class="grid_wrapper_1 grid_wrapper_2 justify-between gap-8">
			<div>
                <div class="grid grid-cols-2 gap-8">
                    <?php 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'post-filter-tag',
                                    'field' => 'slug',
                                    'terms' => 'most-trending',
                                ),
                            ),
                        );
                        
                        $query = new WP_Query($args);
                        
                        if ($query->have_posts()) {
                            $i = 0;
                            while ($query->have_posts()) {
                                $i++;
                                $query->the_post();

                                $categories = get_the_category();

                                ?>
                                <div class="mb-3 article_card">
                                    <div class="relative">
                                        <span class="count_1"><?php echo $i;?></span>
                                        <?php 
                                            $feature_image = get_the_post_thumbnail_url();
                                            $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                            if( !empty($ai_generated_featured_image) ) {
                                                echo '<img class="featured_img_1" src="'.$ai_generated_featured_image.'" alt="image" />';
                                            } elseif( !empty($feature_image) ) {
                                                echo '<img class="featured_img_1" src="'.$feature_image.'" alt="image" />';
                                            }
                                            
                                        ?>
                                    </div>

                                    <div class="flex-1 px-4">
                                        
                                        <div class="cat_wrap_1">
                                            <span class="cat_1 cat_2"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
                                        </div>
                                            

                                        <div class="py-4">
                                            <h3 class="title_2 title_3">
                                                <?php
                                                    $title_words = explode(' ', get_the_title());
                                                    $trimmed_title = implode(' ', array_slice($title_words, 0, 7));
                                                    echo count($title_words) > 7 ? $trimmed_title . '...' : $trimmed_title;
                                                ?>    
                                            </h3>
                                        </div>

                                        <div class="flex items-center gap-2 pb-4">
                                            <span class="author_text1 author_text1_1">By </span>
                                            <span class="author_text2 author_text2_1">
                                                <?php 
                                                    $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                                    $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                                    $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                                    echo $author_first_name . " " . $author_last_name;                                                    
                                                ?>
                                            </span>
                                            <span class="author_text3 author_text3_1"> <?= get_the_date();?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>

                <hr class="border_1">

                <div class="grid grid-cols-2 gap-8">
                    <?php 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'order' => 'ASC'
                        );
                        
                        $query = new WP_Query($args);
                        
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $i++;
                                $query->the_post();

                                $categories = get_the_category();

                                ?>
                                <div class="article_card article_card_2 p-2">
                                    <div class="relative featured_img_2">
                                        <span class="count_1 count_2"><?php echo $i;?></span>
                                        <?php 
                                            $feature_image = get_the_post_thumbnail_url();
                                            $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                            if( !empty($ai_generated_featured_image) ) {
                                                echo '<img class="featured_img_1 featured_img_2" src="'.$ai_generated_featured_image.'" alt="image" />';
                                            } elseif( !empty($feature_image) ) {
                                                echo '<img class="featured_img_1 featured_img_2" src="'.$feature_image.'" alt="image" />';
                                            }
                                            
                                        ?>
                                    </div>

                                    <div class="flex-1">

                                        <div class="pb-2">
                                            <h3 class="title_2 title_3">
                                                <?php
                                                    $title_words = explode(' ', get_the_title());
                                                    $trimmed_title = implode(' ', array_slice($title_words, 0, 7));
                                                    echo count($title_words) > 7 ? $trimmed_title . '...' : $trimmed_title;
                                                ?>    
                                            </h3>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            <span class="author_text1 author_text1_1">By </span>
                                            <span class="author_text2 author_text2_1">
                                                <?php 
                                                    $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                                    $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                                    $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                                    echo $author_first_name . " " . $author_last_name;                                                    
                                                ?>
                                            </span>
                                            <span class="author_text3 author_text3_1"> <?= get_the_date();?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>
            </div>
			
			<div class="flex-1">

                <div class="top_profile_box">

                        <div class="top_profile_header flex items-center justify-between">
                            <h3 class="title_4">Top User Profile</h3>
                            <a class="link_1" href="#!">View All</a>
                        </div>

                        <div>
                            <?php
                                $user_query = new WP_User_Query(array(
                                    'orderby' => 'ID', // Order users by user ID
                                    'order' => 'ASC',   // Order in ascending order
                                ));
                                $users = $user_query->get_results();
                                $i = 0;
                                foreach ($users as $user) {
                                    $i++;
                                    $user_profile_image = get_user_meta($user->ID, 'user_profile_image', true);

                                    if($i == 9 ) {
                                        break;
                                    }
                            ?>
                                <div class="profile_item flex items-center gap-4">
                                    <span class="rank_1">#<?= $i;?></span>
                                    <img class="roundImg1" src="<?= !empty($user_profile_image) ? esc_url(wp_get_attachment_url($user_profile_image)) : 'https://via.placeholder.com/120/FD7E35/fff?text=User';?>" alt="user">
                                    <h4 class="title_5"><?= esc_html($user->first_name . ' ' . $user->last_name);?></h4>
                                </div>
                            <?php
                                }
                            ?>
                        </div>

                </div>

                <div class="mt-5 p-4 top_profile_box">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                    ?>
                    <img src="https://images.ctfassets.net/nrgyaltdicpt/6gsvc5Ogjmu04I4Miu0uGg/cb1d4391717d2ab8d5e42ede6fb0eef1/overleaf_wide_colour_light_bg.png" class="image_1" alt="logo">
                    <p class="my-4">Step into the world of Medicine Unlocked—an open gateway to a treasure trove of profound medical insights, comprehensive information, and vast knowledge, providing a valuable resource for enthusiasts and professionals alike</p>
                    <ul class="social">
                        <li><a href="#!"><svg width="18px" height="18px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>twitter [#154]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#1d2939"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]"> </path> </g> </g> </g> </g></svg></a></li>
                        <li><a href="#!"><svg width="18px" height="18px" viewBox="-5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>facebook [#176]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)" fill="rgba(29, 41, 57, 1)"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z" id="facebook-[#176]"> </path> </g> </g> </g> </g></svg></a></li>
                        <li><a href="#!"><svg width="18px" height="18px" fill="#1d2939" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#1d2939"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>linkedin</title> <path d="M28.778 1.004h-25.56c-0.008-0-0.017-0-0.027-0-1.199 0-2.172 0.964-2.186 2.159v25.672c0.014 1.196 0.987 2.161 2.186 2.161 0.010 0 0.019-0 0.029-0h25.555c0.008 0 0.018 0 0.028 0 1.2 0 2.175-0.963 2.194-2.159l0-0.002v-25.67c-0.019-1.197-0.994-2.161-2.195-2.161-0.010 0-0.019 0-0.029 0h0.001zM9.9 26.562h-4.454v-14.311h4.454zM7.674 10.293c-1.425 0-2.579-1.155-2.579-2.579s1.155-2.579 2.579-2.579c1.424 0 2.579 1.154 2.579 2.578v0c0 0.001 0 0.002 0 0.004 0 1.423-1.154 2.577-2.577 2.577-0.001 0-0.002 0-0.003 0h0zM26.556 26.562h-4.441v-6.959c0-1.66-0.034-3.795-2.314-3.795-2.316 0-2.669 1.806-2.669 3.673v7.082h-4.441v-14.311h4.266v1.951h0.058c0.828-1.395 2.326-2.315 4.039-2.315 0.061 0 0.121 0.001 0.181 0.003l-0.009-0c4.5 0 5.332 2.962 5.332 6.817v7.855z"></path> </g></svg></a></li>
                        <li><a href="#!"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#1d2939"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#1d2939"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#1d2939"></path> </g></svg></a></li>
                    </ul>
                </div>

			</div>
		</div>
    </div>
</section>

<section class="py-20">
    <div class="custom_container">

        <div class="text-center">
            <h2 class="heading_main heading_main_2">Explore By Categories</h2>
        </div>

        <div class="category_main_wrap">
            <?php 
                $categories = get_categories();
                $i = 0;
                // Loop through each category
                foreach ($categories as $category) {
                    $i++;
                    if($i == 6) {
                        break;
                    }
                    ?>
                        <div class="cateory_wrap">
                            <div>
                                <?php
                                    $id_for_acf = 'category_'.$category->cat_ID;
                                    $category_image = get_field('category_image', $id_for_acf);
                                    if(!empty($category_image)) {
                                        echo '<img class="image_2" src="'.$category_image.'" alt="image" />';
                                    }
                                ?> 
                            </div>
                            
                            <div>
                                <h3 class="text-base font-bold text-black py-3"><?= $category->name;?></h3>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>

        <div class="category_main_wrap mt-3">
            <?php 
                $i = 0; // Reset $i before the second loop
                // Loop through each category
                foreach ($categories as $category) {
                    $i++;
                    if ($i > 5 && $i <= 10) {
                        ?>
                            <div class="cateory_wrap">
                                <div>
                                    <?php
                                        $id_for_acf = 'category_'.$category->cat_ID;
                                        $category_image = get_field('category_image', $id_for_acf);
                                        if(!empty($category_image)) {
                                            echo '<img class="image_2" src="'.$category_image.'" alt="image" />';
                                        }
                                    ?> 
                                </div>
                                
                                <div>
                                    <h3 class="text-base font-bold text-black py-3"><?= $category->name;?></h3>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>

        <div class="text-center mt-10">
            <a href="#!" class="btn_2 btn_3">Show more</a>
        </div>

    </div>
</section>

<section class="bg_color1 py-20">
    <div class="custom_container">

        <div class="pb-8 flex justify-between">
            <h2 class="heading_main">Latest Articles</h2>
            <a href="#!" class="btn_2">View All</a>
        </div>

        <div class="grid grid-cols-2 justify-between gap-8">
            <div class="">
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post-filter-tag',
                                'field' => 'slug',
                                'terms' => 'most-read',
                            ),
                        ),
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $i++;
                            $query->the_post();

                            $categories = get_the_category();

                            ?>
                            <div class="article_card article_card_2 article_card_3 p-2">
                                <div class="relative featured_img_2 featured_img_4">
                                    <div class="video_bg_overlay"></div>

                                    <div class="flex items-center gap-3 float_author">
                                        <div>
                                            <?php 
                                                $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                                $user_profile_image = get_the_author_meta( 'user_profile_image', $post_author_id );
                                                if(!empty($user_profile_image)) {
                                                    echo '<img class="image_3" src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
                                                } else {
                                                    echo '<img class="image_3" src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
                                                }                                                 
                                            ?>
                                        </div>
                                        
                                        <div>
                                            <p class="author_text2 author_text2_1 text-white">
                                                <?php 
                                                    $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                                    $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                                    echo $author_first_name . " " . $author_last_name;                                                    
                                                ?>
                                            </p>
                                            <p class="author_text3 author_text3_1 text-white"> <?= get_the_date();?></p>
                                        </div>
                                    </div>

                                    <?php 
                                        $feature_image = get_the_post_thumbnail_url();
                                        $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                        if( !empty($ai_generated_featured_image) ) {
                                            echo '<img class="featured_img_1 featured_img_2 featured_img_4" src="'.$ai_generated_featured_image.'" alt="image" />';
                                        } elseif( !empty($feature_image) ) {
                                            echo '<img class="featured_img_1 featured_img_2 featured_img_4" src="'.$feature_image.'" alt="image" />';
                                        }
                                        
                                    ?>
                                </div>

                                <div class="flex-1">

                                    <div class="pb-4 pt-2">
                                        <span class="cat_1 cat_2 cat_3"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
                                        <span class="cat_1 cat_2 cat_3"><?= !empty($categories[1]->name) ? $categories[1]->name : '';?></span>
                                    </div>

                                    <div>
                                        <h3 class="title_2 title_3 title_6">
                                            <?php
                                                $title_words = explode(' ', get_the_title());
                                                $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                echo count($title_words) > 10 ? $trimmed_title . '...' : $trimmed_title;
                                            ?>    
                                        </h3>
                                        <p class="py-4 text_2">
                                            <?php
                                                $content_words = explode(' ', get_the_excerpt());
                                                $trimmed_content = implode(' ', array_slice($content_words, 0, 20));
                                                echo count($content_words) > 20 ? $trimmed_content . '...' : $trimmed_content;
                                            ?> 
                                        </p>
                                    </div>

                                    <div class="flex items-center justify-between gap-2 link_2 pt-4 pb-6">
                                        <a href="#!">Read More</a>
                                        <a href="#!" class="border-none flex gap-2 items-center"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#8891a8" stroke-width="0.9120000000000001" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#8891a8" stroke-width="0.9120000000000001" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> 256</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>

            <div class="grid grid-cols-2 gap-5">
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'order' => 'ASC'
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $i++;
                            $query->the_post();

                            $categories = get_the_category();

                            ?>
                            <div class="article_card article_card_2 article_card_3 p-2">
                                <div class="relative featured_img_2 featured_img_3">
                                    <?php 
                                        $feature_image = get_the_post_thumbnail_url();
                                        $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                        if( !empty($ai_generated_featured_image) ) {
                                            echo '<img class="featured_img_1 featured_img_2 featured_img_3" src="'.$ai_generated_featured_image.'" alt="image" />';
                                        } elseif( !empty($feature_image) ) {
                                            echo '<img class="featured_img_1 featured_img_2 featured_img_3" src="'.$feature_image.'" alt="image" />';
                                        }
                                        
                                    ?>
                                </div>

                                <div class="flex-1">

                                    <div class="pb-1">
                                        <span class="cat_1 cat_2 cat_3"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
                                    </div>

                                    <div class="pb-2">
                                        <h3 class="title_2 title_3">
                                            <?php
                                                $title_words = explode(' ', get_the_title());
                                                $trimmed_title = implode(' ', array_slice($title_words, 0, 5));
                                                echo count($title_words) > 5 ? $trimmed_title . '...' : $trimmed_title;
                                            ?>    
                                        </h3>
                                    </div>

                                    <div class="flex items-center gap-2 pb-2">
                                        <span class="author_text1 author_text1_1">By </span>
                                        <span class="author_text2 author_text2_1">
                                            <?php 
                                                $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                                $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                                $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                                echo $author_first_name . " " . $author_last_name;                                                    
                                            ?>
                                        </span>
                                        <span class="author_text3 author_text3_1"> <?= get_the_date();?></span>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>
		</div>
    </div>
</section>

<section class="py-20">
    <div class="custom_container">
    
        <div class="relative cta_bg" style="background-image:url(<?= get_stylesheet_directory_uri() . '/assets/img/video-cover.jpg'?>)">
            <div class="video_bg_overlay"></div>
            <div class="relative grid grid_1_5 items-center">
                <div>
                    <h2 class="heading_main_3">Customize Your Author Profile Contribute Articles. Earn Badges.</h2>
                    <p class="text-white my-5">Join us in making a difference! Subscribe today and actively contribute to our cause, fostering positive change and creating a better tomorrow.</p>
                    <a href="<?= home_url('/subscription');?>" class="btn_4">Subscribe Now</a>
                </div>
                <div>
                    <a href="#!" class="video_play"><svg width="32px" height="32px" viewBox="-3 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>play</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-419.000000, -571.000000)" fill="#ffffff"> <path d="M440.415,583.554 L421.418,571.311 C420.291,570.704 419,570.767 419,572.946 L419,597.054 C419,599.046 420.385,599.36 421.418,598.689 L440.415,586.446 C441.197,585.647 441.197,584.353 440.415,583.554" id="play" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg></a>
                </div>
            </div>
        </div>
    
    </div>
</section>

<section class="pb-20">
    <div class="custom_container">

        <div class="pb-8 flex justify-between">
            <h2 class="heading_main">Important Global News and Updates</h2>
        </div>

        <div class="grid grid-cols-3 gap-5">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'order' => 'ASC'
                );
                
                $query = new WP_Query($args);
                
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $i++;
                        $query->the_post();

                        $categories = get_the_category();

                        ?>
                        <div class="article_card article_card_2 article_card_3 article_card_4 p-2">
                            <div class="relative featured_img_2 featured_img_3 featured_img_5">
                                <?php 
                                    $feature_image = get_the_post_thumbnail_url();
                                    $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                    if( !empty($ai_generated_featured_image) ) {
                                        echo '<img class="featured_img_1 featured_img_2 featured_img_3 featured_img_5" src="'.$ai_generated_featured_image.'" alt="image" />';
                                    } elseif( !empty($feature_image) ) {
                                        echo '<img class="featured_img_1 featured_img_2 featured_img_3 featured_img_5" src="'.$feature_image.'" alt="image" />';
                                    }
                                    
                                ?>
                            </div>

                            <div class="flex-1">

                                <div class="pb-1">
                                    <span class="cat_1 cat_2 cat_3"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
                                    <span class="cat_1 cat_2 cat_3"><?= !empty($categories[1]->name) ? $categories[1]->name : '';?></span>
                                </div>

                                <div class="pb-2">
                                    <h3 class="title_2 title_3">
                                        <?php
                                            $title_words = explode(' ', get_the_title());
                                            $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                            echo count($title_words) > 10 ? $trimmed_title . '...' : $trimmed_title;
                                        ?>    
                                    </h3>
                                </div>

                                <div class="flex items-center gap-2 pb-2">
                                    <span class="author_text1 author_text1_1">By </span>
                                    <span class="author_text2 author_text2_1">
                                        <?php 
                                            $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                            $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                            $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                            echo $author_first_name . " " . $author_last_name;                                                    
                                        ?>
                                    </span>
                                    <span class="author_text3 author_text3_1"> <?= get_the_date();?></span>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                }
            ?>
        </div>

        <hr class="border_1 border_2">

        <div class="grid grid-cols-3 gap-5">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'order' => 'ASC'
                );
                
                $query = new WP_Query($args);
                
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $i++;
                        $query->the_post();

                        $categories = get_the_category();

                        ?>
                        <div class="article_card article_card_2">
                            <div class="relative featured_img_2">
                                <?php 
                                    $feature_image = get_the_post_thumbnail_url();
                                    $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                    if( !empty($ai_generated_featured_image) ) {
                                        echo '<img class="featured_img_1 featured_img_2" src="'.$ai_generated_featured_image.'" alt="image" />';
                                    } elseif( !empty($feature_image) ) {
                                        echo '<img class="featured_img_1 featured_img_2" src="'.$feature_image.'" alt="image" />';
                                    }
                                    
                                ?>
                            </div>

                            <div class="flex-1">

                                <div class="pb-1">
                                    <span class="cat_1 cat_2 cat_3 cat_4"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
                                </div>

                                <div class="pb-2">
                                    <h3 class="title_2 title_3">
                                        <?php
                                            $title_words = explode(' ', get_the_title());
                                            $trimmed_title = implode(' ', array_slice($title_words, 0, 5));
                                            echo count($title_words) > 5 ? $trimmed_title . '...' : $trimmed_title;
                                        ?>    
                                    </h3>
                                </div>

                                <div class="flex items-center gap-2 pb-2">
                                    <span class="author_text1 author_text1_1">By </span>
                                    <span class="author_text2 author_text2_1">
                                        <?php 
                                            $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                            $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                            $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                            echo $author_first_name . " " . $author_last_name;                                                    
                                        ?>
                                    </span>
                                    <span class="author_text3 author_text3_1"> <?= get_the_date();?></span>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                }
            ?>
        </div>
    </div>
</section>

<section class="pb-20">
    <div class="custom_container">
    
        <div class="slide_info">
            <div class="text-center head_wrap">
                <h2 class="heading_main_4">Let AI Craft Images for Your Blog by Instant Visuals technology</h2>
            </div>

            <div class="swiper banner_post_slider py-20">
                <div class="swiper-wrapper">
                    <div class="swiper-slide grid grid-cols-2 items-center gap-20">
                        <div>
                            <div class="flex mb-10 gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        Content Personalization 
                                    </h3>
                                    <p>AI algorithms personalize medical blog content based on user behavior, suggesting related articles aligned with preferences.</p>
                                </div>
                            </div>

                            <div class="flex mb-10 gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        Health Content Curation
                                    </h3>
                                    <p>AI-driven tools curate accurate, up-to-date medical content by extensive literature and research, ensuring credibility in the blog.</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        User Engagement Optimization
                                    </h3>
                                    <p>AI optimizes medical blog layout, design, and presentation using user engagement metrics, enhancing the overall experience and continued interaction.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <img class="image_4" src="<?= get_stylesheet_directory_uri() . '/assets/img/video-cover.jpg'?>" alt="slider">
                        </div>
                    </div>

                    <div class="swiper-slide grid grid-cols-2 items-center gap-20">
                        <div>
                            <div class="flex mb-10 gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        Content Personalization 
                                    </h3>
                                    <p>AI algorithms personalize medical blog content based on user behavior, suggesting related articles aligned with preferences.</p>
                                </div>
                            </div>

                            <div class="flex mb-10 gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        Health Content Curation
                                    </h3>
                                    <p>AI-driven tools curate accurate, up-to-date medical content by extensive literature and research, ensuring credibility in the blog.</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        User Engagement Optimization
                                    </h3>
                                    <p>AI optimizes medical blog layout, design, and presentation using user engagement metrics, enhancing the overall experience and continued interaction.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <img class="image_4" src="<?= get_stylesheet_directory_uri() . '/assets/img/video-cover.jpg'?>" alt="slider">
                        </div>
                    </div>

                    <div class="swiper-slide grid grid-cols-2 items-center gap-20">
                        <div>
                            <div class="flex mb-10 gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        Content Personalization 
                                    </h3>
                                    <p>AI algorithms personalize medical blog content based on user behavior, suggesting related articles aligned with preferences.</p>
                                </div>
                            </div>

                            <div class="flex mb-10 gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        Health Content Curation
                                    </h3>
                                    <p>AI-driven tools curate accurate, up-to-date medical content by extensive literature and research, ensuring credibility in the blog.</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="icon_1">
                                    <svg width="28px" height="28px" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>image-picture</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -99.000000)" fill="#00167c"> <path d="M368,109 C366.896,109 366,108.104 366,107 C366,105.896 366.896,105 368,105 C369.104,105 370,105.896 370,107 C370,108.104 369.104,109 368,109 L368,109 Z M368,103 C365.791,103 364,104.791 364,107 C364,109.209 365.791,111 368,111 C370.209,111 372,109.209 372,107 C372,104.791 370.209,103 368,103 L368,103 Z M390,116.128 L384,110 L374.059,120.111 L370,116 L362,123.337 L362,103 C362,101.896 362.896,101 364,101 L388,101 C389.104,101 390,101.896 390,103 L390,116.128 L390,116.128 Z M390,127 C390,128.104 389.104,129 388,129 L382.832,129 L375.464,121.535 L384,112.999 L390,118.999 L390,127 L390,127 Z M364,129 C362.896,129 362,128.104 362,127 L362,126.061 L369.945,118.945 L380.001,129 L364,129 L364,129 Z M388,99 L364,99 C361.791,99 360,100.791 360,103 L360,127 C360,129.209 361.791,131 364,131 L388,131 C390.209,131 392,129.209 392,127 L392,103 C392,100.791 390.209,99 388,99 L388,99 Z" id="image-picture" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                </div>

                                <div class="flex-1">
                                    <h3 class="title_6 title_6_1 mb-1">
                                        User Engagement Optimization
                                    </h3>
                                    <p>AI optimizes medical blog layout, design, and presentation using user engagement metrics, enhancing the overall experience and continued interaction.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <img class="image_4" src="<?= get_stylesheet_directory_uri() . '/assets/img/video-cover.jpg'?>" alt="slider">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination pagination_type1 pagination_type2"></div>
            </div>
        </div>
    
    </div>
</section>

<section class="pb-20">
    <div class="custom_container">
    
        <div class="relative cta_bg" style="background-image:url(<?= get_stylesheet_directory_uri() . '/assets/img/video-cover.jpg'?>)">
            <div class="video_bg_overlay"></div>
            <div class="relative text-center cta_2">
                <h2 class="heading_main_3">Stay Updated Subscribe to Our Latest News</h2>
                <p class="text-white my-5">Join us in making a difference! Subscribe today and actively contribute to our cause, fostering positive change and creating a better tomorrow.</p>
                <a href="<?= home_url('/subscription');?>" class="btn_4 mx-auto">Subscribe Now</a>
            </div>
        </div>
    
    </div>
</section>

<?php get_footer();?>
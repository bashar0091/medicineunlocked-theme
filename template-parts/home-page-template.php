<?php 

/* Template Name: Home */ 

get_header();

?>

<section class="video_bg relative overflow-hidden">

    <video class="video_bg_src" poster="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Video.png" autoplay muted loop src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/first-banner-video.mp4"></video>
    <div class="video_bg_overlay"></div>
    
    <div class="custom_container relative h-full">
        <div class="grid_wrapper_1 justify-between items-center h-full gap-20 cols_1_tab">
            <div class="w-full">
                <h1 class="title_1 text_center_tab">Enter Medicine Medtrics Explore health innovations with us today</h1>
                <p class="text_1 pt-5 pb-10 text_center_tab">Medicine Unlocked is your gateway to a treasure trove of medical insights, information, and knowledge.</p>
                <form action="<?= home_url('/search-result');?>" method="get" class="search_form">
                    <input type="text" name="search_keyword" placeholder="Search Here">
                    <a href="#!" class="search_btn search_btn_type_click">
                        <span>Articles</span>
                        <svg width="24px" height="24px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 14.5C11.9015 14.5005 11.8038 14.4813 11.7128 14.4435C11.6218 14.4057 11.5392 14.3501 11.47 14.28L8 10.78C7.90861 10.6391 7.86719 10.4715 7.88238 10.3042C7.89756 10.1369 7.96848 9.97954 8.08376 9.85735C8.19904 9.73515 8.352 9.65519 8.51814 9.63029C8.68428 9.6054 8.85396 9.63699 9 9.72003L12 12.72L15 9.72003C15.146 9.63699 15.3157 9.6054 15.4819 9.63029C15.648 9.65519 15.801 9.73515 15.9162 9.85735C16.0315 9.97954 16.1024 10.1369 16.1176 10.3042C16.1328 10.4715 16.0914 10.6391 16 10.78L12.5 14.28C12.3675 14.4144 12.1886 14.4931 12 14.5Z" fill="#00167c"></path> </g></svg>
                    </a>
                    <div class="search_category search_category_input">
                        <label class="active">
                            <input type="radio" checked name="search_type" value="Articles">
                            <span><svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="none" stroke="#00167c" stroke-width="2" d="M16,7 L19,7 L19,11 L16,11 L16,7 Z M9,15 L20,15 M9,11 L13,11 M9,7 L13,7 M6,18.5 C6,19.8807119 4.88071187,21 3.5,21 C2.11928813,21 1,19.8807119 1,18.5 L1,7 L6.02493781,7 M6,18.5 L6,3 L23,3 L23,18.5 C23,19.8807119 21.8807119,21 20.5,21 L3.5,21"></path> </g></svg></span>
                            Articles
                        </label>
                        <label>
                            <input type="radio" name="search_type" value="Authors">
                            <span><svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#00167c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span>
                            Authors
                        </label>
                        <label>
                            <input type="radio" name="search_type" value="Categories">
                            <span><svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M2 6.47762C2 5.1008 2 4.4124 2.22168 3.86821C2.52645 3.12007 3.12007 2.52645 3.86821 2.22168C4.4124 2 5.1008 2 6.47762 2V2C7.85443 2 8.54284 2 9.08702 2.22168C9.83517 2.52645 10.4288 3.12007 10.7336 3.86821C10.9552 4.4124 10.9552 5.1008 10.9552 6.47762V6.47762C10.9552 7.85443 10.9552 8.54284 10.7336 9.08702C10.4288 9.83517 9.83517 10.4288 9.08702 10.7336C8.54284 10.9552 7.85443 10.9552 6.47762 10.9552V10.9552C5.1008 10.9552 4.4124 10.9552 3.86821 10.7336C3.12007 10.4288 2.52645 9.83517 2.22168 9.08702C2 8.54284 2 7.85443 2 6.47762V6.47762Z" fill="#00167c"></path><path d="M2 17.5224C2 16.1456 2 15.4572 2.22168 14.913C2.52645 14.1649 3.12007 13.5712 3.86821 13.2665C4.4124 13.0448 5.1008 13.0448 6.47762 13.0448V13.0448C7.85443 13.0448 8.54284 13.0448 9.08702 13.2665C9.83517 13.5712 10.4288 14.1649 10.7336 14.913C10.9552 15.4572 10.9552 16.1456 10.9552 17.5224V17.5224C10.9552 18.8992 10.9552 19.5876 10.7336 20.1318C10.4288 20.88 9.83517 21.4736 9.08702 21.7783C8.54284 22 7.85443 22 6.47762 22V22C5.1008 22 4.4124 22 3.86821 21.7783C3.12007 21.4736 2.52645 20.88 2.22168 20.1318C2 19.5876 2 18.8992 2 17.5224V17.5224Z" fill="#00167c"></path><path d="M13.0449 17.5224C13.0449 16.1456 13.0449 15.4572 13.2666 14.913C13.5714 14.1649 14.165 13.5712 14.9131 13.2665C15.4573 13.0448 16.1457 13.0448 17.5225 13.0448V13.0448C18.8994 13.0448 19.5878 13.0448 20.1319 13.2665C20.8801 13.5712 21.4737 14.1649 21.7785 14.913C22.0002 15.4572 22.0002 16.1456 22.0002 17.5224V17.5224C22.0002 18.8992 22.0002 19.5876 21.7785 20.1318C21.4737 20.88 20.8801 21.4736 20.1319 21.7783C19.5878 22 18.8994 22 17.5225 22V22C16.1457 22 15.4573 22 14.9131 21.7783C14.165 21.4736 13.5714 20.88 13.2666 20.1318C13.0449 19.5876 13.0449 18.8992 13.0449 17.5224V17.5224Z" fill="#00167c"></path><path clip-rule="evenodd" d="M16.7725 9.47766C16.7725 9.89187 17.1082 10.2277 17.5225 10.2277C17.9367 10.2277 18.2725 9.89187 18.2725 9.47766V7.22766H20.5225C20.9367 7.22766 21.2725 6.89187 21.2725 6.47766C21.2725 6.06345 20.9367 5.72766 20.5225 5.72766H18.2725V3.47766C18.2725 3.06345 17.9367 2.72766 17.5225 2.72766C17.1082 2.72766 16.7725 3.06345 16.7725 3.47766L16.7725 5.72766H14.5225C14.1082 5.72766 13.7725 6.06345 13.7725 6.47766C13.7725 6.89187 14.1082 7.22766 14.5225 7.22766H16.7725L16.7725 9.47766Z" fill="#00167c" fill-rule="evenodd"></path></g></svg></span>
                            Categories
                        </label>
                    </div>
                </form>
            </div>

            <div class="swiper banner_post_slider d_none_tab">
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
                                                    <a href="<?= get_the_permalink();?>">
                                                        <?php
                                                            $title_words = explode(' ', get_the_title());
                                                            $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                            echo count($title_words) > 10  ? $trimmed_title . '...' : $trimmed_title;
                                                        ?>
                                                    </a>    
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
                                                    <a href="<?= get_the_permalink();?>">
                                                        <?php
                                                            $title_words = explode(' ', get_the_title());
                                                            $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                            echo count($title_words) > 10  ? $trimmed_title . '...' : $trimmed_title;
                                                        ?>
                                                    </a>    
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
                                                    <a href="<?= get_the_permalink();?>">
                                                        <?php
                                                            $title_words = explode(' ', get_the_title());
                                                            $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                            echo count($title_words) > 10  ? $trimmed_title . '...' : $trimmed_title;
                                                        ?> 
                                                    </a>   
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
                <div class="grid grid-cols-2 gap-8 cols_1_mob">
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
                                                <a href="<?= get_the_permalink();?>">
                                                    <?php
                                                        $title_words = explode(' ', get_the_title());
                                                        $trimmed_title = implode(' ', array_slice($title_words, 0, 7));
                                                        echo count($title_words) > 7 ? $trimmed_title . '...' : $trimmed_title;
                                                    ?>  
                                                </a>  
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

                <div class="grid grid-cols-2 gap-8 cols_1_tab">
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
                                                <a href="<?= get_the_permalink();?>">
                                                    <?php
                                                        $title_words = explode(' ', get_the_title());
                                                        $trimmed_title = implode(' ', array_slice($title_words, 0, 7));
                                                        echo count($title_words) > 7 ? $trimmed_title . '...' : $trimmed_title;
                                                    ?>
                                                </a>    
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
                                    <?php 
                                    if( $i == 1 ) {
                                        ?>
                                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/rank1.png'?>" alt="rank">
                                        <?php
                                    } else if($i == 2) {
                                        ?>
                                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/rank2.png'?>" alt="rank">
                                        <?php
                                    }  else if($i == 3) {
                                        ?>
                                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/rank3.png'?>" alt="rank">
                                        <?php
                                    } else {
                                        ?>
                                        <span class="rank_1">#<?= $i;?></span>
                                        <?php
                                    }
                                    ?>
                                    <img class="roundImg1" src="<?= !empty($user_profile_image) ? esc_url(wp_get_attachment_url($user_profile_image)) : 'https://via.placeholder.com/120/FD7E35/fff?text=User';?>" alt="user">
                                    <h4 class="title_5"><?= esc_html($user->first_name . ' ' . $user->last_name);?></h4>
                                </div>
                            <?php
                                }
                            ?>
                        </div>

                </div>

                <div class="mt-5 p-4 top_profile_box">
                    <img src="<?= home_url('/wp-content/uploads/2024/02/medtrics-logo-color.svg')?>" class="image_1" alt="logo">
                    <p class="my-4">Step into the world of Medicine Unlocked—an open gateway to a treasure trove of profound medical insights, comprehensive information, and vast knowledge, providing a valuable resource for enthusiasts and professionals alike</p>
                    <ul class="social">
                        <li><a href="#!"><svg width="18px" height="18px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>twitter [#154]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#1d2939"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]"> </path> </g> </g> </g> </g></svg></a></li>
                        
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

        <div class="grid grid-cols-2 justify-between gap-8 cols_1_tab">
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
                                            <a href="<?= get_the_permalink();?>">
                                                <?php
                                                    $title_words = explode(' ', get_the_title());
                                                    $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                    echo count($title_words) > 10 ? $trimmed_title . '...' : $trimmed_title;
                                                ?>
                                            </a>    
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

            <div class="grid grid-cols-2 gap-5 cols_1_mob">
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
                                            <a href="<?= get_the_permalink();?>">
                                                <?php
                                                    $title_words = explode(' ', get_the_title());
                                                    $trimmed_title = implode(' ', array_slice($title_words, 0, 5));
                                                    echo count($title_words) > 5 ? $trimmed_title . '...' : $trimmed_title;
                                                ?> 
                                            </a>   
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
    
        <div class="relative cta_bg" style="background-image:url(https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Rectangle-7129.png)">
            <div class="video_bg_overlay"></div>
            <div class="relative grid grid_1_5 items-center">
                <div>
                    <h2 class="heading_main_3 text_center_tab">Customize Your Author Profile Contribute Articles. Earn Badges.</h2>
                    <p class="text-white my-5 text_center_tab">Join us in making a difference! Subscribe today and actively contribute to our cause, fostering positive change and creating a better tomorrow.</p>
                    <a href="<?= home_url('/subscription');?>" class="mx_auto_tab btn_4">Subscribe Now</a>
                </div>
                <div>
                    <a href="#!" class="video_play video_play_open"><svg width="32px" height="32px" viewBox="-3 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>play</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-419.000000, -571.000000)" fill="#ffffff"> <path d="M440.415,583.554 L421.418,571.311 C420.291,570.704 419,570.767 419,572.946 L419,597.054 C419,599.046 420.385,599.36 421.418,598.689 L440.415,586.446 C441.197,585.647 441.197,584.353 440.415,583.554" id="play" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg></a>
                </div>
            </div>
        </div>
    
    </div>

    <div class="video_popup_wrap">
        <div class="video_bg_overlay"></div>
        <div class="video_popup_src">
            <a href="#!" class="close_video_popup">
                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.06 12L17.48 7.57996C17.5537 7.5113 17.6128 7.4285 17.6538 7.3365C17.6948 7.2445 17.7168 7.14518 17.7186 7.04448C17.7204 6.94378 17.7018 6.84375 17.6641 6.75036C17.6264 6.65697 17.5703 6.57214 17.499 6.50092C17.4278 6.4297 17.343 6.37356 17.2496 6.33584C17.1562 6.29811 17.0562 6.27959 16.9555 6.28137C16.8548 6.28314 16.7555 6.30519 16.6635 6.34618C16.5715 6.38717 16.4887 6.44627 16.42 6.51996L12 10.94L7.58 6.51996C7.43782 6.38748 7.24978 6.31535 7.05548 6.31878C6.86118 6.32221 6.67579 6.40092 6.53838 6.53834C6.40096 6.67575 6.32225 6.86113 6.31882 7.05544C6.3154 7.24974 6.38752 7.43778 6.52 7.57996L10.94 12L6.52 16.42C6.37955 16.5606 6.30066 16.7512 6.30066 16.95C6.30066 17.1487 6.37955 17.3393 6.52 17.48C6.66062 17.6204 6.85125 17.6993 7.05 17.6993C7.24875 17.6993 7.43937 17.6204 7.58 17.48L12 13.06L16.42 17.48C16.5606 17.6204 16.7512 17.6993 16.95 17.6993C17.1488 17.6993 17.3394 17.6204 17.48 17.48C17.6204 17.3393 17.6993 17.1487 17.6993 16.95C17.6993 16.7512 17.6204 16.5606 17.48 16.42L13.06 12Z" fill="#ffffff"></path> </g></svg>
            </a>
            <video controls src="<?= home_url('/wp-content/uploads/2024/02/WhatsApp-Video-2024-02-08-at-6.17.23-PM.mp4');?>"></video>
        </div>
    </div>

</section>

<section class="pb-20">
    <div class="custom_container">

        <div class="pb-8 flex justify-between">
            <h2 class="heading_main">Important Global News and Updates</h2>
        </div>

        <div class="grid grid-cols-3 gap-5 cols_1_tab">
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
                                        <a href="<?= get_the_permalink();?>">
                                            <?php
                                                $title_words = explode(' ', get_the_title());
                                                $trimmed_title = implode(' ', array_slice($title_words, 0, 10));
                                                echo count($title_words) > 10 ? $trimmed_title . '...' : $trimmed_title;
                                            ?>
                                        </a>    
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

        <div class="grid grid-cols-3 gap-5 cols_1_tab">
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
                                        <a href="<?= get_the_permalink();?>">
                                            <?php
                                                $title_words = explode(' ', get_the_title());
                                                $trimmed_title = implode(' ', array_slice($title_words, 0, 5));
                                                echo count($title_words) > 5 ? $trimmed_title . '...' : $trimmed_title;
                                            ?>
                                        </a>    
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
            <div class="swiper banner_post_slider pb-20">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="text-center head_wrap">
                            <h2 class="heading_main_4 pb-20">AI-Powered Grammar Correction</h2>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-20 cols_1_tab gap_30_mob">
                            <div class="order_2_tab">
                                <div class="flex mb-10 gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Group.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Advanced Grammar Assistance
                                        </h3>
                                        <p>Benefit from sophisticated AI that offers real-time corrections and suggestions, ensuring your medical writing is precise and error-free.</p>
                                    </div>
                                </div>

                                <div class="flex mb-10 gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Frame.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Elevated Writing Style
                                        </h3>
                                        <p>Utilize intelligent style recommendations to enhance the readability and professionalism of your articles, reflecting the meticulous nature of medical communication.</p>
                                    </div>
                                </div>

                                <div class="flex gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Group-1.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Impeccable Professional Presentation
                                        </h3>
                                        <p>AI refines your structure for properly formatted article presentation, so all content has a consistent appearance.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="order_1_tab">
                                <img class="image_4" src="<?= home_url('/wp-content/uploads/2024/02/Rectangle-7126.png')?>" alt="slider">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="text-center head_wrap">
                            <h2 class="heading_main_4 pb-20">AI-Driven Image Generation</h2>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-20 cols_1_tab gap_30_mob">
                            <div class="order_2_tab">
                                <div class="flex mb-10 gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Group.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Innovative Text-to-Visual Conversion 
                                        </h3>
                                        <p>Experience the seamless transformation of textual descriptions into high-quality, relevant images that capture the essence of your medical insights.</p>
                                    </div>
                                </div>

                                <div class="flex mb-10 gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Frame.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Personalized Visual Storytelling
                                        </h3>
                                        <p>Create a unique visual narrative for your content with custom images that are tailored by AI to complement and elevate your article's impact.</p>
                                    </div>
                                </div>

                                <div class="flex gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Group-1.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Visually Engaging Medical Content
                                        </h3>
                                        <p>Enhance the appeal and understanding of your medical articles with AI-generated visuals, designed to engage and educate your audience effectively.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="order_1_tab">
                                <img class="image_4" src="<?= home_url('/wp-content/uploads/2024/02/Rectangle-7126.png')?>" alt="slider">
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="text-center head_wrap">
                            <h2 class="heading_main_4 pb-20">API Integration for Credentials and Analytics</h2>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-20 cols_1_tab gap_30_mob">
                            <div class="order_2_tab">
                                <div class="flex mb-10 gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Group.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Seamless Credential Broadcasting
                                        </h3>
                                        <p>Effortlessly display your professional credentials on Medtrics, thanks to smooth API integrations that maintain the integrity of your medical brand.</p>
                                    </div>
                                </div>

                                <div class="flex mb-10 gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Frame.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Comprehensive Social Media Analytics
                                        </h3>
                                        <p>Gain valuable insights into your social media content's performance and audience engagement, enabling you to refine your strategy and extend your professional reach.</p>
                                    </div>
                                </div>

                                <div class="flex gap-4 flex_col_mob">
                                    <div class="icon_1">
                                        <img src="https://viziflyteam.website/medicine/wp-content/uploads/2024/02/Group-1.png"/>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="title_6 title_6_1 mb-1">
                                            Strategic Data-Driven Decisions
                                        </h3>
                                        <p>Leverage detailed analytics to inform potential sponsors and brands of your objective value as a medical creator.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="order_1_tab">
                                <img class="image_4" src="<?= home_url('/wp-content/uploads/2024/02/Rectangle-7126.png')?>" alt="slider">
                            </div>
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
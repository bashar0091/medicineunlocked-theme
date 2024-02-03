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
                                <div class="mb-3 article_card article_card_2 p-2">
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

                

			</div>
		</div>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto px-5">

        <div class="pb-4">
            <span class="heading_xsm">By Topics</span>
            <h2 class="heading_main">Articles By <span class="text_color3">Categories</span></h2>
        </div>

        <div class="grid grid-cols-4 gap-8">
            <?php 
                $categories = get_categories();

                // Loop through each category
                foreach ($categories as $category) {
                    ?>
                        <div class="shadow-md mb-3 flex-col flex article_card article_card_img_left bg-white rounded-lg p-3 gap-1">
                            <div>
                                <?php
                                    $id_for_acf = 'category_'.$category->cat_ID;
                                    $category_image = get_field('category_image', $id_for_acf);
                                    if(!empty($category_image)) {
                                        echo '<img class="h-20 w-20 object-contain" src="'.$category_image.'" alt="image" />';
                                    }
                                ?> 
                            </div>

                            <div class="flex-1">
                                <div>
                                    <h3 class="text-base font-bold text-black py-3"><?= $category->name;?></h3>
                                    <p class="text-sm pb-3">Total <?= $category->category_count;?> Articles</p>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
		</div>
    </div>
</section>

<section class="bg_color1 py-20">
    <div class="container mx-auto px-5">

        <div class="pb-4">
            <span class="heading_xsm text-center block">About Us</span>
            <h2 class="heading_main text-center">Who Are <span class="text_color3">we?</span></h2>
        </div>

        <div class="pb-12 max-w-4xl mx-auto">
            <p class="text-center text-black text-slate-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>

        <div class="grid grid-cols-4 gap-8 max-w-4xl mx-auto">
            <div>
                <h3 class="text_color3 text-center text-4xl font-bold py-3 counter">123+</h3>
                <p class="text-center text-base font-medium pb-3">Working Authors</p>
            </div>
            <div>
                <h3 class="text_color3 text-center text-4xl font-bold py-3 counter">321+</h3>
                <p class="text-center text-base font-medium pb-3">Blog Writted</p>
            </div>
            <div>
                <h3 class="text_color3 text-center text-4xl font-bold py-3 counter">456+</h3>
                <p class="text-center text-base font-medium pb-3">Awards Win</p>
            </div>
            <div>
                <h3 class="text_color3 text-center text-4xl font-bold py-3 counter">676+</h3>
                <p class="text-center text-sbase font-mediumpb-3">People Saved</p>
            </div>
		</div>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto px-5">
        <div class="mb-3 max-w-5xl mx-auto flex article_card article_card_img_left bg_color4 rounded-lg p-8 gap-4">
            <div class="flex-1">
                <div class="pb-4">
                    <span class="heading_xsm text-white">Subscribe Now</span>
                    <h2 class="heading_main text-4xl text-white py-6">
                        Customize Your Author Profile. 
                        <br>
                        Contribute Articles.
                        <br>
                        Earn Badges
                    </h2>
                    <a href="#!" class="custom_btn bg-white text_color3 w-48">Subscribe Now</a>
                </div>
            </div>

            <div>
                <img class="rounded-lg h-64 w-96 object-cover object-top" src="https://i0.wp.com/medicineunlocked.org/wp-content/uploads/2023/11/a8508256-0218-4685-9ff2-4c04a9fe461d.webp?resize=370%2C250&ssl=1" alt="image" />
            </div>
        </div>
    </div>
</section>

<section class="bg_color1 py-20">
    <div class="container mx-auto px-5">

        <div class="flex gap-20">
			<div class="flex-1">
                
                <div class="pb-4">
                    <h2 class="heading_main">Popular <span class="text_color3">Articles</span></h2>
                </div>

                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post-filter-tag',
                                'field' => 'slug',
                                'terms' => 'popular-articles',
                            ),
                        ),
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();

                            $categories = get_the_category();

                            ?>
                            <div class="mb-3 flex article_card article_card_img_left bg-white rounded-lg p-3 gap-4">
                                <div>
                                    <?php 
                                        $feature_image = get_the_post_thumbnail_url();
                                        $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                        if( !empty($ai_generated_featured_image) ) {
                                            echo '<img class="rounded-lg h-52 w-52 object-cover object-top" src="'.$ai_generated_featured_image.'" alt="image" />';
                                        } elseif( !empty($feature_image) ) {
                                            echo '<img class="rounded-lg h-52 w-52 object-cover object-top" src="'.$feature_image.'" alt="image" />';
                                        }
                                        
                                    ?>
                                </div>

                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <span class="rounded-full bg_color2 text_color1 py-1 px-3 text-sm"><?= $categories[0]->name;?></span>
                                            <span class="rounded-full bg_color3 text_color2 py-1 px-3 text-sm"><?= $categories[1]->name;?></span>
                                        </div>
                                        <div>
                                            <span class="rounded-full text-sm">10k Reads</span>
                                        </div>
                                    </div>

                                    <div>
                                        <h3 class="text-base font-bold text-black py-3">
                                            <?php
                                                $title_words = explode(' ', get_the_title());
                                                $trimmed_title = implode(' ', array_slice($title_words, 0, 15));
                                                echo count($title_words) > 15 ? $trimmed_title . '...' : $trimmed_title;
                                            ?>    
                                        </h3>
                                        <p class="text-sm pb-3">
                                            <?php
                                                $content_words = explode(' ', get_the_excerpt());
                                                $trimmed_content = implode(' ', array_slice($content_words, 0, 15));
                                                echo count($content_words) > 15 ? $trimmed_content . '...' : $trimmed_content;
                                            ?> 
                                        </p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <?php 
                                            $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                            $user_profile_image = get_the_author_meta( 'user_profile_image', $post_author_id );
                                            if(!empty($user_profile_image)) {
                                                echo '<img class="w-8 h-8 object-cover object-top rounded-full" src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
                                            } else {
                                                echo '<img class="w-8 h-8 object-cover object-top rounded-full" src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
                                            }

                                            // =====
                                            $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                            $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                            
                                            echo $author_first_name . " " . $author_last_name;                                                    
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    }
                ?>

			</div>
			
			<div class="flex-1">

                <div class="pb-4">
                    <h2 class="heading_main">Most <span class="text_color3">Read</span></h2>
                </div>

                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
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
                            $query->the_post();

                            $categories = get_the_category();

                            ?>
                            <div class="mb-3 flex article_card article_card_img_left bg-white rounded-lg p-3 gap-4">
                                <div>
                                    <?php 
                                        $feature_image = get_the_post_thumbnail_url();
                                        $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                        if( !empty($ai_generated_featured_image) ) {
                                            echo '<img class="rounded-lg h-52 w-52 object-cover object-top" src="'.$ai_generated_featured_image.'" alt="image" />';
                                        } elseif( !empty($feature_image) ) {
                                            echo '<img class="rounded-lg h-52 w-52 object-cover object-top" src="'.$feature_image.'" alt="image" />';
                                        }
                                        
                                    ?>
                                </div>

                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <span class="rounded-full bg_color2 text_color1 py-1 px-3 text-sm"><?= $categories[0]->name;?></span>
                                            <span class="rounded-full bg_color3 text_color2 py-1 px-3 text-sm"><?= $categories[1]->name;?></span>
                                        </div>
                                        <div>
                                            <span class="rounded-full text-sm">10k Reads</span>
                                        </div>
                                    </div>

                                    <div>
                                        <h3 class="text-base font-bold text-black py-3">
                                            <?php
                                                $title_words = explode(' ', get_the_title());
                                                $trimmed_title = implode(' ', array_slice($title_words, 0, 15));
                                                echo count($title_words) > 15 ? $trimmed_title . '...' : $trimmed_title;
                                            ?>    
                                        </h3>
                                        <p class="text-sm pb-3">
                                            <?php
                                                $content_words = explode(' ', get_the_excerpt());
                                                $trimmed_content = implode(' ', array_slice($content_words, 0, 15));
                                                echo count($content_words) > 15 ? $trimmed_content . '...' : $trimmed_content;
                                            ?> 
                                        </p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <?php 
                                            $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                            $user_profile_image = get_the_author_meta( 'user_profile_image', $post_author_id );
                                            if(!empty($user_profile_image)) {
                                                echo '<img class="w-8 h-8 object-cover object-top rounded-full" src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
                                            } else {
                                                echo '<img class="w-8 h-8 object-cover object-top rounded-full" src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
                                            }

                                            // =====
                                            $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                            $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                            
                                            echo $author_first_name . " " . $author_last_name;                                                    
                                        ?>
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

<?php get_footer();?>
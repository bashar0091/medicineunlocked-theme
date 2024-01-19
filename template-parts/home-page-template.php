<?php 
/* Template Name: Home */ 

get_header();
?>

<section class="video_bg relative overflow-hidden">

    <video class="video_bg_src" autoplay muted loop src="https://player.vimeo.com/external/338064905.sd.mp4?s=468058f956610f28d7d8cab7fbc5890b004a9481&profile_id=164&oauth2_token_id=57447761"></video>
    <div class="video_bg_overlay"></div>
    
    <div class="container mx-auto px-5 h-full">
        <form action="" class="search_form">
            <input type="text" name="" placeholder="Search Articles">
            <button type="submit"><svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
        </form>
    </div>

</section>

<section class="bg_color1 py-20">
    <div class="container mx-auto px-5">

        <div class="pb-4">
            <span class="heading_xsm">Trending Articles</span>
            <h2 class="heading_main">Most <span class="text_color3">Trending Articles</span></h2>
        </div>

        <div class="flex gap-8">
			<div class="flex-1">

                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
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
                                            <span class="rounded-full bg_color2 text_color1 py-1 px-3 text-sm">Behavioral</span>
                                            <span class="rounded-full bg_color3 text_color2 py-1 px-3 text-sm">Behavioral</span>
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

                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <div class="mb-3 flex-col flex article_card article_card_img_left bg-white rounded-lg p-3 gap-4">
                                <div class="flex-1">
                                    <img class="rounded-lg" src="https://i0.wp.com/medicineunlocked.org/wp-content/uploads/2023/11/bd7287c7-ab69-4040-a11f-d2df6e370733.webp?resize=740%2C500&ssl=1" alt="article_img">
                                </div>

                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <span class="rounded-full bg_color2 text_color1 py-1 px-3 text-sm">Behavioral</span>
                                            <span class="rounded-full bg_color3 text_color2 py-1 px-3 text-sm">Behavioral</span>
                                        </div>
                                        <div>
                                            <span class="rounded-full text-sm">10k Reads</span>
                                        </div>
                                    </div>

                                    <div>
                                        <h3 class="text-base font-bold text-black py-3">
                                            <?php
                                                $title_words = explode(' ', get_the_title());
                                                $trimmed_title = implode(' ', array_slice($title_words, 0, 20));
                                                echo count($title_words) > 10 ? $trimmed_title . '...' : $trimmed_title;
                                            ?>    
                                        </h3>
                                        <p class="text-sm pb-3">
                                            <?php
                                                $content_words = explode(' ', get_the_excerpt());
                                                $trimmed_content = implode(' ', array_slice($content_words, 0, 35));
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
                                <img class="h-20 w-20 object-contain" src="https://i.ibb.co/WypJnJZ/image.png" alt="image" />
                            </div>

                            <div class="flex-1">
                                <div>
                                    <h3 class="text-base font-bold text-black py-3"><?= $category->name;?></h3>
                                    <p class="text-sm pb-3">Total 345 Articles</p>
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
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
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
                                            <span class="rounded-full bg_color2 text_color1 py-1 px-3 text-sm">Behavioral</span>
                                            <span class="rounded-full bg_color3 text_color2 py-1 px-3 text-sm">Behavioral</span>
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
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
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
                                            <span class="rounded-full bg_color2 text_color1 py-1 px-3 text-sm">Behavioral</span>
                                            <span class="rounded-full bg_color3 text_color2 py-1 px-3 text-sm">Behavioral</span>
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
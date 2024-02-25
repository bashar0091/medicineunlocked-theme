<?php
    $categories = get_the_category();
?>

<section class="">
    <div class="custom_container">

        <!-- breacrumb section start  -->
        <div class="breadcrumb">
            <a class="title_breadcrumb" href="<?= home_url('/');?>">Home</a>
            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00002 15.75C0.808023 15.75 0.615994 15.6771 0.469994 15.5301C0.176994 15.2371 0.176994 14.762 0.469994 14.469L6.93996 7.99905L0.469994 1.52908C0.176994 1.23608 0.176994 0.761041 0.469994 0.468041C0.762994 0.175041 1.23803 0.175041 1.53103 0.468041L8.53103 7.46804C8.82403 7.76104 8.82403 8.23608 8.53103 8.52908L1.53103 15.5291C1.38403 15.6771 1.19202 15.75 1.00002 15.75Z" fill="#25314C"/>
            </svg>
            <a class="title_breadcrumb" href="#!">Article</a>
            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00002 15.75C0.808023 15.75 0.615994 15.6771 0.469994 15.5301C0.176994 15.2371 0.176994 14.762 0.469994 14.469L6.93996 7.99905L0.469994 1.52908C0.176994 1.23608 0.176994 0.761041 0.469994 0.468041C0.762994 0.175041 1.23803 0.175041 1.53103 0.468041L8.53103 7.46804C8.82403 7.76104 8.82403 8.23608 8.53103 8.52908L1.53103 15.5291C1.38403 15.6771 1.19202 15.75 1.00002 15.75Z" fill="#25314C"/>
            </svg>
            <span class="title_breadcrumb2"><?= get_the_title();?></span>
        </div>

        <div>
            <h1 class="title_1 text_center_tab main_title_single"><?= get_the_title();?></h1>
        </div>

        <div class="single_cat_wrap">
            <span class="cat_1 cat_2 cat_3 cat_single"><?= !empty($categories[0]->name) ? $categories[0]->name : '';?></span>
            <span class="cat_1 cat_2 cat_3 cat_single"><?= !empty($categories[1]->name) ? $categories[1]->name : '';?></span>
        </div>

        <div class="flex items-center gap-3 post_author_info">
            <div>
                <span class="single_title_2">By</span>
            </div>

            <div>
                <?php 
                    $post_author_id = get_post_field( 'post_author', get_the_ID() );
                    $user_profile_image = get_the_author_meta( 'user_profile_image', $post_author_id );
                    if(!empty($user_profile_image)) {
                        echo '<img class="image_3 single_author_image" src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
                    } else {
                        echo '<img class="image_3 single_author_image" src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
                    }                                                 
                ?>
            </div>
            
            <div>
                <span class="single_title_3">
                    <?php 
                        $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                        $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                        echo $author_first_name . " " . $author_last_name;                                                    
                    ?>
                </span>
            </div>

            <div>
                <span class="cat_2 title_breadcrumb2"><?= get_the_date();?></span>
            </div>

            <div>
                <span class="single_width"></span>
            </div>

            <div>
                <span class="title_breadcrumb2 single_read">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2352 10.1379C19.9222 7.93894 16.9751 4.25 12.0001 4.25C7.02511 4.25 4.07801 7.93894 2.76501 10.1379C2.07801 11.2859 2.07801 12.7131 2.76501 13.8621C4.07801 16.0611 7.02511 19.75 12.0001 19.75C16.9751 19.75 19.9222 16.0611 21.2352 13.8621C21.9222 12.7131 21.9222 11.2869 21.2352 10.1379ZM19.9481 13.092C18.7981 15.018 16.2351 18.25 12.0001 18.25C7.76511 18.25 5.20212 15.019 4.05212 13.092C3.65012 12.418 3.65012 11.581 4.05212 10.907C5.20212 8.98098 7.76511 5.74902 12.0001 5.74902C16.2351 5.74902 18.7981 8.97998 19.9481 10.907C20.3511 11.582 20.3511 12.418 19.9481 13.092ZM12.0001 7.75C9.65611 7.75 7.75011 9.657 7.75011 12C7.75011 14.343 9.65611 16.25 12.0001 16.25C14.3441 16.25 16.2501 14.343 16.2501 12C16.2501 9.657 14.3441 7.75 12.0001 7.75ZM12.0001 14.75C10.4831 14.75 9.25011 13.517 9.25011 12C9.25011 10.483 10.4831 9.25 12.0001 9.25C13.5171 9.25 14.7501 10.483 14.7501 12C14.7501 13.517 13.5171 14.75 12.0001 14.75Z" fill="#25314C"/>
                    </svg>

                    2156
                </span>
            </div>

            <div>
                <span class="title_breadcrumb2 single_read">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0359 4.18199C21.0349 4.18199 21.0349 4.18201 21.0339 4.18101C19.3319 3.37401 17.445 3.09099 15.425 3.33799C13.971 3.51699 12.741 4.34794 12 5.51194C11.258 4.34894 10.029 3.51699 8.57495 3.33799C6.55195 3.09099 4.66706 3.37401 2.96606 4.18101C2.96606 4.18101 2.96609 4.18101 2.96509 4.18101C2.53109 4.38701 2.25 4.83393 2.25 5.31993V18.3249C2.25 18.7189 2.42992 19.08 2.74292 19.317C3.05492 19.554 3.4711 19.6289 3.8501 19.5229C6.7581 18.6969 9.21701 19.047 11.583 20.624C11.593 20.631 11.605 20.633 11.615 20.639C11.626 20.645 11.634 20.655 11.646 20.661C11.657 20.667 11.6699 20.664 11.6809 20.67C11.7819 20.718 11.889 20.75 11.999 20.75C12.109 20.75 12.2159 20.718 12.3169 20.67C12.3279 20.665 12.3411 20.667 12.3521 20.661C12.3631 20.655 12.3721 20.646 12.3821 20.639C12.3921 20.633 12.4041 20.631 12.4141 20.624C14.7801 19.046 17.238 18.696 20.147 19.522C20.527 19.63 20.9409 19.554 21.2539 19.317C21.5669 19.081 21.7471 18.7189 21.7471 18.3249V5.31993C21.7501 4.83593 21.4699 4.38899 21.0359 4.18199ZM6.73291 17.593C5.77191 17.593 4.779 17.728 3.75 17.995V5.46995C5.17 4.82695 6.69309 4.61603 8.39209 4.82603C10.0221 5.02603 11.25 6.41596 11.25 8.05796V18.6889C9.815 17.9579 8.31691 17.593 6.73291 17.593ZM20.25 17.996C17.522 17.287 15.056 17.514 12.75 18.691V8.06004C12.75 6.41704 13.9789 5.02798 15.6079 4.82798C16.0299 4.77598 16.441 4.74998 16.842 4.74998C18.057 4.74998 19.182 4.98903 20.249 5.47203V17.996H20.25ZM15 8.24998H18C18.414 8.24998 18.75 8.58598 18.75 8.99998C18.75 9.41398 18.414 9.74998 18 9.74998H15C14.586 9.74998 14.25 9.41398 14.25 8.99998C14.25 8.58598 14.586 8.24998 15 8.24998ZM17.75 12C17.75 12.414 17.414 12.75 17 12.75H15C14.586 12.75 14.25 12.414 14.25 12C14.25 11.586 14.586 11.25 15 11.25H17C17.414 11.25 17.75 11.586 17.75 12Z" fill="#25314C"/>
                    </svg>

                    5 min read
                </span>
            </div>
        </div>

        <div class="single_post_grid">
            <div>
                <?php 
                    $feature_image = get_the_post_thumbnail_url();
                    $ai_generated_featured_image = get_field('ai_generated_featured_image');

                    if( !empty($ai_generated_featured_image) ) {
                        echo '<img class="single_feature_image" src="'.$ai_generated_featured_image.'" alt="image" />';
                    } elseif( !empty($feature_image) ) {
                        echo '<img class="single_feature_image" src="'.$feature_image.'" alt="image" />';
                    }
                    
                ?>

                <div class="single_post_content">
                    <?= wpautop(get_the_content());?>
                </div>
            </div>

            <div>
                <div class="author_box_info">
                    <?php 
                        $post_author_id = get_post_field( 'post_author', get_the_ID() );
                        $user_profile_image = get_the_author_meta( 'user_profile_image', $post_author_id );
                        if(!empty($user_profile_image)) {
                            echo '<img class="single_author_box_image" src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
                        } else {
                            echo '<img class="single_author_box_image" src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
                        }                                                 
                    ?>

                    <h3 class="single_author_title">
                        <?php 
                            $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                            $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                            echo $author_first_name . " " . $author_last_name;                                                    
                        ?>
                    </h3>
                    <h4 class="single_author_subtitle">medical student</h4>
                    <p class="single_author_des">Hanna Shanar is a 25-year-old fourth-year medical student at Nova Southeastern University. Hanna was recognized by his undergraduate university...</p>
                
                    <div class="author_social">
                        <ul>
                            <li><a href="#!" class="social_icon" style="background: rgba(51, 204, 255, 1);"><svg width="24px" height="24px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>twitter [#154]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]"> </path> </g> </g> </g> </g></svg></a></li>
                            
                            <li><a href="#!" class="social_icon" style="background: linear-gradient(rgba(251, 225, 138, 1), rgba(252, 187, 69, 1), rgba(247, 82, 116, 1), rgba(213, 54, 146, 1), rgba(143, 57, 206, 1), rgba(91, 79, 233, 1));"><svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#ffffff"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#ffffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#ffffff"></path> </g></svg></a></li>
                            
                            <li><a href="#!" class="social_icon" style="background: rgba(51, 127, 255, 1);"><svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" id="facebook" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="primary" d="M14,6h3a1,1,0,0,0,1-1V3a1,1,0,0,0-1-1H14A5,5,0,0,0,9,7v3H7a1,1,0,0,0-1,1v2a1,1,0,0,0,1,1H9v7a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V14h2.22a1,1,0,0,0,1-.76l.5-2a1,1,0,0,0-1-1.24H13V7A1,1,0,0,1,14,6Z" style="fill: #ffffff;"></path></g></svg></a></li>
                        </ul>
                    </div>

                    <div>
                        <a href="#!" class="author_explore">
                            Explore This Author
                        </a>
                    </div>
                </div>

                <div class="more_author">
                    <h2 class="heading_main no_border single_more_head">More From This Author</h2>

                    <div>
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 4,
                                'order' => 'ASC'
                            );
                            
                            $query = new WP_Query($args);
                            
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();

                                    $categories = get_the_category();

                                    ?>
                                    <div class="signle_more_card article_card article_card_2 items-center">
                                        <div class="relative single_featured_img_2">
                                            <?php 
                                                $feature_image = get_the_post_thumbnail_url();
                                                $ai_generated_featured_image = get_field('ai_generated_featured_image');

                                                if( !empty($ai_generated_featured_image) ) {
                                                    echo '<img class="single_featured_img_2" src="'.$ai_generated_featured_image.'" alt="image" />';
                                                } elseif( !empty($feature_image) ) {
                                                    echo '<img class="single_featured_img_2" src="'.$feature_image.'" alt="image" />';
                                                }
                                                
                                            ?>
                                        </div>

                                        <div class="flex-1">

                                            <div class="pb-2">
                                                <h3 class="title_2 title_3">
                                                    <a href="<?= get_the_permalink();?>">
                                                        <?php
                                                            $title_words = explode(' ', get_the_title());
                                                            $trimmed_title = implode(' ', array_slice($title_words, 0, 6));
                                                            echo count($title_words) > 6 ? $trimmed_title . '...' : $trimmed_title;
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

                <div class="more_author">
                    <h2 class="heading_main no_border single_more_head">Explore By Categories</h2>

                    <div class="single_category_main_wrap">
                        <?php 
                            $categories = get_categories();
                            $i = 0;
                            // Loop through each category
                            foreach ($categories as $category) {
                                $i++;
                                if($i == 7) {
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
                </div>
                <hr class="hr_1">
                <div class="relative cta_bg single_cta_bg" style="background-image:url(<?= get_stylesheet_directory_uri() . '/assets/img/video-cover.jpg'?>)">
                    <div class="video_bg_overlay"></div>
                    <div class="relative text-center cta_2">
                        <h2 class="single_cta_head text-white text-left">Join Our Community & Amplify Your Voice!</h2>
                        <p class="text-white single_cta_subhead text-left">Join us in making a difference! Subscribe today and actively contribute to our cause, fostering positive change.</p>
                        <a href="<?= home_url('/subscription');?>" class="btn_4">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg_color1 py-20 mt-10">
    <div class="custom_container">

        <div class="pb-8 flex justify-between">
            <h2 class="single_trending_heading">Trending On Medtrics</h2>
        </div>

        <div class="grid grid-cols-3 gap-8 cols_1_mob">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
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
                                <!-- <span class="count_1"><?php echo $i;?></span> -->
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

    </div>
</section>
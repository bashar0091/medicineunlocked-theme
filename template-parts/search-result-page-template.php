<?php 

/* Template Name: Search Result */ 

get_header();

?>

<section class="bg_color1 py-20">
    <div class="container mx-auto px-5">
        <?php if( isset($_GET['search_type']) && $_GET['search_type'] == 'Authors' ){ ?>
            <div class="flex flex-col gap-7.5">
                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="p-10 text-center">
                        <h2 class="text-title-md2 font-bold text-black dark:text-white">Author Search Results for <?= $_GET['search_keyword'];?></h2>
                    </div>

                    <div class="p-4 sm:p-6 xl:p-9">
                        <div class="grid grid-cols-1 gap-15 py-4 sm:grid-cols-2 sm:py-6 xl:grid-cols-4 xl:py-7.5 2xl:py-15">
                        
                            <?php
                                $search_keywords = explode(' ', $_GET['search_keyword']);
                                $meta_queries = array();
                                foreach ($search_keywords as $keyword) {
                                    $meta_queries[] = array(
                                        'relation' => 'OR',
                                        array(
                                            'key'     => 'first_name',
                                            'value'   => $keyword,
                                            'compare' => 'LIKE',
                                        ),
                                        array(
                                            'key'     => 'last_name',
                                            'value'   => $keyword,
                                            'compare' => 'LIKE',
                                        ),
                                    );
                                }

                                $user_query = new WP_User_Query(array(
                                    'orderby'    => 'ID',
                                    'order'      => 'ASC',
                                    'meta_query' => array(
                                        'relation' => 'AND',
                                        $meta_queries,
                                    ),
                                ));

                                $users = $user_query->get_results();

                                if( !empty($users) ) {
                                foreach ($users as $user) {
                                    
                                    $user_profile_image = get_user_meta($user->ID, 'user_profile_image', true);
                            ?>
                                <!-- team item -->
                                <div class="mb-10">
                                    <div class="relative z-1 mx-auto h-[170px] w-full max-w-[170px] rounded-full">
                                        <img class="rounded-full h-full object-cover" src="<?= esc_url(wp_get_attachment_url($user_profile_image));?>" alt="author" />

                                        <span class="absolute left-0 top-0 -z-1">
                                            <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#3C50E0"></circle>
                                                <circle cx="12.6762" cy="80.7066" r="1.29337" transform="rotate(-90 12.6762 80.7066)" fill="#3C50E0"></circle>
                                                <circle cx="24.059" cy="80.7066" r="1.29337" transform="rotate(-90 24.059 80.7066)" fill="#3C50E0"></circle>
                                                <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#3C50E0"></circle>
                                                <circle cx="46.8207" cy="80.7066" r="1.29337" transform="rotate(-90 46.8207 80.7066)" fill="#3C50E0"></circle>
                                                <circle cx="68.809" cy="80.7066" r="1.29337" transform="rotate(-90 68.809 80.7066)" fill="#3C50E0"></circle>
                                                <circle cx="57.9457" cy="80.7066" r="1.29337" transform="rotate(-90 57.9457 80.7066)" fill="#3C50E0"></circle>
                                                <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#3C50E0"></circle>
                                                <circle cx="12.6762" cy="69.3249" r="1.29337" transform="rotate(-90 12.6762 69.3249)" fill="#3C50E0"></circle>
                                                <circle cx="24.059" cy="69.3249" r="1.29337" transform="rotate(-90 24.059 69.3249)" fill="#3C50E0"></circle>
                                                <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#3C50E0"></circle>
                                                <circle cx="46.8207" cy="69.325" r="1.29337" transform="rotate(-90 46.8207 69.325)" fill="#3C50E0"></circle>
                                                <circle cx="68.809" cy="69.325" r="1.29337" transform="rotate(-90 68.809 69.325)" fill="#3C50E0"></circle>
                                                <circle cx="57.9418" cy="69.325" r="1.29337" transform="rotate(-90 57.9418 69.325)" fill="#3C50E0"></circle>
                                                <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#3C50E0"></circle>
                                                <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#3C50E0"></circle>
                                                <circle cx="12.6762" cy="57.9433" r="1.29337" transform="rotate(-90 12.6762 57.9433)" fill="#3C50E0"></circle>
                                                <circle cx="12.6762" cy="24.0568" r="1.29337" transform="rotate(-90 12.6762 24.0568)" fill="#3C50E0"></circle>
                                                <circle cx="24.059" cy="57.9433" r="1.29337" transform="rotate(-90 24.059 57.9433)" fill="#3C50E0"></circle>
                                                <circle cx="24.059" cy="24.0568" r="1.29337" transform="rotate(-90 24.059 24.0568)" fill="#3C50E0"></circle>
                                                <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#3C50E0"></circle>
                                                <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#3C50E0"></circle>
                                                <circle cx="46.8207" cy="57.9431" r="1.29337" transform="rotate(-90 46.8207 57.9431)" fill="#3C50E0"></circle>
                                                <circle cx="46.8207" cy="24.0567" r="1.29337" transform="rotate(-90 46.8207 24.0567)" fill="#3C50E0"></circle>
                                                <circle cx="68.809" cy="57.9431" r="1.29337" transform="rotate(-90 68.809 57.9431)" fill="#3C50E0"></circle>
                                                <circle cx="68.809" cy="24.0567" r="1.29337" transform="rotate(-90 68.809 24.0567)" fill="#3C50E0"></circle>
                                                <circle cx="57.9418" cy="57.9431" r="1.29337" transform="rotate(-90 57.9418 57.9431)" fill="#3C50E0"></circle>
                                                <circle cx="57.9457" cy="24.0567" r="1.29337" transform="rotate(-90 57.9457 24.0567)" fill="#3C50E0"></circle>
                                                <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#3C50E0"></circle>
                                                <circle cx="1.29337" cy="12.675" r="1.29337" transform="rotate(-90 1.29337 12.675)" fill="#3C50E0"></circle>
                                                <circle cx="12.6762" cy="46.5615" r="1.29337" transform="rotate(-90 12.6762 46.5615)" fill="#3C50E0"></circle>
                                                <circle cx="12.6762" cy="12.675" r="1.29337" transform="rotate(-90 12.6762 12.675)" fill="#3C50E0"></circle>
                                                <circle cx="24.059" cy="46.5615" r="1.29337" transform="rotate(-90 24.059 46.5615)" fill="#3C50E0"></circle>
                                                <circle cx="24.059" cy="12.675" r="1.29337" transform="rotate(-90 24.059 12.675)" fill="#3C50E0"></circle>
                                                <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#3C50E0"></circle>
                                                <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#3C50E0"></circle>
                                                <circle cx="46.8207" cy="46.5615" r="1.29337" transform="rotate(-90 46.8207 46.5615)" fill="#3C50E0"></circle>
                                                <circle cx="46.8207" cy="12.6751" r="1.29337" transform="rotate(-90 46.8207 12.6751)" fill="#3C50E0"></circle>
                                                <circle cx="68.809" cy="46.5615" r="1.29337" transform="rotate(-90 68.809 46.5615)" fill="#3C50E0"></circle>
                                                <circle cx="68.809" cy="12.6751" r="1.29337" transform="rotate(-90 68.809 12.6751)" fill="#3C50E0"></circle>
                                                <circle cx="57.9418" cy="46.5615" r="1.29337" transform="rotate(-90 57.9418 46.5615)" fill="#3C50E0"></circle>
                                                <circle cx="57.9457" cy="12.6751" r="1.29337" transform="rotate(-90 57.9457 12.6751)" fill="#3C50E0"></circle>
                                                <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#3C50E0"></circle>
                                                <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#3C50E0"></circle>
                                                <circle cx="12.6762" cy="35.1798" r="1.29337" transform="rotate(-90 12.6762 35.1798)" fill="#3C50E0"></circle>
                                                <circle cx="12.6762" cy="1.2933" r="1.29337" transform="rotate(-90 12.6762 1.2933)" fill="#3C50E0"></circle>
                                                <circle cx="24.059" cy="35.1798" r="1.29337" transform="rotate(-90 24.059 35.1798)" fill="#3C50E0"></circle>
                                                <circle cx="24.059" cy="1.29342" r="1.29337" transform="rotate(-90 24.059 1.29342)" fill="#3C50E0"></circle>
                                                <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#3C50E0"></circle>
                                                <circle cx="35.4379" cy="1.29342" r="1.29337" transform="rotate(-90 35.4379 1.29342)" fill="#3C50E0"></circle>
                                                <circle cx="46.8207" cy="35.18" r="1.29337" transform="rotate(-90 46.8207 35.18)" fill="#3C50E0"></circle>
                                                <circle cx="46.8207" cy="1.29354" r="1.29337" transform="rotate(-90 46.8207 1.29354)" fill="#3C50E0"></circle>
                                                <circle cx="68.809" cy="35.18" r="1.29337" transform="rotate(-90 68.809 35.18)" fill="#3C50E0"></circle>
                                                <circle cx="68.809" cy="1.29354" r="1.29337" transform="rotate(-90 68.809 1.29354)" fill="#3C50E0"></circle>
                                                <circle cx="57.9457" cy="35.18" r="1.29337" transform="rotate(-90 57.9457 35.18)" fill="#3C50E0"></circle>
                                                <circle cx="57.9457" cy="1.29354" r="1.29337" transform="rotate(-90 57.9457 1.29354)" fill="#3C50E0"></circle>
                                            </svg>
                                        </span>

                                        <span class="absolute bottom-0 right-0 -z-1">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#10B981"></path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="my-5.5 text-center">
                                        <h4 class="my-3 text-lg font-bold text-black dark:text-white">
                                            <?= esc_html($user->first_name . ' ' . $user->last_name);?>
                                        </h4>
                                        <a href="<?= home_url('/user-profile/?id='.$user->ID);?>">View Author</a>
                                    </div>
                                </div>
                            <?php
                                    }
                                } else {
                                    ?>
                                    <p class="text-sm font-medium text-black">No Author Found</p>
                                    <?php
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if( isset($_GET['search_type']) && $_GET['search_type'] == 'Articles' ){ ?>

            <div class="p-10 text-center">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">Articles Search Results for <?= $_GET['search_keyword'];?></h2>
            </div>

            <div class="grid grid-cols-4 gap-5 cols_1_tab">
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        's' => $_GET['search_keyword'],
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
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
                    } else {
                        ?>
                        <p class="text-sm font-medium text-black">No Articles Found</p>
                        <?php
                    }
                ?>
            </div>
        <?php } ?>

        <?php if( isset($_GET['search_type']) && $_GET['search_type'] == 'Categories' ){ ?>

            <div class="p-10 text-center">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">Categories Search Results for <?= $_GET['search_keyword'];?></h2>
            </div>

            <div class="category_main_wrap category_main_wrap_search">
                <?php 
                    // Get the search keyword from $_GET
                    $search_keyword = isset($_GET['search_keyword']) ? sanitize_text_field($_GET['search_keyword']) : '';

                    // Get all categories
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        // Check if the category name contains the search keyword
                        if (stripos($category->name, $search_keyword) !== false) {
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
        <?php } ?>
    </div>
</section>

<?php 
get_footer();
?>
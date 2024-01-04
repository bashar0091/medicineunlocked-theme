<?php 
/* Template Name: Home */ 

get_header();
?>

<div class="flex">

    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col">
        

        <!-- ===== Main Content Start ===== -->
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

                <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-3">
                    
                    <?php 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                        );
                        
                        $query = new WP_Query($args);
                        
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                    <div class="flex items-center gap-3 py-5 px-6">
                                        <div class="h-10 w-10 rounded-full">
                                            <?php 
                                                $post_author_id = get_post_field( 'post_author', get_the_ID() );
                                                $user_profile_image = get_the_author_meta( 'user_profile_image', $post_author_id );
                                                if(!empty($user_profile_image)) {
                                                    echo '<img src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
                                                } else {
                                                    echo '<img src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
                                                }
                                            ?>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-black dark:text-white">
                                                <?php 
                                                    $author_first_name = get_the_author_meta( 'first_name', $post_author_id );
                                                    $author_last_name = get_the_author_meta( 'last_name', $post_author_id );
                                                    
                                                    echo $author_first_name . " " . $author_last_name;                                                    
                                                ?>
                                            </h4>
                                            <p class="text-xs font-medium">
                                                <?php 
                                                    $author_designation = get_the_author_meta( 'designation', $post_author_id );
                                                    echo $author_designation;                                                    
                                                ?>
                                            </p>
                                        </div>
                                    </div>

                                    <a href="<?php echo get_the_permalink();?>" class="block px-4">
                                        <?php 
                                            $feature_image = get_the_post_thumbnail_url();
                                            if( !empty($feature_image) ) {
                                                echo '<img src="'.$feature_image.'" alt="image" />';
                                            }
                                        ?>
                                    </a>

                                    <div class="p-6">
                                        <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                                            <a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a>
                                        </h4>
                                    </div>
                                </div>
                                <?php
                            }
                            wp_reset_postdata(); // Restore global post data
                        } else {
                            // No posts found
                        }
                    ?>

                </div>
            </div>
        </main>
        <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
</div>



<?php get_footer();?>
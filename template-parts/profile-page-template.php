<?php 
/* Template Name: User Profile */ 

get_header();

$scholar_badge_img = get_stylesheet_directory_uri() . '/assets/img/medicineunlocked-scholar-badge.svg';
$groundbreaker_badge_img = get_stylesheet_directory_uri() . '/assets/img/medicineunlocked-groundbreaker-badge.svg';

$current_user_id = get_current_user_id();

// for 10 post publish 
$post_count = count_user_posts($current_user_id);

// for first 50 members 
$args = array(
    'orderby' => 'ID',
    'order' => 'ASC',
    'number' => 50,
);
$first_50_users = get_users($args);
$first_50_user_ids = wp_list_pluck($first_50_users, 'ID');

?>

<div class="flex">

    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col">

        <?php 

            if( isset($_GET['id']) ) {
                $current_user_id = $_GET['id'];
            } else {
                $current_user_id = get_current_user_id();
            }
            
            $first_name = get_user_meta($current_user_id, 'first_name', true);
            $last_name = get_user_meta($current_user_id, 'last_name', true);
            $designation = get_user_meta($current_user_id, 'designation', true);
            $description = get_user_meta($current_user_id, 'description', true);
            $user_profile_image = get_user_meta($current_user_id, 'user_profile_image', true);
                                        
        ?>
        
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                <div class="mx-auto max-w-242.5">
                    
                    <!-- ====== Profile Section Start -->
                    <div class="overflow-hidden rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        
                        <div class="px-4 pb-6 text-center lg:pb-8 xl:pb-11.5">
                            <div class="relative z-30 mx-auto h-30 w-full max-w-30 rounded-full bg-white/20 p-1 backdrop-blur sm:h-44 sm:max-w-44 sm:p-3">
                                <div class="relative drop-shadow-2">
                                    <?php 
                                        if(!empty($user_profile_image)) {
                                            echo '<img class="rounded-full" src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
                                        } else {
                                            echo '<img class="rounded-full" src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h3 class="mb-1.5 text-2xl font-medium text-black dark:text-white">
                                    <?= esc_html($first_name . ' ' . $last_name);?>
                                </h3>
                                
                            </div>

                            <div class="flex items-center gap-5 justify-center mt-5">
                                <?php 
                                    if( $post_count > 9) {
                                        echo '<a href="#!" title="Awarded for publishing 10 articles. A testament to dedicated contribution."><img src="'.$scholar_badge_img.'" alt="scholar_badge"></a>';
                                    }

                                    if (in_array($current_user_id, $first_50_user_ids)) {
                                        echo '<a href="#!" title="Awarded to our first 50 members. Trailblazers who laid the foundation for our community."><img src="'.$groundbreaker_badge_img.'" alt="roundbreaker_badge"></a>';
                                    }
                                ?>
                            </div>
                        </div>

                    </div>
                    <!-- ====== Profile Section End -->
                </div>
            </div>
        </main>

    </div>
    <!-- ===== Content Area End ===== -->
</div>

<?php get_footer();?>

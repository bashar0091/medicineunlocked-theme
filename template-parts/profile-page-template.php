<?php 
/* Template Name: User Profile */ 

get_header();
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

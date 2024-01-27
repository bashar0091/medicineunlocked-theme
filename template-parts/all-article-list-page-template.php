<?php 
/* Template Name: All Article List */ 

get_header();
?>

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">

    <!-- ===== Sidebar Start ===== -->
    <?php require_once('partials/dashboard-sidebar.php');?>
    <!-- ===== Sidebar End ===== -->

    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

        <!-- ===== Main Content Start ===== -->
        <main>

            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

                <?php
                    if(isset($_GET['success']) == true) {
                        ?>
                        <div class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] p-3 items-center">
                            <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                                        fill="white"
                                        stroke="white"
                                    ></path>
                                </svg>
                            </div>
                            <div class="w-full">
                                <h5 class="text-lg font-bold text-black dark:text-[#34D399]">
                                    <?php 
                                        if( isset($_GET['update']) == 'success' ) {
                                            echo 'Article Update Successfully';
                                        } else {
                                            echo 'Article Created Successfully';
                                        }
                                    ?>
                                </h5>
                            </div>
                        </div>
                        <?php
                    }
                ?>


                <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                    <div class="max-w-full overflow-x-auto">

                        <div class="py-6 px-4 md:px-6 xl:px-7.5">
                            <h4 class="text-xl font-bold text-black dark:text-white"><?php echo get_the_title();?></h4>
                        </div>

                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-2 text-left dark:bg-meta-4">
                                    <th class="min-w-[220px] px-4 py-4 font-medium text-black dark:text-white xl:pl-11">
                                        Title
                                    </th>
                                    <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">
                                        Category
                                    </th>
                                    <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">
                                        Co Author
                                    </th>
                                    <th class="px-4 py-4 font-medium text-black dark:text-white">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $user_id = get_current_user_id();

                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => -1,
                                        'author' => $user_id
                                    );
                                    
                                    $query = new WP_Query($args);
                                    
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                            ?>
                                            <tr>
                                                <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                                    <div class="col-span-5 flex items-center">
                                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                                            <div class="h-12.5 w-15 rounded-md">
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
                                                            <p class="text-sm font-medium text-black dark:text-white">
                                                                <?php echo get_the_title();?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                                    <?php 
                                                        $category_list = get_the_category();
                                                        $i = 0;
                                                        foreach ($category_list as $category) {
                                                            $i++;
                                                            ?>
                                                            <p class="text-sm font-medium text-black dark:text-white"><?= $i .'. '. $category->name;?></p>
                                                            <?php
                                                        }
                                                    ?>
                                                </td>

                                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                                    <div class="col-span-1 text-center">
                                                        <?php
                                                            $co_author_id1 = get_field('1_co-author_id');
                                                            $co_author_approve1 = get_field('1_co-author_approve');

                                                            $co_author_id2 = get_field('2_co-author_id');
                                                            $co_author_approve2 = get_field('2_co-author_approve');

                                                            $co_author_id3 = get_field('3_co-author_id');
                                                            $co_author_approve3 = get_field('3_co-author_approve');

                                                            $co_author_id4 = get_field('4_co-author_id');
                                                            $co_author_approve4 = get_field('4_co-author_approve');

                                                            $co_author_id5 = get_field('5_co-author_id');
                                                            $co_author_approve5 = get_field('5_co-author_approve');

                                                            echo '<div class="flex gap-2">';
                                                                // author 1
                                                                if(!empty($co_author_id1) && $co_author_approve1 == 'approved') {
                                                                    ?>
                                                                        <div>
                                                                            <img class="rounded-full w-12 h-12 m-auto" src="<?= esc_url(wp_get_attachment_url(get_user_meta($co_author_id1, 'user_profile_image', true)));?>" alt="">
                                                                            <p><?= get_user_meta($co_author_id1, 'first_name', true);?></p>
                                                                        </div>
                                                                    <?php
                                                                }

                                                                // author 2
                                                                if(!empty($co_author_id2) && $co_author_approve2 == 'approved') {
                                                                    ?>
                                                                        <div>
                                                                            <img class="rounded-full w-12 h-12 m-auto" src="<?= esc_url(wp_get_attachment_url(get_user_meta($co_author_id2, 'user_profile_image', true)));?>" alt="">
                                                                            <p><?= get_user_meta($co_author_id2, 'first_name', true);?></p>
                                                                        </div>
                                                                    <?php
                                                                }

                                                                // author 3
                                                                if(!empty($co_author_id3) && $co_author_approve3 == 'approved') {
                                                                    ?>
                                                                        <div>
                                                                            <img class="rounded-full w-12 h-12 m-auto" src="<?= esc_url(wp_get_attachment_url(get_user_meta($co_author_id3, 'user_profile_image', true)));?>" alt="">
                                                                            <p><?= get_user_meta($co_author_id3, 'first_name', true);?></p>
                                                                        </div>
                                                                    <?php
                                                                }

                                                            echo '</div>';
                                                            
                                                            // ===
                                                            echo '<div class="flex gap-2 justify-center">';
                                                                // author 4
                                                                if(!empty($co_author_id4) && $co_author_approve4 == 'approved') {
                                                                    ?>
                                                                        <div>
                                                                            <img class="rounded-full w-12 h-12 m-auto" src="<?= esc_url(wp_get_attachment_url(get_user_meta($co_author_id4, 'user_profile_image', true)));?>" alt="">
                                                                            <p><?= get_user_meta($co_author_id4, 'first_name', true);?></p>
                                                                        </div>
                                                                    <?php
                                                                }

                                                                // author 5
                                                                if(!empty($co_author_id5) && $co_author_approve5 == 'approved') {
                                                                    ?>
                                                                        <div>
                                                                            <img class="rounded-full w-12 h-12 m-auto" src="<?= esc_url(wp_get_attachment_url(get_user_meta($co_author_id5, 'user_profile_image', true)));?>" alt="">
                                                                            <p><?= get_user_meta($co_author_id5, 'first_name', true);?></p>
                                                                        </div>
                                                                    <?php
                                                                }

                                                            echo '</div>';
                                                        ?>
                                                    </div>
                                                </td>
                                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                                    <div class="flex items-center space-x-3.5">
                                                        <a href="<?= get_the_permalink()?>" target="_blank" class="hover:text-primary">
                                                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.20624 8.99981 3.20624C14.5686 3.20624 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.5562 8.99981 13.5562C13.1061 13.5562 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.44374 8.99981 4.44374C4.89356 4.44374 2.4748 7.95936 1.85605 8.99999Z"
                                                                    fill=""
                                                                ></path>
                                                                <path
                                                                    d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 7.875C8.38125 7.875 7.875 8.38125 7.875 9C7.875 9.61875 8.38125 10.125 9 10.125C9.61875 10.125 10.125 9.61875 10.125 9C10.125 8.38125 9.61875 7.875 9 7.875Z"
                                                                    fill=""
                                                                ></path>
                                                            </svg>
                                                        </a>
                                                        
                                                        <a href="<?= home_url('/create-new-article/?edit='.get_the_id());?>" class="hover:text-primary">
                                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                        </a>

                                                        <form action="" method="post" class="leading-none">
                                                            <input type="hidden" name="post_id" value="<?= get_the_id();?>">
                                                            <button name="delete_article" class="hover:text-primary">
                                                                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z"
                                                                        fill=""
                                                                    ></path>
                                                                    <path
                                                                        d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z"
                                                                        fill=""
                                                                    ></path>
                                                                    <path
                                                                        d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z"
                                                                        fill=""
                                                                    ></path>
                                                                    <path
                                                                        d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z"
                                                                        fill=""
                                                                    ></path>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        wp_reset_postdata(); // Restore global post data
                                    } else {
                                        // No posts found
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
        <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
</div>
<!-- ===== Page Wrapper End ===== -->

<?php get_footer();?>

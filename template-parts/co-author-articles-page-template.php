<?php 

if(isset($_POST['approve_post'])) {

    $post_id = $_POST['post_id'];
    $user_id = get_current_user_id();

    $co_author_id1 = get_post_meta($post_id, '1_co-author_id', true);
    $co_author_id2 = get_post_meta($post_id, '2_co-author_id', true);
    $co_author_id3 = get_post_meta($post_id, '3_co-author_id', true);
    $co_author_id4 = get_post_meta($post_id, '4_co-author_id', true);
    $co_author_id5 = get_post_meta($post_id, '5_co-author_id', true);

    if( $co_author_id1 == $user_id ) {
        update_post_meta($post_id, '1_co-author_approve', 'approved');
    } else if ( $co_author_id2 == $user_id ) {
        update_post_meta($post_id, '2_co-author_approve', 'approved');
    } else if ( $co_author_id3 == $user_id ) {
        update_post_meta($post_id, '3_co-author_approve', 'approved');
    } else if ( $co_author_id4 == $user_id ) {
        update_post_meta($post_id, '4_co-author_approve', 'approved');
    } else if ( $co_author_id5 == $user_id ) {
        update_post_meta($post_id, '5_co-author_approve', 'approved');
    }

    wp_redirect(home_url('/co-author-articles'));
    exit;
    
}

/* Template Name: Co Author Article List */ 

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
                                        'meta_query'     => array(
                                            'relation' => 'OR',
                                            array(
                                                'key'   => '1_co-author_id',
                                                'value' => $user_id,
                                                'compare' => '=',
                                            ),
                                            array(
                                                'key'   => '2_co-author_id',
                                                'value' => $user_id,
                                                'compare' => '=',
                                            ),
                                            array(
                                                'key'   => '3_co-author_id',
                                                'value' => $user_id,
                                                'compare' => '=',
                                            ),
                                            array(
                                                'key'   => '4_co-author_id',
                                                'value' => $user_id,
                                                'compare' => '=',
                                            ),
                                            array(
                                                'key'   => '5_co-author_id',
                                                'value' => $user_id,
                                                'compare' => '=',
                                            ),
                                        ),
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
                                                    <form action="" method="post">
                                                        <input type="hidden" name="post_id" value="<?= get_the_id()?>">

                                                        <?php

                                                            $co_author_id1 = get_post_meta(get_the_id(), '1_co-author_id', true);
                                                            $co_author_id2 = get_post_meta(get_the_id(), '2_co-author_id', true);
                                                            $co_author_id3 = get_post_meta(get_the_id(), '3_co-author_id', true);
                                                            $co_author_id4 = get_post_meta(get_the_id(), '4_co-author_id', true);
                                                            $co_author_id5 = get_post_meta(get_the_id(), '5_co-author_id', true);

                                                            $co_author_approve1 = get_post_meta(get_the_id(), '1_co-author_approve', true);
                                                            $co_author_approve2 = get_post_meta(get_the_id(), '2_co-author_approve', true);
                                                            $co_author_approve3 = get_post_meta(get_the_id(), '3_co-author_approve', true);
                                                            $co_author_approve4 = get_post_meta(get_the_id(), '4_co-author_approve', true);
                                                            $co_author_approve5 = get_post_meta(get_the_id(), '5_co-author_approve', true);

                                                            if( $co_author_id1 == $user_id && $co_author_approve1 == "approved" ) {
                                                                echo 'Approved';
                                                            } else if ( $co_author_id2 == $user_id && $co_author_approve2 == "approved" ) {
                                                                echo 'Approved';
                                                            } else if ( $co_author_id3 == $user_id && $co_author_approve3 == "approved" ) {
                                                                echo 'Approved';
                                                            } else if ( $co_author_id4 == $user_id && $co_author_approve4 == "approved" ) {
                                                                echo 'Approved';
                                                            } else if ( $co_author_id5 == $user_id && $co_author_approve5 == "approved" ) {
                                                                echo 'Approved';
                                                            } else {
                                                                ?>
                                                                    <button class="rounded bg-primary p-3 font-medium text-gray" name="approve_post">Approve</button>
                                                                <?php
                                                            }
                                                        ?>

                                                    </form>
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

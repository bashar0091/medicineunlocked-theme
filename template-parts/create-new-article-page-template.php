<?php 

auth();

/* Template Name: Create New Article */ 

get_header();

$user_id = get_current_user_id();

if( isset($_GET['edit']) ) {

    $post_id = $_GET['edit'];
    
    $post_title = get_the_title($post_id);
    $post_content = get_post_field('post_content', $post_id);
    $post_content = wpautop($post_content);

}
?>

<div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar Start ===== -->
    <?php require_once('partials/dashboard-sidebar.php');?><!-- ===== Sidebar End ===== -->
    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                <!-- Breadcrumb Start -->
                <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="text-title-md2 font-bold text-black dark:text-white"><?php echo get_the_title();?></h2>
                </div>
                <!-- Breadcrumb End -->
                <!-- ====== Form Layout Section Start -->
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="step_item" id="step1">
                        <!-- Contact Form -->
                        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                            <div class="p-6.5">
                                <div class="mb-4.5">
                                    <label class="mb-2.5 block text-black dark:text-white">Title <span class="text-meta-1">*</span></label>
                                    <input
                                        type="text"
                                        placeholder="Enter your article Title"
                                        class="title_on_change w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                        name="post_title"
                                        value="<?= !empty($post_title) ? $post_title : '';?>"
                                    />
                                </div>

                                <div class="mt-5">
                                    <label class="mb-2.5 block text-black dark:text-white">
                                        Select Category
                                    </label>

                                    <div class="overflow-y-auto	max-h-80 ml-5 pl-5 border-l-4">
                                        
                                        <input type="text" placeholder="Search" class="cat_search_input rounded border-[1.5px] border-stroke bg-transparent py-2 px-5 my-3 w-1/2 font-medium outline-none transition">
                                        
                                        <?php
                                        $categories = get_categories(array(
                                            'hide_empty' => false,
                                        ));

                                        foreach ($categories as $category) {
                                            $checked = '';
                                            $is_subcategory = $category->parent > 0; // Check if the category has a parent

                                            if (isset($_GET['edit'])) {
                                                $edit_categories = get_the_category($post_id);

                                                foreach ($edit_categories as $edit_category) {
                                                    if ($edit_category->cat_ID == $category->term_id) {
                                                        $checked = 'checked';
                                                        break;
                                                    }
                                                }
                                            }

                                            ?>
                                            <label for="<?= $category->term_id; ?>_cat" class="cat_search_label mb-7 block cursor-pointer flex items-center gap-3<?= $is_subcategory ? ' sub_cat' : ''; ?>">
                                                <input type="checkbox" id="<?= $category->term_id; ?>_cat" value="<?= $category->term_id; ?>"
                                                    class="category_check" <?= $checked; ?> />
                                                <?= $category->name; ?>
                                            </label>
                                            <?php
                                        }
                                        ?>

                                    </div>

                                    <input type="hidden" class="category_hidden_input" name="category[]" value="<?php
                                        foreach ($edit_categories as $edit_category) { 
                                            echo $edit_category->term_id.',';
                                        }
                                    ?>">
                                    
                                </div>

                                <div class="mt-5">
                                    <label class="mb-2.5 block text-black dark:text-white">
                                        Add Co-Author
                                    </label>

                                    <input type="hidden" class="coauthor_hidden_input" name="co_author[]" value="">
                                    
                                    <div class="overflow-y-auto	max-h-80 ml-5 pl-5 border-l-4">
										<input type="text" placeholder="Search" class="author_search_input rounded border-[1.5px] border-stroke bg-transparent py-2 px-5 my-3 w-1/2 font-medium outline-none transition">
                                        <?php
                                            $user_query = new WP_User_Query(array(
                                                'orderby' => 'ID', // Order users by user ID
                                                'order' => 'ASC',   // Order in ascending order
                                            ));
                                            $users = $user_query->get_results();

                                            foreach ($users as $user) {

                                                if( $user->ID == $user_id) {
                                                    continue;
                                                }
                                                
                                                $user_profile_image = get_user_meta($user->ID, 'user_profile_image', true);
                                        ?>
                                            <label for="<?= $user->ID;?>_co" class="author_search_label mb-7 block cursor-pointer flex items-center gap-3">
                                                <input type="checkbox" id="<?= $user->ID;?>_co" value="<?= $user->ID;?>" class="co_author_check" />
                                                <?= esc_html($user->first_name . ' ' . $user->last_name);?>
                                                <img class="rounded-full w-12 h-12" src="<?= !empty($user_profile_image) ? esc_url(wp_get_attachment_url($user_profile_image)) : 'https://via.placeholder.com/120/FD7E35/fff?text=User';?>" alt="">
                                            </label>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    
                                </div>

                                <div class="mt-4">
                                    <a href="#!" id="step_1_next_btn" class="inline-block rounded bg-primary p-3 font-medium text-white">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step_item" id="step2">
                        <!-- Contact Form -->
                        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                            <div class="p-6.5">

                                <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
                                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
                                <div class="mb-6">
                                    <label class="mb-2.5 block text-black dark:text-white">Content</label>
                                    <textarea
                                        rows="6"
                                        placeholder="Type your Content"
                                        id="editor"
                                        class="content_on_change w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                        name="post_content"
                                    ><?= !empty($post_content) ? $post_content : '';?></textarea>
                                </div>
                                <script>
                                    jQuery('#editor').summernote({
                                        height: 500,
                                        toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                        ]
                                    });   
                                </script>

                                <div>
                                    <a href="#!" id="step_2_prev_btn" class="rounded bg-secondary p-3 font-medium text-white">Previous</a>
                                    <a href="#!" id="step_2_next_btn" class="rounded bg-primary p-3 font-medium text-white">Next</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="step_item" id="step3">
                        <!-- Contact Form -->
                        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark p-6.5">
                            
                            <div class="image-container">

                                <div id="loadeer">
                                    <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/loader.gif'?>" alt="">
                                </div>

                                <div class="ai_image">
                                    <div class="mb-4.5">
                                        <textarea rows="5" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" id="image_generator_text"  placeholder="Describe what you'd like to create"></textarea>
                                    </div>

                                    <div>
                                        <a href="#!" class="mb-3 inline-flex items-center justify-center rounded-md border border-primary text-center font-medium text-primary hover:bg-opacity-90 p-2" id="generate_button">Generate Image</a>
                                    </div>
                                </div>

                                <div class="upload_image">
                                    <img id="preview_img" class="object-cover mb-4" src="" style="width: 200px;"/>
                                    <div id="FileUpload" class="relative mb-5.5 block w-full cursor-pointer appearance-none rounded border-2 border-dashed border-primary bg-gray py-4 px-4 dark:bg-meta-4 sm:py-7.5">
                                        <input type="file" name="post_image" onchange="loadFile(event)" accept="image/*" class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none" />
                                        <div class="flex flex-col items-center justify-center space-y-3">
                                            <span class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-strokedark dark:bg-boxdark">
                                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M1.99967 9.33337C2.36786 9.33337 2.66634 9.63185 2.66634 10V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H12.6663C12.8431 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V10C13.333 9.63185 13.6315 9.33337 13.9997 9.33337C14.3679 9.33337 14.6663 9.63185 14.6663 10V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V10C1.33301 9.63185 1.63148 9.33337 1.99967 9.33337Z"
                                                        fill="#3C50E0"
                                                    ></path>
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M7.5286 1.52864C7.78894 1.26829 8.21106 1.26829 8.4714 1.52864L11.8047 4.86197C12.0651 5.12232 12.0651 5.54443 11.8047 5.80478C11.5444 6.06513 11.1223 6.06513 10.8619 5.80478L8 2.94285L5.13807 5.80478C4.87772 6.06513 4.45561 6.06513 4.19526 5.80478C3.93491 5.54443 3.93491 5.12232 4.19526 4.86197L7.5286 1.52864Z"
                                                        fill="#3C50E0"
                                                    ></path>
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M7.99967 1.33337C8.36786 1.33337 8.66634 1.63185 8.66634 2.00004V10C8.66634 10.3682 8.36786 10.6667 7.99967 10.6667C7.63148 10.6667 7.33301 10.3682 7.33301 10V2.00004C7.33301 1.63185 7.63148 1.33337 7.99967 1.33337Z"
                                                        fill="#3C50E0"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <p class="text-sm font-medium"><span class="text-primary">Featured Image</span></p>
                                            <p class="mt-1.5 text-sm font-medium">SVG, PNG, JPG or GIF</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div x-data="{ switcherToggle: false }" class="mb-3">

                                <label for="toggle4" class="mb-3 flex cursor-pointer select-none items-center image_generator_btn">
                                    <div class="relative mr-3">
                                        <input type="checkbox" id="toggle4" class="sr-only" @change="switcherToggle = !switcherToggle" />
                                        <div :class="switcherToggle &amp;&amp; '!bg-primary'" class="block h-8 w-14 rounded-full bg-black"></div>
                                        <div :class="switcherToggle &amp;&amp; '!right-1 !translate-x-full'" class="absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full bg-white transition"></div>
                                    </div>

                                    Use AI Image for Thumbnail
                                </label>

                            </div>

                            <div class="mt-4">
                                <a href="#!" id="step_3_prev_btn" class="inline-block rounded bg-secondary p-3 font-medium text-white">Previous</a>
                                <a href="#!" id="step_3_next_btn" class="inline-block rounded bg-primary p-3 font-medium text-white">Next</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="step_item" id="step4">
                        <!-- Contact Form -->
                        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark p-6.5">
                        
                            <div class="mb-4.5">
                                <label class="mb-2.5 block text-black dark:text-white">Title <span class="text-meta-1">*</span></label>
                                <div class="title_on_show w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                </div>
                            </div>

                            <div class="mb-4.5">
                                <label class="mb-2.5 block text-black dark:text-white">Content <span class="text-meta-1">*</span></label>
                                <div class="content_on_show w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                </div>
                                <a href="#!" class="mb-3 inline-flex items-center justify-center rounded-md border border-primary text-center font-medium text-primary hover:bg-opacity-90 p-2" id="grammer_check_button">Correct Grammer</a>
                            </div>

                            <div class="image-container">
                                <div class="upload_image">
                                    <img id="preview_img2" class="object-cover mb-4" src=""  style="width: 200px;" />
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <a href="#!" id="step_4_prev_btn" class="rounded bg-secondary p-3 font-medium text-white">Previous</a>
                                <?php 
                                    if( isset($_GET['edit']) ) {
                                        ?>
                                            <input type="hidden" name="post_id" value="<?= $post_id?>">
                                            <button class="rounded bg-primary p-3 font-medium text-gray" name="update_article">Update Article</button>
                                        <?php
                                    } else {
                                        ?>
                                            <button class="rounded bg-primary p-3 font-medium text-gray" name="create_post_btn">Publish Article</button>
                                        <?php
                                    }
                                ?>
                                
                            </div>
                            
                        </div>
                    </div>
                </form>
                <!-- ====== Form Layout Section End -->
            </div>
        </main>
        <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
</div>
<!-- ===== Page Wrapper End ===== -->

<?php get_footer();?>

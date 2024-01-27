<?php 

/* Template Name: Author Result */ 

get_header();

?>

<section class="bg_color1 py-20">
    <div class="container mx-auto px-5">
        <div class="flex flex-col gap-7.5">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        
                <div class="p-4 sm:p-6 xl:p-9">
                    <div class="grid grid-cols-1 gap-15 py-4 sm:grid-cols-2 sm:py-6 xl:grid-cols-4 xl:py-7.5 2xl:py-15">
                       
                        <?php
                            $user_query = new WP_User_Query(array(
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                // 'meta_query' => array(
                                //     'relation' => 'OR',
                                //     array(
                                //         'key'     => 'first_name',
                                //         'value'   => $_GET['keyword'],
                                //         'compare' => 'LIKE',
                                //     ),
                                //     array(
                                //         'key'     => 'last_name',
                                //         'value'   => $_GET['keyword'],
                                //         'compare' => 'LIKE',
                                //     ),
                                // ),
                            ));
                            $users = $user_query->get_results();

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
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
?>
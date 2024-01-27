<?php 

/* Template Name: Subscription */ 

get_header();
?>

<section class="bg_color1 py-20">
    <div class="container mx-auto px-5">

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-3 2xl:gap-7.5 items-start">
            <!-- Pricing Item -->
            <div class="relative rounded-sm border border-stroke bg-white p-6 shadow-default dark:border-strokedark dark:bg-boxdark md:p-9 xl:p-11.5">
                <span class="mb-2.5 block text-title-sm2 font-bold text-black dark:text-white">JOIN MEDICINE UNLOCKED!</span>
                <h3>
                    <span class="text-xl font-medium text-black dark:text-white">$</span>
                    <span class="text-title-xxl2 font-bold text-black dark:text-white"> 70.00</span>
                    <span class="font-medium"> Per Year</span>
                </h3>

                <ul class="mt-5 flex flex-col gap-3.5">
                    <li class="font-medium">Craft your own author profile, add a bio, and showcase your publications.</li>
                    <li class="font-medium">Publish articles that gain visibility on the platform and on Google under your name.</li>
                    <li class="font-medium">Add these publications to your CV, graduate school applications, and everywhere else as non-peer reviewed publications!</li>
                    <li class="font-medium">Set yourself apart from the competition by earning unique profile badges for completing different tasks!</li>
                    <li class="font-medium">Your most popular articles will have a chance to be featured on our social media profiles.</li>
                    <li class="font-medium">Get exclusive invitations to subscriber-only Instagram live sessions with top medical influencers.</li>
                    <li class="font-medium">Build a permanent author profile and showcase that you are a pioneer of a thriving community!</li>
                </ul>

                <a href="<?= home_url('/subscription-form/?type=subscription');?>" class="inline-block mt-9 rounded-md border border-primary px-9 py-3 font-medium text-primary hover:bg-primary hover:text-white">
                    Subscribe
                </a>
            </div>

            <!-- Pricing Item -->
            <div class="relative rounded-sm border border-stroke bg-white p-6 shadow-default dark:border-strokedark dark:bg-boxdark md:p-9 xl:p-11.5">
                <span class="absolute -right-1 top-3.5">
                    <svg width="109" height="34" viewBox="0 0 109 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 0L106 0C107.657 0 109 1.34315 109 3V30L24 30L24 0Z" fill="#3C50E0"></path>
                        <foreignObject x="24" y="0" width="81" height="30">
                            <div xmlns="http://www.w3.org/1999/xhtml">
                                <div class="mt-1 text-center font-satoshi text-sm font-medium text-white">
                                    Free
                                </div>
                            </div>
                        </foreignObject>
                        <path d="M0 0H24V30H0L19 15L0 0Z" fill="#3C50E0"></path>
                        <path d="M105 34L109 30H105V34Z" fill="#2539C8"></path>
                    </svg>
                </span>
                <span class="mb-2.5 block text-title-sm2 font-bold text-black dark:text-white">JOIN MEDICINE UNLOCKED!</span>
                <h3>
                    <span class="font-medium">For NSU and LMU students</span>
                </h3>

                <a href="<?= home_url('/subscription-form/?type=free');?>" class="inline-block mt-9 rounded-md border border-primary px-9 py-3 font-medium text-primary hover:bg-primary hover:text-white">
                    Subscribe
                </a>
            </div>

        </div>

        
    </div>
</section>

<?php
get_footer();
?>
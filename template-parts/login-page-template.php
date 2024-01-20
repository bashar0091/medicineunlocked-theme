<?php 
/* Template Name: Login */ 

// redirect if user is logged in 
if( is_user_logged_in()  ) {
    wp_redirect( home_url('/user-dashboard') );
    exit;
}

get_header();
?>

<style>
    #site-header,#site-footer {
        display: none !important;
    }
</style>

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">
    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden flex justify-center">

        <!-- ===== Main Content Start ===== -->
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

                <!-- ====== Forms Section Start -->
                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="flex flex-wrap items-center bg-black">
                        <div class="hidden w-full xl:block xl:w-1/2">
                            <div class="py-17.5 px-26 text-center">
                                <a class="mb-5.5 inline-block" href="index.html">
                                    <?php
                                    if ( has_custom_logo() ) {
                                        the_custom_logo();
                                    } 
                                    ?>
                                </a>
                            </div>
                        </div>
                        <div class="w-full border-stroke dark:border-strokedark xl:w-1/2 xl:border-l-2 bg-white">
                            <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
                                <h2 class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
                                    Login
                                </h2>

                                <form method="post" action="">
                                    <div class="mb-4">
                                        <label class="mb-2.5 block font-medium text-black dark:text-white">Username or Email</label>
                                        <div class="relative">
                                            <input
                                                type="text"
                                                placeholder="Enter your username or email"
                                                class="w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                                name="email"
                                                required
                                            />

                                            <span class="absolute right-4 top-4">
                                                <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.5">
                                                        <path
                                                            d="M19.2516 3.30005H2.75156C1.58281 3.30005 0.585938 4.26255 0.585938 5.46567V16.6032C0.585938 17.7719 1.54844 18.7688 2.75156 18.7688H19.2516C20.4203 18.7688 21.4172 17.8063 21.4172 16.6032V5.4313C21.4172 4.26255 20.4203 3.30005 19.2516 3.30005ZM19.2516 4.84692C19.2859 4.84692 19.3203 4.84692 19.3547 4.84692L11.0016 10.2094L2.64844 4.84692C2.68281 4.84692 2.71719 4.84692 2.75156 4.84692H19.2516ZM19.2516 17.1532H2.75156C2.40781 17.1532 2.13281 16.8782 2.13281 16.5344V6.35942L10.1766 11.5157C10.4172 11.6875 10.6922 11.7563 10.9672 11.7563C11.2422 11.7563 11.5172 11.6875 11.7578 11.5157L19.8016 6.35942V16.5688C19.8703 16.9125 19.5953 17.1532 19.2516 17.1532Z"
                                                            fill=""
                                                        />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <label class="mb-2.5 block font-medium text-black dark:text-white">Password</label>
                                        <div class="relative">
                                            <input
                                                type="password"
                                                placeholder="Enter your password"
                                                class="w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                                name="password"
                                                required
                                            />

                                            <span class="absolute right-4 top-4">
                                                <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.5">
                                                        <path
                                                            d="M16.1547 6.80626V5.91251C16.1547 3.16251 14.0922 0.825009 11.4797 0.618759C10.0359 0.481259 8.59219 0.996884 7.52656 1.95938C6.46094 2.92188 5.84219 4.29688 5.84219 5.70626V6.80626C3.84844 7.18438 2.33594 8.93751 2.33594 11.0688V17.2906C2.33594 19.5594 4.19219 21.3813 6.42656 21.3813H15.5016C17.7703 21.3813 19.6266 19.525 19.6266 17.2563V11C19.6609 8.93751 18.1484 7.21876 16.1547 6.80626ZM8.55781 3.09376C9.31406 2.40626 10.3109 2.06251 11.3422 2.16563C13.1641 2.33751 14.6078 3.98751 14.6078 5.91251V6.70313H7.38906V5.67188C7.38906 4.70938 7.80156 3.78126 8.55781 3.09376ZM18.1141 17.2906C18.1141 18.7 16.9453 19.8688 15.5359 19.8688H6.46094C5.05156 19.8688 3.91719 18.7344 3.91719 17.325V11.0688C3.91719 9.52189 5.15469 8.28438 6.70156 8.28438H15.2953C16.8422 8.28438 18.1141 9.52188 18.1141 11V17.2906Z"
                                                            fill=""
                                                        />
                                                        <path
                                                            d="M10.9977 11.8594C10.5852 11.8594 10.207 12.2031 10.207 12.65V16.2594C10.207 16.6719 10.5508 17.05 10.9977 17.05C11.4102 17.05 11.7883 16.7063 11.7883 16.2594V12.6156C11.7883 12.2031 11.4102 11.8594 10.9977 11.8594Z"
                                                            fill=""
                                                        />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="mt-5 mb-5.5 flex items-center justify-between">
                                        <label for="formCheckbox" class="flex cursor-pointer">
                                        <div class="relative pt-0.5">
                                            <input type="checkbox" name="rememberme" id="formCheckbox" class="taskCheckbox sr-only">
                                            <div class="box mr-3 flex h-5 w-5 items-center justify-center rounded border border-stroke dark:border-form-strokedark dark:bg-form-input">
                                            <span class="text-white opacity-0">
                                                <svg class="fill-current" width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.70685 0.292804C9.89455 0.480344 10 0.734667 10 0.999847C10 1.26503 9.89455 1.51935 9.70685 1.70689L4.70059 6.7072C4.51283 6.89468 4.2582 7 3.9927 7C3.72721 7 3.47258 6.89468 3.28482 6.7072L0.281063 3.70701C0.0986771 3.5184 -0.00224342 3.26578 3.785e-05 3.00357C0.00231912 2.74136 0.10762 2.49053 0.29326 2.30511C0.4789 2.11969 0.730026 2.01451 0.992551 2.01224C1.25508 2.00996 1.50799 2.11076 1.69683 2.29293L3.9927 4.58607L8.29108 0.292804C8.47884 0.105322 8.73347 0 8.99896 0C9.26446 0 9.51908 0.105322 9.70685 0.292804Z" fill=""></path>
                                                </svg>
                                            </span>
                                            </div>
                                        </div>
                                        <p>Remember me</p>
                                        </label>

                                        <a href="#" class="text-sm text-primary">Forget password?</a>
                                    </div>

                                    <div class="mb-5">
                                        <input type="submit" name="sign_in_btn" value="Sign In" class="w-full cursor-pointer rounded-lg border bg_color4 p-4 font-medium text-white" />
                                    </div>

                                    <div class="mt-6 text-center">
                                        <p class="font-medium">
                                            Don’t have any account?
                                            <a href="signup.html" class="text-primary">Sign Up</a>
                                        </p>
                                    </div>
                                </form>

                                <?php 
                                    if( isset($_GET['failed']) == 'true' ) {
                                        ?>
                                        <div class="mt-5 flex w-full border-l-6 border-[#F87171] bg-[#F87171] bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
                                            <div class="w-full">
                                                <h5 class="font-bold text-[#B45454]">
                                                user or password doesn't match
                                                </h5>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ====== Forms Section End -->
            </div>
        </main>
        <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
</div>
<!-- ===== Page Wrapper End ===== -->

<?php get_footer();?>
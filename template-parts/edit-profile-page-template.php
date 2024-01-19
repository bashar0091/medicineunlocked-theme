<?php 
/* Template Name: Edit Profile */ 

get_header();
?>

<div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar Start ===== -->
    <?php require_once('partials/dashboard-sidebar.php');?><!-- ===== Sidebar End ===== -->
    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                <div class="mx-auto">
                    <!-- Breadcrumb Start -->
                    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <h2 class="text-title-md2 font-bold text-black dark:text-white">
                            Edit Profile
                        </h2>
                        <a href="<?php echo home_url('/user-profile');?>" class="inline-flex items-center justify-center bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                            View Profile
                        </a>
                    </div>
                    <!-- Breadcrumb End -->

                    <!-- ====== Settings Section Start -->
                    <div class="grid grid-cols-5 gap-8">
                        <div class="col-span-5 xl:col-span-3">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                                    <h3 class="font-medium text-black dark:text-white">
                                        Personal Information
                                    </h3>
                                </div>
                                <div class="p-7">

                                    <?php 
										$current_user_id = get_current_user_id();

										$first_name = get_user_meta($current_user_id, 'first_name', true);
										$last_name = get_user_meta($current_user_id, 'last_name', true);
										$designation = get_user_meta($current_user_id, 'designation', true);
										$description = get_user_meta($current_user_id, 'description', true);
										$user_profile_image = get_user_meta($current_user_id, 'user_profile_image', true);
																	
									?>

                                    <form action="#">
                                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                                            <div class="w-full sm:w-1/2">
                                                <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="first_name">First Name</label>
                                                <div class="relative">
                                                    <span class="absolute left-4.5 top-4">
                                                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.8">
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M3.72039 12.887C4.50179 12.1056 5.5616 11.6666 6.66667 11.6666H13.3333C14.4384 11.6666 15.4982 12.1056 16.2796 12.887C17.061 13.6684 17.5 14.7282 17.5 15.8333V17.5C17.5 17.9602 17.1269 18.3333 16.6667 18.3333C16.2064 18.3333 15.8333 17.9602 15.8333 17.5V15.8333C15.8333 15.1703 15.5699 14.5344 15.1011 14.0655C14.6323 13.5967 13.9964 13.3333 13.3333 13.3333H6.66667C6.00363 13.3333 5.36774 13.5967 4.8989 14.0655C4.43006 14.5344 4.16667 15.1703 4.16667 15.8333V17.5C4.16667 17.9602 3.79357 18.3333 3.33333 18.3333C2.8731 18.3333 2.5 17.9602 2.5 17.5V15.8333C2.5 14.7282 2.93899 13.6684 3.72039 12.887Z"
                                                                    fill=""
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M9.99967 3.33329C8.61896 3.33329 7.49967 4.45258 7.49967 5.83329C7.49967 7.214 8.61896 8.33329 9.99967 8.33329C11.3804 8.33329 12.4997 7.214 12.4997 5.83329C12.4997 4.45258 11.3804 3.33329 9.99967 3.33329ZM5.83301 5.83329C5.83301 3.53211 7.69849 1.66663 9.99967 1.66663C12.3009 1.66663 14.1663 3.53211 14.1663 5.83329C14.1663 8.13448 12.3009 9.99996 9.99967 9.99996C7.69849 9.99996 5.83301 8.13448 5.83301 5.83329Z"
                                                                    fill=""
                                                                ></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input
                                                        class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                                        type="text"
                                                        name="first_name"
                                                        id="first_name"
                                                        placeholder="First Name"
                                                        value="<?php echo $first_name;?>"
                                                        required
                                                    />
                                                </div>
                                            </div>

                                            <div class="w-full sm:w-1/2">
                                                <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="last_name">Last Name</label>
                                                <div class="relative">
                                                    <span class="absolute left-4.5 top-4">
                                                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.8">
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M3.72039 12.887C4.50179 12.1056 5.5616 11.6666 6.66667 11.6666H13.3333C14.4384 11.6666 15.4982 12.1056 16.2796 12.887C17.061 13.6684 17.5 14.7282 17.5 15.8333V17.5C17.5 17.9602 17.1269 18.3333 16.6667 18.3333C16.2064 18.3333 15.8333 17.9602 15.8333 17.5V15.8333C15.8333 15.1703 15.5699 14.5344 15.1011 14.0655C14.6323 13.5967 13.9964 13.3333 13.3333 13.3333H6.66667C6.00363 13.3333 5.36774 13.5967 4.8989 14.0655C4.43006 14.5344 4.16667 15.1703 4.16667 15.8333V17.5C4.16667 17.9602 3.79357 18.3333 3.33333 18.3333C2.8731 18.3333 2.5 17.9602 2.5 17.5V15.8333C2.5 14.7282 2.93899 13.6684 3.72039 12.887Z"
                                                                    fill=""
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M9.99967 3.33329C8.61896 3.33329 7.49967 4.45258 7.49967 5.83329C7.49967 7.214 8.61896 8.33329 9.99967 8.33329C11.3804 8.33329 12.4997 7.214 12.4997 5.83329C12.4997 4.45258 11.3804 3.33329 9.99967 3.33329ZM5.83301 5.83329C5.83301 3.53211 7.69849 1.66663 9.99967 1.66663C12.3009 1.66663 14.1663 3.53211 14.1663 5.83329C14.1663 8.13448 12.3009 9.99996 9.99967 9.99996C7.69849 9.99996 5.83301 8.13448 5.83301 5.83329Z"
                                                                    fill=""
                                                                ></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <input
                                                        class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                                        type="text"
                                                        name="last_name"
                                                        id="last_name"
                                                        placeholder="Last Name"
                                                        value="<?php echo $last_name;?>"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-5.5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="designation">Designation</label>
                                            <div class="relative">
                                                <input
                                                    class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                                    type="text"
                                                    name="designation"
                                                    id="designation"
                                                    placeholder="Designation"
                                                    value="<?php echo $designation;?>"
                                                />
                                            </div>
                                        </div>

                                        <div class="mb-5.5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="Username">BIO</label>
                                            <div class="relative">
                                                <span class="absolute left-4.5 top-4">
                                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.8" clip-path="url(#clip0_88_10224)">
                                                            <path
                                                                fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M1.56524 3.23223C2.03408 2.76339 2.66997 2.5 3.33301 2.5H9.16634C9.62658 2.5 9.99967 2.8731 9.99967 3.33333C9.99967 3.79357 9.62658 4.16667 9.16634 4.16667H3.33301C3.11199 4.16667 2.90003 4.25446 2.74375 4.41074C2.58747 4.56702 2.49967 4.77899 2.49967 5V16.6667C2.49967 16.8877 2.58747 17.0996 2.74375 17.2559C2.90003 17.4122 3.11199 17.5 3.33301 17.5H14.9997C15.2207 17.5 15.4326 17.4122 15.5889 17.2559C15.7452 17.0996 15.833 16.8877 15.833 16.6667V10.8333C15.833 10.3731 16.2061 10 16.6663 10C17.1266 10 17.4997 10.3731 17.4997 10.8333V16.6667C17.4997 17.3297 17.2363 17.9656 16.7674 18.4344C16.2986 18.9033 15.6627 19.1667 14.9997 19.1667H3.33301C2.66997 19.1667 2.03408 18.9033 1.56524 18.4344C1.0964 17.9656 0.833008 17.3297 0.833008 16.6667V5C0.833008 4.33696 1.0964 3.70107 1.56524 3.23223Z"
                                                                fill=""
                                                            ></path>
                                                            <path
                                                                fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M16.6664 2.39884C16.4185 2.39884 16.1809 2.49729 16.0056 2.67253L8.25216 10.426L7.81167 12.188L9.57365 11.7475L17.3271 3.99402C17.5023 3.81878 17.6008 3.5811 17.6008 3.33328C17.6008 3.08545 17.5023 2.84777 17.3271 2.67253C17.1519 2.49729 16.9142 2.39884 16.6664 2.39884ZM14.8271 1.49402C15.3149 1.00622 15.9765 0.732178 16.6664 0.732178C17.3562 0.732178 18.0178 1.00622 18.5056 1.49402C18.9934 1.98182 19.2675 2.64342 19.2675 3.33328C19.2675 4.02313 18.9934 4.68473 18.5056 5.17253L10.5889 13.0892C10.4821 13.196 10.3483 13.2718 10.2018 13.3084L6.86847 14.1417C6.58449 14.2127 6.28409 14.1295 6.0771 13.9225C5.87012 13.7156 5.78691 13.4151 5.85791 13.1312L6.69124 9.79783C6.72787 9.65131 6.80364 9.51749 6.91044 9.41069L14.8271 1.49402Z"
                                                                fill=""
                                                            ></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_88_10224">
                                                                <rect width="20" height="20" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>

                                                <textarea
                                                    class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                                    name="bio"
                                                    id="bio"
                                                    rows="6"
                                                    placeholder="Write your bio here"
                                                ><?php echo $description;?></textarea>
                                            </div>
                                        </div>

                                        <div class="flex justify-end gap-4.5">
                                            <button class="flex justify-center rounded bg-primary py-2 px-6 font-medium text-gray hover:bg-opacity-90" type="submit">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-5 xl:col-span-2">
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                                    <h3 class="font-medium text-black dark:text-white">
                                        Your Photo
                                    </h3>
                                </div>
                                <div class="p-7">
                                    <form action="#">
                                        <div class="mb-4 flex items-center gap-3">
                                            <div class="h-14 w-14 rounded-full">
                                                <?php 
                                                    if(!empty($user_profile_image)) {
                                                        echo '<img src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
                                                    } else {
                                                        echo '<img src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
                                                    }
                                                ?>
                                            </div>
                                            <div>
                                                <span class="mb-1.5 font-medium text-black dark:text-white">Edit your photo</span>
                                                <span class="flex gap-2.5">
                                                    <button class="text-sm font-medium hover:text-primary">
                                                        Delete
                                                    </button>
                                                    <button class="text-sm font-medium hover:text-primary">
                                                        Update
                                                    </button>
                                                </span>
                                            </div>
                                        </div>

                                        <div id="FileUpload" class="relative mb-5.5 block w-full cursor-pointer appearance-none rounded border-2 border-dashed border-primary bg-gray py-4 px-4 dark:bg-meta-4 sm:py-7.5">
                                            <input type="file" accept="image/*" class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none" />
                                            <div class="flex flex-col items-center justify-center space-y-3">
                                                <span class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-strokedark dark:bg-boxdark">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                <p class="text-sm font-medium">
                                                    <span class="text-primary">Click to upload</span>
                                                    or drag and drop
                                                </p>
                                                <p class="mt-1.5 text-sm font-medium">
                                                    SVG, PNG, JPG or GIF
                                                </p>
                                                <p class="text-sm font-medium">
                                                    (max, 800 X 800px)
                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex justify-end gap-4.5">
                                            <button class="flex justify-center rounded border border-stroke py-2 px-6 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white" type="submit">
                                                Cancel
                                            </button>
                                            <button class="flex justify-center rounded bg-primary py-2 px-6 font-medium text-gray hover:bg-opacity-90" type="submit">
                                                Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ====== Settings Section End -->
                </div>
            </div>
        </main>


    </div>
    <!-- ===== Content Area End ===== -->
</div>
<!-- ===== Page Wrapper End ===== -->

<?php get_footer();?>

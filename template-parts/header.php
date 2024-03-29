<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<header class="bg_colorN1 py-2">
	<div class="custom_container_lg">

		<div class="flex justify-between">
			<div class="flex items-center gap-5">
				<a href="#!" class="menu_open_wrap menu_open_click">
					<span class="humberger"></span>
					<span class="humberger"></span>
					<span class="humberger"></span>
				</a>
				<!-- logo -->
				<a href="<?php echo home_url('/');?>" class="logo_wrap">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
						echo '<img src="'.$logo_url.'" alt="Logo" />';
					?>
				</a>
			</div>
			
			<div class="flex items-center gap-7">

				<?php 
				if( !is_user_logged_in()  ) {
					?>
					<a href="<?php echo home_url('/login');?>" class="d_none_mob text-white">Sign In</a>
					<a href="<?= home_url('/subscription');?>" class="d_none_mob custom_btn">Subscribe</a>
					<?php
				} else {
					?>
					<!-- User Area -->
					<div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
						<a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
							<span class="hidden text-right lg:block">
								<span class="block text-sm font-medium text-white">
									<?php 
										$current_user = wp_get_current_user();

										if ($current_user->exists()) {
											$first_name = $current_user->first_name;
											$last_name = $current_user->last_name;
										
											if( !empty($first_name) || !empty($last_name) ) {
												echo $first_name . ' ' . $last_name; 
											} else {
												echo "User"; 
											}
										}
									?>
								</span>
							</span>

							<span class="h-12 w-12 rounded-full">
								<?php 
									$current_user_id = get_current_user_id();
									$user_profile_image = get_user_meta($current_user_id, 'user_profile_image', true);
									if(!empty($user_profile_image)) {
										echo '<img class="w-full h-full object-cover rounded-full" src="'.wp_get_attachment_url($user_profile_image).'" alt="User" />';
									} else {
										echo '<img class="w-full h-full object-cover rounded-full" src="https://via.placeholder.com/120/FD7E35/fff?text=User" alt="User" />';
									}
								?>
							</span>

							<svg :class="dropdownOpen &amp;&amp; 'rotate-180'" class="hidden fill-current sm:block" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									fill-rule="evenodd"
									clip-rule="evenodd"
									d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
									fill=""
								></path>
							</svg>
						</a>

						<!-- Dropdown Start -->
						<div x-show="dropdownOpen" class="z-40 absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark" style="display: none;">
							<ul class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark">
								<li>
									<a href="<?php echo home_url('/user-profile');?>" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
										<svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z"
												fill=""
											></path>
											<path
												d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z"
												fill=""
											></path>
										</svg>
										Profile
									</a>
								</li>
								<li>
									<a href="<?php echo home_url('user-dashboard');?>" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
										<svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4187 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.5281 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5625C16.9469 19.2844 16.3625 19.8344 15.6406 19.8344H7.3906C7.04685 19.8344 6.77185 19.5594 6.77185 19.2156V17.875H8.6281C9.0406 17.875 9.41873 17.5312 9.41873 17.0844C9.41873 16.6375 9.07498 16.2937 8.6281 16.2937H6.77185V11.7906H8.6281C9.0406 11.7906 9.41873 11.4469 9.41873 11C9.41873 10.5875 9.07498 10.2094 8.6281 10.2094H6.77185V5.63749H8.6281C9.0406 5.63749 9.41873 5.29374 9.41873 4.84687C9.41873 4.39999 9.07498 4.05624 8.6281 4.05624H6.77185V2.74999C6.77185 2.40624 7.04685 2.13124 7.3906 2.13124H15.6406C15.9844 2.13124 16.2937 2.26874 16.5687 2.50937C16.8094 2.74999 16.9469 3.09374 16.9469 3.43749V18.5625Z"
												fill=""
											></path>
										</svg>
										Dashboard
									</a>
								</li>
							</ul>
							<a href="<?php echo wp_logout_url(home_url());?>" class="flex items-center gap-3.5 py-4 px-6 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
								<svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z"
										fill=""
									/>
									<path
										d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z"
										fill=""
									/>
								</svg>
								Log Out
							</a>
						</div>
						<!-- Dropdown End -->
					</div>
					<!-- User Area -->

					<div class="relative" x-data="{ dropdownOpen: false, notifying: true }" @click.outside="dropdownOpen = false">
						<a
							class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
							href="#"
							@click.prevent="dropdownOpen = ! dropdownOpen; notifying = false"
						>
							<span :class="!notifying &amp;&amp; 'hidden'" class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-meta-1">
								<span class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"></span>
							</span>

							<svg class="fill-current duration-300 ease-in-out" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M16.1999 14.9343L15.6374 14.0624C15.5249 13.8937 15.4687 13.7249 15.4687 13.528V7.67803C15.4687 6.01865 14.7655 4.47178 13.4718 3.31865C12.4312 2.39053 11.0812 1.7999 9.64678 1.6874V1.1249C9.64678 0.787402 9.36553 0.478027 8.9999 0.478027C8.6624 0.478027 8.35303 0.759277 8.35303 1.1249V1.65928C8.29678 1.65928 8.24053 1.65928 8.18428 1.6874C4.92178 2.05303 2.4749 4.66865 2.4749 7.79053V13.528C2.44678 13.8093 2.39053 13.9499 2.33428 14.0343L1.7999 14.9343C1.63115 15.2155 1.63115 15.553 1.7999 15.8343C1.96865 16.0874 2.2499 16.2562 2.55928 16.2562H8.38115V16.8749C8.38115 17.2124 8.6624 17.5218 9.02803 17.5218C9.36553 17.5218 9.6749 17.2405 9.6749 16.8749V16.2562H15.4687C15.778 16.2562 16.0593 16.0874 16.228 15.8343C16.3968 15.553 16.3968 15.2155 16.1999 14.9343ZM3.23428 14.9905L3.43115 14.653C3.5999 14.3718 3.68428 14.0343 3.74053 13.6405V7.79053C3.74053 5.31553 5.70928 3.23428 8.3249 2.95303C9.92803 2.78428 11.503 3.2624 12.6562 4.2749C13.6687 5.1749 14.2312 6.38428 14.2312 7.67803V13.528C14.2312 13.9499 14.3437 14.3437 14.5968 14.7374L14.7655 14.9905H3.23428Z"
									fill=""
								></path>
							</svg>
						</a>

						<!-- Dropdown Start -->
						<div x-show="dropdownOpen" class="absolute -right-27 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80 z-50" style="display: none;">
							<div class="px-4.5 py-3">
								<h5 class="text-sm font-medium text-bodydark2">Notification</h5>
							</div>

							<ul class="flex h-auto flex-col overflow-y-auto">
								
								<?php 
									$user_id = get_current_user_id();

									$args = array(
										'post_type' => 'notification',
										'posts_per_page' => -1,
										'author' => $user_id,
									);
									
									$query = new WP_Query($args);
									
									if ($query->have_posts()) {
										while ($query->have_posts()) {
										$query->the_post();
								?>
									<li>
										<a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4" href="<?= home_url('/co-author-articles');?>">
											<p class="text-sm">
												<span class="text-black dark:text-white"><?= get_the_title();?></span>
											</p>

											<p class="text-xs"><?php echo get_the_date();?></p>
										</a>
									</li>
								<?php
										}
										wp_reset_postdata(); // Restore global post data
									} else {
										// No posts found
									}
								?>
								
							</ul>
						</div>
						<!-- Dropdown End -->
					</div>

					<?php
				}
				?>
				
			</div>
		</div>

	</div>
</header>

<div class="side_menu_wrap">
	<div class="side_menu">
		<div class="side_menu_header">
			<a href="#!" class="close_sidebar close_sidebar_click">
				<svg width="32px" height="32px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g stroke="#ffffff" stroke-linecap="round" stroke-width="2"> <path d="M6 18L18 6"></path> <path d="M18 18L6 6"></path> </g> </g></svg>
			</a>
			<div class="logo_wrap">
				<a href="<?php echo home_url('/');?>" class="logo_wrap">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
						echo '<img src="'.$logo_url.'" alt="Logo" />';
					?>
				</a>
			</div>
			<ul class="social_media_wrap">
				<li><a href=""></a></li>
			</ul>
		</div>

		<div class="side_menu_body">
			<ul class="menu_page">
				<li><a href="#">Home</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Founders</a></li>
			</ul>
			<h2 class="heading_main_4">News Categories</h2>
			<ul class="menu_cat">
				<?php 
					$categories = get_categories();
					foreach ($categories as $category) {
						?>
							<li><a href="<?= $category->slug;?>"><?= $category->name;?></a></li>
						<?php
					}
				?>
			</ul>
		</div>
	</div>
</div>
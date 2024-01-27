<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<footer class="bg-black pt-20 mt-40" id="footer_wrapper">
	<div class="container mx-auto px-5">

		<div class="mt_225 mb-20 max-w-6xl mx-auto flex article_card article_card_img_left bg_color4 rounded-lg p-8 gap-4 mb-20">
            <div class="flex-1">
                <div class="pb-4">
                    <span class="heading_xsm text-white">Subscribe Now</span>
                    <h2 class="heading_main text-4xl text-white py-6">
                        Customize Your Author Profile. 
                        <br>
                        Contribute Articles.
                        <br>
                        Earn Badges
                    </h2>
                    <a href="#!" class="custom_btn bg-white text_color3 w-48">Subscribe Now</a>
                </div>
            </div>

            <div>
                <img class="rounded-lg h-64 w-96 object-cover object-top" src="https://i0.wp.com/medicineunlocked.org/wp-content/uploads/2023/11/a8508256-0218-4685-9ff2-4c04a9fe461d.webp?resize=370%2C250&ssl=1" alt="image" />
            </div>
        </div>

		<div class="flex justify-between">
			
			<div class="flex-1 mr-20">
				<!-- logo -->
				<a href="<?php echo home_url('/');?>" class="logo_wrap">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
						echo '<img class="w-36" src="'.$logo_url.'" alt="Logo" />';
					?>
				</a>
				<p class="text-white mt-5">
					The PULSE of medical news. Subscribe and contribute today!
				</p>
			</div>

			<div class="flex-1">
				<h4 class="text-xl font-medium text-white mb-2">About Us</h4>
				<ul>
					<li><a href="#!" class="text-slate-400 mt-2 block">Privacy Policy</a></li>
					<li><a href="#!" class="text-slate-400 mt-2 block">Terms Condition</a></li>
				</ul>
			</div>

			<div class="flex-1">
				<h4 class="text-xl font-medium text-white mb-2">Map</h4>
				<ul>
					<li><a href="#!" class="text-slate-400 mt-2 block">Privacy Policy</a></li>
					<li><a href="#!" class="text-slate-400 mt-2 block">Terms Condition</a></li>
				</ul>
			</div>
			
			<div class="flex-1">
				<h4 class="text-xl font-medium text-white mb-2">Other</h4>
				<ul>
					<li><a href="#!" class="text-slate-400 mt-2 block">Privacy Policy</a></li>
					<li><a href="#!" class="text-slate-400 mt-2 block">Terms Condition</a></li>
				</ul>
			</div>

		</div>

		<hr class="border-slate-100 opacity-30 my-14">

		<p class="text-center pb-8">© Copyright Medicine Unlocked - Designed and Developed by The Publicity Hub LLC</p>

	</div>
</footer>
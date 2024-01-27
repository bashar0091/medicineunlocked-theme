<?php 

session_start();

if( !isset($_GET['type']) ) {
    wp_redirect(home_url('/subscription'));
    exit;
}

$errors = '';
if( isset($_POST['subscribe_btn']) ) {

    $_SESSION['subscription_form'] = $_POST;

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the email is already registered
    $user_id = email_exists($email);

    if ($user_id) {
        $errors = 'Email is already registered.';
    } else if (strlen($password) < 8 || !preg_match('/[A-Za-z]/', $password) || !preg_match('/\d/', $password)) {
        $errors = 'Password must be 8 characters long and include both letters and numbers.';
    } else if( $password !== $confirm_password ) {
        $errors = 'Password Doesn\'t Match';
    } else {

        $payment_id = !empty(get_theme_mod('form_payment_id')) ? get_theme_mod('form_payment_id') : '';

        // Check if WooCommerce is active
        if (class_exists('WooCommerce')) {
            global $woocommerce;

            if (!$woocommerce) {
                $woocommerce = WC();
            }

            $woocommerce->cart->add_to_cart($payment_id);
            $checkout_url = wc_get_checkout_url();
            wp_redirect($checkout_url);
            exit;
        }

    }
}

$first_name = isset($_SESSION['subscription_form']['first_name']) ? $_SESSION['subscription_form']['first_name'] : '';
$last_name = isset($_SESSION['subscription_form']['last_name']) ? $_SESSION['subscription_form']['last_name'] : '';
$email = isset($_SESSION['subscription_form']['email']) ? $_SESSION['subscription_form']['email'] : '';

/* Template Name: Subscription Form */ 

get_header();
?>

<section class="bg_color1 py-20">
    <div class="container mx-auto px-5">

        <div class="max-w-xl mx-auto rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                <h3 class="font-medium text-black dark:text-white">
                    Subcription Form
                </h3>
            </div>
            <form action="#" id="subscription_form" method="post">
                <div class="p-6.5">
                    <div class="mb-4.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            First Name
                        </label>
                        <input
                            type="text"
                            placeholder="Enter your first name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                            name="first_name"
                            value="<?= $first_name;?>"
                        />
                    </div>

                    <div class="mb-4.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Last Name
                        </label>
                        <input
                            type="text"
                            placeholder="Enter your last name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                            name="last_name"
                            value="<?= $last_name;?>"
                        />
                    </div>

                    <div class="mb-4.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Email
                        </label>
                        <input
                            type="email"
                            placeholder="Enter your email address"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                            name="email"
                            value="<?= $email;?>"
                        />
                    </div>

                    <div class="mb-4.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Password
                        </label>
                        <input
                            type="password"
                            placeholder="Enter password"
                            autocomplete="password"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                            name="password"
                            id="password"
                        />
                    </div>

                    <div class="mb-5.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Re-type Password
                        </label>
                        <input
                            type="password"
                            placeholder="Re-enter password"
                            autocomplete="re-enter-password"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                            name="confirm_password"
                            id="confirm_password"
                        />
                    </div>

                    <?= isset($errors) ? '<p class="text-rose-600">'.$errors.'</p>' : '';?>

                    <button type="submit" name="subscribe_btn" class="mt-5 flex w-full justify-center rounded bg_color4 p-3 font-medium text-gray hover:bg-opacity-90">
                        Subscribe Now
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>


<?php
get_footer();
<?php 

/* Template Name: Checkout */ 

get_header();

?>

<style>
    thead,
    .woocommerce-billing-fields,
    .woocommerce-shipping-fields,
    .woocommerce-additional-fields,
    #order_review_heading,
    .woocommerce-form-coupon-toggle,
    .woocommerce-notices-wrapper {
        display: none !important;
    }
    .product-name,
    .product-total {
        border: none !important;
    }
    .woocommerce {
        max-width: 600px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 1px 1px 10px #e8e8e8;
    }
    #place_order {
        background: var(--color_1);
        font-size: 0 !important;
    }
    #place_order::after {
        content: "Pay Now";
        padding: 20px !important;
        font-size: 14px;
        line-height: 40px;
    }
    .woocommerce-checkout-payment {
        background: #fff !important;
    }
</style>

<section class="py-20">
    <div class="container mx-auto px-5">

        <?php echo do_shortcode('[woocommerce_checkout]');?>

    </div>
</section>

<?php
get_footer();
?>
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Recent Reviews Widget
 *
 * @author   Le Manh Linh
 * 
 */
class iHosting_WC_Widget_Recent_Reviews extends WC_Widget {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->widget_cssclass    = 'woocommerce widget_recent_reviews';
		$this->widget_description = __( 'Display a list of your most recent reviews on your site.', 'woocommerce' );
		$this->widget_id          = 'ihosting_woocommerce_recent_reviews';
		$this->widget_name        = __( 'Lucky Shop - WooCommerce Recent Reviews', 'woocommerce' );
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => __( 'iHosting Recent Reviews', 'woocommerce' ),
				'label' => __( 'Title', 'woocommerce' )
			),
			'number' => array(
				'type'  => 'number',
				'step'  => 1,
				'min'   => 1,
				'max'   => '',
				'std'   => 10,
				'label' => __( 'Number of reviews to show', 'woocommerce' )
			)
		);

		parent::__construct();
	}

	/**
	 * widget function.
	 *
	 * @see WP_Widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	 public function widget( $args, $instance ) {
		global $comments, $comment;

		if ( $this->get_cached_widget( $args ) ) {
			return;
		}

		ob_start();

		$number   = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];
		$comments = get_comments( array( 'number' => $number, 'status' => 'approve', 'post_status' => 'publish', 'post_type' => 'product' ) );

		if ( $comments ) {
			$this->widget_start( $args, $instance );

			echo '<ul class="product_list_widget">';

			foreach ( (array) $comments as $comment ) {

				$_product = wc_get_product( $comment->comment_post_ID );

				$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );

				$rating_html = $_product->get_rating_html( $rating );
                
                $img_thumb = ihosting_core_resize_image( get_post_thumbnail_id( $_product->id ), null, 73, 84, true, true, false );

				echo '<li><a class="thumb-product product-comment-link" href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '">';
                
                echo '<img width="73" height="84" src="' . esc_url( $img_thumb['url'] ) . '" class="attachment-shop_thumbnail wp-post-image" alt="' . esc_attr( $_product->get_title() ) . '" />';
				//echo $_product->get_image();

				echo '</a>';
                
                echo '<div class="widget-cart-title-product">';
                
                echo '<a href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '" class="product-title">' . sanitize_text_field( $_product->get_title() ) . '</a>';
                
                echo $_product->get_price_html();
                
				echo $rating_html;

				printf( '<span class="reviewer">' . _x( 'by %1$s', 'by comment author', 'woocommerce' ) . '</span>', get_comment_author() );
                
                echo '</div><!-- /.widget-cart-title-product -->';

				echo '</li>';
			}

			echo '</ul>';

			$this->widget_end( $args );
		}

		$content = ob_get_clean();

		echo $content;

		$this->cache_widget( $args, $content );
	}
}

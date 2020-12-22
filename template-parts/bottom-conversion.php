<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mamori
 */

?>

<aside class="bottom-conversion" id="bottom-conversion">
	<a href="tel:<?php get_template_part('template-parts/phone-number') ?>" class="bottom-conversion-link -tel">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.21 22.3"><defs><style>.icon_phone{fill:#fff;}</style></defs><path id="Internet" class="icon_phone" d="M20.21,18.25a1.16,1.16,0,0,0-.49-.8L15.6,14.51h0a1.09,1.09,0,0,0-.59-.19,1.42,1.42,0,0,0-1,.27l-1.4,1.2-.15.06a.5.5,0,0,1-.15,0L12,15.79a3.39,3.39,0,0,1-.79-.4,10.63,10.63,0,0,1-1.24-1,13.93,13.93,0,0,1-1.65-1.76,15.1,15.1,0,0,1-1.44-1.93A9.9,9.9,0,0,1,6.2,9.35a4.09,4.09,0,0,1-.31-1.11.77.77,0,0,1,.05-.17A.56.56,0,0,1,6,7.93l1.2-1a1.49,1.49,0,0,0,.45-.69,1.1,1.1,0,0,0,0-.8L5.63.67A1.43,1.43,0,0,0,5.28.22.82.82,0,0,0,4.78,0,1,1,0,0,0,4,.26L.78,3a1.79,1.79,0,0,0-.43.5A3.13,3.13,0,0,0,0,4.55,5.72,5.72,0,0,0,0,5.67,12.88,12.88,0,0,0,.3,7.39a13.91,13.91,0,0,0,.75,2.27,20.59,20.59,0,0,0,1.44,2.76,23.8,23.8,0,0,0,2.34,3.2A23.68,23.68,0,0,0,8.29,19.1a19.72,19.72,0,0,0,3,2,10.12,10.12,0,0,0,2.28.93,8.74,8.74,0,0,0,1.8.28,2.11,2.11,0,0,0,.66-.14,1.82,1.82,0,0,0,.56-.34l3.25-2.7A1,1,0,0,0,20.21,18.25Z"/></svg>
		<span class="bottom-conversion-text -en">TEL</span>
	</a>
	<a href="<?php echo home_url('/contact/'); ?>" class="bottom-conversion-link -contact">
		<span class="bottom-conversion-text -en">CONTACT</span><span class="bottom-conversion-text -ja">(お問い合わせ)</span>
	</a>
	<a href="<?php echo home_url('/preparation/'); ?>" class="bottom-conversion-link -mypage">
		<span class="bottom-conversion-text -en">MY PAGE</span><span class="bottom-conversion-text -ja">(マイページ)</span>
	</a>
</aside>

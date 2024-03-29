<?php
// Don't load directly
defined( 'WPINC' ) or die;

/**
 * Event Submission Form
 * The wrapper template for the event submission form.
 *
 * Override this template in your own theme by creating a file at
 * [your-theme]/tribe-events/community/modules/description.php
 *
 * @link https://evnt.is/1ao4 Help article for Community Events & Tickets template files.
 *
 * @since    4.5
 * @since 4.8.2 Updated template link.
 *
 * @version 4.8.2
 *
 */

$events_label_singular = tribe_get_event_label_singular();
?>

<div class="events-community-post-content">
	<?php
	/**
	 * Allow developers to hook and add content to the beginning of this section
	 */
	do_action( 'tribe_events_community_section_before_description' );
	?>

	<?php 
	// tribe_community_events_field_label( 'post_content', sprintf( __( '%s Description:', 'tribe-events-community' ), $events_label_singular ) ); ?>
	<label for="post_content" class="">レッスン・イベント 詳細 (Lesson &amp; Event Description): <span class="req">(必須)</span></label>
	<p>ここに入力された内容が検索候補となります</p>
	<p>オプションとして、インストラクターなどの表記を英語、漢字、読み仮名（カタカナ、ひらがな）があると検索もれが少ないです</p>
	<p>例）直美(Naomi,なおみ、ナオミ)など</p>

	<?php tribe_community_events_form_content(); ?>

	<?php
	/**
	 * Allow developers to hook and add content to the end of this section
	 */
	do_action( 'tribe_events_community_section_after_description' );
	?>
</div>



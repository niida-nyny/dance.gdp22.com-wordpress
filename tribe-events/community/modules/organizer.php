<?php
// Don't load directly
defined( 'WPINC' ) or die;

/**
 * Event Submission Form Metabox For Organizers
 * This is used to add a metabox to the event submission form to allow for choosing or
 * creating an organizer for user submitted events.
 *
 * Override this template in your own theme by creating a file at
 * [your-theme]/tribe-events/community/modules/organizer.php
 *
 * @link https://evnt.is/1ao4 Help article for Community Events & Tickets template files.
 *
 * @since  2.1
 * @since 4.8.2 Updated template link.
 *
 * @version 4.8.2
 */

// If the user cannot create new organizers *and* if there are no organizers
// to select from then there's no point in generating this UI
if ( ! tribe( 'community.main' )->event_form()->should_show_linked_posts_module( Tribe__Events__Organizer::POSTTYPE ) ) {
	return;
}

if ( ! isset( $event ) ) {
	$event = Tribe__Events__Main::postIdHelper();
}
?>

<div id="event_tribe_organizer" class="tribe-section tribe-section-organizer">
	<div class="tribe-section-header">
		<h3 class="<?php echo tribe_community_events_field_has_error( 'organizer' ) ? 'error' : ''; ?>">
			<?php
			// printf( __( '%s Details', 'tribe-events-community' ), tribe_get_organizer_label_singular() );
			// echo tribe_community_required_field_marker( 'organizer' );
			?>
			主催者・インストラクター・DJなどについて 
		</h3>
		<p>下記の「Create or Find主催者」をクリックして主催者を選択してください。</p>
		<p>
		・「Create or Find主催者」：新規に<strong>主催者</strong>・<strong>インストラクター</strong>・<strong>DJ</strong>などを新規に登録、もしくは検索。フォームの空欄の中にテキストを入力してください。
		<br><span>※日本語入力できない場合はコピペしてください。</span><br>
		・「My主催者」：過去に登録したことのある<strong>主催者</strong>・<strong>インストラクター</strong>・<strong>DJ</strong>などから選択<br>
		・「主催者利用可能です：他の人が作成した<strong>主催者</strong>・<strong>インストラクター</strong>・<strong>DJ</strong>などを選択できます<br>
		</p>
		<p>
			複数<strong>主催者</strong>・<strong>インストラクター</strong>・<strong>DJ</strong>を追加する場合は
		</p>
	</div>

	<?php
	/**
	 * Allow developers to hook and add content to the beginning of this section
	 */
	do_action( 'tribe_events_community_section_before_organizer' );
	?>

	<table class="tribe-section-content">
		<colgroup>
			<col class="tribe-colgroup tribe-colgroup-label">
			<col class="tribe-colgroup tribe-colgroup-field">
		</colgroup>

		<?php
		tribe_community_events_organizer_select_menu( $event );

		// The organizer meta box will render everything within a <tbody>
		$organizer_meta_box = new Tribe__Events__Linked_Posts__Chooser_Meta_Box( $event, Tribe__Events__Organizer::POSTTYPE );
		$organizer_meta_box->render();
		?>
	</table>

	<?php
	/**
	 * Allow developers to hook and add content to the end of this section
	 */
	do_action( 'tribe_events_community_section_after_organizer' );
	?>
</div>
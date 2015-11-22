<?php
/**
 *	Class for the definition of new custom metaboxes
 *
 *	@version 	0.2
 */

class fw_meta_box {

	//Properties of a MetaBox
	private $id;
	private $title;
	private $post_type;
	private $context;
	private $priority;
	private $callback_args = array();

	private $fields = array();

	/**
	 *	Constructor: sets the properties for the metabox, registers the actions
	 *	for its creation and to save the fields
	 *
	 *	@since 	0.1
	 *	@var 	string 	$i 		id for the metabox
	 *	@var 	string 	$t 		title of the metabox
	 *	@var 	string 	$p 		post type related to the metabox
	 *	@var 	string 	$c 		context of the metabox
	 *	@var 	string 	$pr 	priority for the metabox
	 */
	public function __construct( $i, $t, $p = 'post', $c = 'normal', $pr = 'default', $cl = array() ) {
		$this->id = $i;
		$this->title = $t;
		$this->post_type = $p;
		$this->context = $c;
		$this->priority = $pr;
		$this->callback_args = $cl;

		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save_custom_meta' ) );
	}

	/**
	 *	Method that creates the metabox with the help of the core funciton add_meta_box()
	 */
	public function add_meta_box() {
		add_meta_box(
			$this->id,
			$this->title,
			array( $this, 'display_meta_box' ),
			$this->post_type,
			$this->context,
			$this->priority,
			$this->callback_args
			);
	}

	/**
	 *	Method for display the metabox and its fields
	 *
	 *	@since 	0.1
	 *	@var 	array 	$post 	array that contain the current post
	 */
	public function display_meta_box( $post, $metabox ) {
		wp_nonce_field( basename( __FILE__ ), 'custom_meta_box_nonce' ); ?>
		<?php if ($this->id == 'bubbles_content') { ?>
			<div class="wrap">
				<div class="wrap-settings-mbox">
					<div class="settings-container">
						<ul class="settings-btn-mbox">
							<li class="btn-mbox active">
								<a href="#home_metabox_top_header" id="top-btn">Big Titles</a>
							</li>
							<li class="btn-mbox">
								<a href="#home_metabox_bubbles" id="bubbles-btn">Bubbles</a>
							</li>
							<li class="btn-mbox">
								<a href="#home_metabox_settings" id="top-btn">Settings</a>
							</li>
						</ul>
						<div class="meta-width"> <?php
		} else if ($this->id == 'custom_section') { ?>
			<div class="wrap">
				<div class="wrap-settings-mbox">
					<div class="settings-container">
						<ul class="settings-btn-mbox">
							<li class="btn-mbox active">
								<a href="#fw_section_general_settings">General Settings</a>
							</li>
							<li class="btn-mbox">
								<a href="#fw_section_background_settings">Background Settings</a>
							</li>

						</ul>
						<div class="meta-width"> <?php
		} else if ($this->id == 'portfolio_item_content') { ?>
			<div class="wrap">
				<div class="wrap-settings-mbox">
					<div class="settings-container">
						<ul class="settings-btn-mbox">
							<li class="btn-mbox active">
								<a href="#fw_section_layout_settings">Layout Settings</a>
							</li>
							<li class="btn-mbox">
								<a href="#fw_section_type_content">Type of content</a>
							</li>

						</ul>
						<div class="meta-width"> <?php
		} else if ($this->id == 'contact_content') { ?>
			<div class="wrap">
				<div class="wrap-settings-mbox">
					<div class="settings-container">
						<ul class="settings-btn-mbox">
							<li class="btn-mbox active">
								<a href="#contact_info_section">Contact Information</a>
							</li>
							<li class="btn-mbox">
								<a href="#contact_social_link_section">Social Links</a>
							</li>
							<li class="btn-mbox">
								<a href="#contact_form_section">Contact Form</a>
							</li>
						</ul>
						<div id="settings-tabs" class="meta-width"> <?php

		} else { ?>
			<div class="wrap">
				<div class="wrap-settings-mbox">
					<div class="settings-container">

						<div id="settings-tabs" class="meta-width"> <?php

		}
		echo "<div class='group-field'>";
		foreach( $this->fields as $field ) {
			$meta = get_post_meta( $post->ID, $field[ 'id' ], true );
			if ( ($field[ 'type' ] != 'section') && ($field[ 'type' ] != 'end-section') && ($field[ 'type' ] != 'subsection') && ($field[ 'type' ] != 'end-subsection') )  { ?>
				<div class="inner-field">
					<?php if ($field['label'] ) { ?>
					<div class="field-description">
						<label for="<?php echo $field['id'] ?>"><?php echo $field['label'] ?></label>
						<small><?php echo $field['desc'] ?></small>
					</div>
					<?php } ?>
					<div class="metabox-content">
			<?php }
				switch( $field[ 'type' ] ) {
					case 'input-slider':
					?>
					<div class="text <?php echo $field['id']; ?>">
						<h4><?php echo $field['name']; ?></h4>
						<div class="slider-container">
							<div class="slider"></div>
						</div>
						<input name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" type="<?php echo $field['type']; ?>" value="<?php if ( $meta != "") { echo $meta; } else { echo $field['std']; } ?>" /><br/>

					</div>
					<script>
						jQuery(".slider").slider({
				          min: 1, //minimum value
				          max: 20, //maximum value
				          range: "min",
				          value: <?php if ( $meta != "") { echo $meta; } else { echo $field['std']; } ?>, //default value
				          slide: function(event, ui) {
				          	jQuery("#fw_section_number").val(ui.value);
				          }
				      });
						jQuery("#fw_section_number").val(jQuery(".slider").slider("value"));
						jQuery( "#fw_section_number" ).change(function() {
							jQuery( ".slider" ).slider( "value", jQuery(this).val() );
						});
					</script>
					<?php
					break;
					case 'select-menu' :?>
					<?php $menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
					global $menuArray;
					$menuArray = array( 'default' => 'select a sub menu');
					?><select name="<?php echo $field['id']; ?>"
					id="<?php echo $field['id']; ?>">

					<?php foreach ( $menus as $menu ) {
						echo '<option value="'.$menu->slug .'"' .selected($meta, $menu->slug, false). '>' .$menu->name. '</option>';
					} ?>
				</select>
				<?php break;
				case 'color':
				?>
				<div class="change-color">
					<input type="text" name="<?php echo $field['id']; ?>" value="<?php if ( $meta != "") { echo $meta; } else { echo $field['std']; } ?>" />
					<input type='button' class='pickcolor button-secondary' value='Select Color' />
					<div class='color-picker'></div>
				</div>
				<?php
				break;
				case 'checkbox'
				?>
				<div id="<?php echo $field['id']; ?>-container" class="check">
					<input type="checkbox" name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" class="on_off" <?php if( $meta == true ) { ?>checked="checked"<?php } ?> />
					<span></span>

				</div>
				<script type="text/javascript">
					jQuery( document ).ready( function( $ ) {
						$( '#<?php echo $field['id']; ?>-container span' ).click( function() {
							var input = $( this ).prev( 'input' );
							var checked = input.attr( 'checked' );
							if( checked ) {
								input.attr( 'checked', false ).attr( 'value', 0 ).removeClass('onoffchecked');
							} else {
								input.attr( 'checked', true ).attr( 'value', 1 ).addClass('onoffchecked');
							}
							input.change();
						} );
					} );
				</script>
				<?php break;
				case 'wysiwyg':
				wp_editor( $meta ? $meta : $field['std'], $field['id'], isset( $field['options'] ) ? $field['options'] : array() );
				break;
				case 'label': ?>
				<h4>The page link to add to the menu is: #<?php echo the_fw_title() ?> </h4>
				<?php break;
				case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.esc_attr($meta).'" style="width:50%" />  ';
				break;
				case 'select-taxonomy':?>
				<select name="<?php echo $field['id']; ?>"
					id="<?php echo $field['id']; ?>">
					<?php
					$terms = get_terms(''.$field['tax'].'', 'hide_empty=0&parent=0');
					$names = wp_get_object_terms($post->ID, ''.$field['tax'].'');
					?>
					<option class='theme-option' value=''
					<?php if (!count($names)) echo "selected";?>>None</option>
					<?php
					foreach ($terms as $theme) {
						echo '<option value="' . $theme->slug . '"' . selected($meta, $theme->slug, false ) . '>' . $theme->name . '</option>';

					}
					?>
				</select>

				<?php break;
				case 'select-size'
				?>
				<div class="size-container">
					<div class="spinner_container">
						<input class="number" type="text" name="<?php echo $field['id']; ?>" id="<?php echo $field['id'] ?>-size" value="<?php if ( $meta != "") { echo $meta; } else { echo $field['std']; } ?>" />
						<div class="input-controls">
							<a href="#" id="<?php echo $field['id']; ?>-up" class="inc">+</a>
							<a href="#" id="<?php echo $field['id']; ?>-down" class="dec">-</a>
						</div>
					</div>
				</div>

				<script type="text/javascript">
					jQuery(document).ready( function($) {
						var el = $('#<?php echo $field['id'] ?>-size');
						function change( amt ) {
							el.val( parseInt( el.val(), 10 ) + amt );
						}
						$('#<?php echo $field['id']; ?>-up').click( function(e) {
							change( 1 );
							e.preventDefault();
						} );
						$('#<?php echo $field['id']; ?>-down').click( function(e) {
							change( -1 );
							e.preventDefault();
						} );
					} );
				</script>
				<?php
				break;
				case 'image':
				$image = get_template_directory_uri().'/admin/img/image.jpg';
				echo '<span class="custom_default_image" style="display:none">'.$image.'</span>';
				if ($meta) { $image = wp_get_attachment_image_src($meta, 'medium'); $image = $image[0]; }
				echo    '<input name="'.$field['id'].'" type="hidden" class="custom_upload_image" value="'.$meta.'" />
				<img src="'.$image.'" class="custom_preview_image" alt="" width="150" /><br />
				<input class="custom_upload_image_button button" type="button" value="Choose Image" />
				<small> <a href="#" class="custom_clear_image_button">Remove Image</a></small>
				<br clear="all" />';
				break;
				case 'checkbox-show':
				?>
				<div id="<?php echo $field['id']; ?>-container" class="check">
					<input type="checkbox" name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" class="on_off" <?php if( $meta == true ) { ?>checked="checked"<?php } ?> />
					<span></span>
					<div class="clearfix"></div>
				</div>
				<script type="text/javascript">
					jQuery( document ).ready( function( $ ) {
						var input = $('#<?php echo $field['id']; ?>-container span' ).prev( 'input' );
						var checked = input.attr( 'checked' );
						$( '#<?php echo $field['id']; ?>-container span' ).click( function() {
							var input = $( '#<?php echo $field['id']; ?>-container span' ).prev( 'input' );
							var checked = input.attr( 'checked' );
							if( checked ) {
								input.attr( 'checked', false ).attr( 'value', 0 ).removeClass('onoffchecked');
								$('#<?php echo $field['el-to-show'] ?>').addClass('hide');
							} else {
								input.attr( 'checked', true ).attr( 'value', 1 ).addClass('onoffchecked');
								$('#<?php echo $field['el-to-show'] ?>').removeClass('hide');
							}
							input.change();
						} );
						if( checked ) {
							$('#<?php echo $field['el-to-show'] ?>').removeClass('hide');
						} else {
							$('#<?php echo $field['el-to-show'] ?>').addClass('hide');
						}
					} );
				</script>
				<?php
				break;
				case 'select':
				echo "<select name='" . $field[ 'id' ] . "' id='" . $field[ 'id' ] . "'>";

				foreach ( $field[ 'options' ] as $option ) {
					echo "<option", $meta == $option[ 'value' ] ? " selected='selected'" : "", " value='" . $option[ 'value' ] . "'>" . $option[ 'label' ] . "</option>";
				}
				echo "</select>";
				break;
				case 'slider':
          include('type/slider.php');
        break;
				case 'section' :
				?>
					<div class="tab-pane" id="<?php echo $field['id']; ?>">
						<div id="options-<?php echo $field['id']; ?>" class="options">
				<?php break;
				case 'end-section' :
					?>
						</div>
					</div>
				<?php break;
				case 'subsection' :
				?>
					<div class="sub-section <?php echo $field['class']; ?>" id="<?php echo $field['id']; ?>">
				<?php break;
				case 'end-subsection' : ?>
				</div>
				<?php break;
				default:
				break;
			}
			if ( ($field[ 'type' ] != 'section') && ($field[ 'type' ] != 'end-section') && ($field[ 'type' ] != 'subsection') && ($field[ 'type' ] != 'end-subsection') )  {
				echo "</div></div>";
			}
		}
		echo "</div></div></div></div></div>";
	}
	/**
	 *	Metohd to save the fields
	 *
	 *	@since 	0.1
	 *	@var 	int 	$post_id 	id of the current post
	 */
	public function save_custom_meta( $post_id ) {

		if( !isset( $_POST[ 'custom_meta_box_nonce' ] ) || !wp_verify_nonce( $_POST[ 'custom_meta_box_nonce' ], basename( __FILE__ ) ) ) {
			return $post_id;
		}
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}
		if( 'page' == $_POST[ 'post_type' ] ) {
			if( !current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
		}

		foreach ( $this->fields as $field ) {
			$old = get_post_meta( $post_id, $field[ 'id' ], true );
			if (!empty($_POST[ $field[ 'id' ] ]) ) {
				$new = $_POST[ $field[ 'id' ]];
				if($field['type'] == 'repeatable-field') {
					$new = array_values($new);
				}
				if( $new && $new != $old ) {
					update_post_meta( $post_id, $field[ 'id' ], $this->sanitize_custom_meta( $new, $field[ 'type' ] ) );
					//update_post_meta( $post_id, $field[ 'id' ], $new );
				} elseif ( '' == $new && $old ) {
					delete_post_meta( $post_id, $field[ 'id' ], $old );
				}
			} else {
				delete_post_meta( $post_id, $field[ 'id' ], $old );
			}
		}
	}

	/**
	 *	Method for the sanitization of the values of the fields before the save
	 *
	 *	@since 	0.1
	 *	@var 	$data 			the field to check
	 *	@var 	$type 	string 	the type of the field
	 */
	public function sanitize_custom_meta( $data, $type ) {
		$date_safe = null;
		switch( $type ) {
			case 'text':
			$data_safe = sanitize_text_field( $data );
			break;
			case 'link':
			$data_safe = esc_url( $data );
			break;
			case 'textarea':
			$date_safe = trim( $data );
			$date_safe = esc_textarea( strip_tags( $date_safe ) );
			break;
			/*case 'color':
				if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $data ) ) {
					$date_safe = $data;
				}
				break;*/
				case 'color-test':
				$data_safe = sanitize_text_field( $data );
				break;
				default:
				return $data;
			}
			return $data_safe;
		}

	/**
	 *	Method for adding the fields to the metabox
	 *
	 *	@since 	0.1
	 *	@var 	array 	$args 	array of arguments that define a field
	 */
	public function add_fields( $args ) {
		foreach( $args as $arg ) {
			array_push( $this->fields, $arg );
		}
	}

	/**
	 *	Getter method for the retrieve of the fields
	 *
	 *	@since 	0.1
	 */
	public function get_fields() {
		print_r( $this->fields );
	}
}
?>
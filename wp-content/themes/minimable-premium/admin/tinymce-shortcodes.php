<?php

new Shortcode_Tinymce_Element();
class Shortcode_Tinymce_Element
{
    public function __construct()
    {
        add_action('admin_init', array($this, 'pu_shortcode_button'));
        add_action('admin_footer', array($this, 'pu_get_shortcodes'));
    }

    /**
     * Create a shortcode button for tinymce
     *
     * @return [type] [description]
     */
    public function pu_shortcode_button()
    {
        if( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
        {
            add_filter( 'mce_external_plugins', array($this, 'pu_add_buttons_element' ));
            add_filter( 'mce_buttons', array($this, 'pu_register_buttons_element' ));
        }
    }

    /**
     * Add new Javascript to the plugin scrippt array
     *
     * @param  Array $plugin_array - Array of scripts
     *
     * @return Array
     */
    public function pu_add_buttons_element( $plugin_array )
    {
        $plugin_array['pushortcodes_element'] = get_template_directory_uri() . '/admin/js/shortcode-tinymce-button.js';

        return $plugin_array;
    }

    /**
     * Add new button to tinymce
     *
     * @param  Array $buttons - Array of buttons
     *
     * @return Array
     */
    public function pu_register_buttons_element( $buttons )
    {
        array_push( $buttons, 'separator', 'pushortcodes_element' );
        return $buttons;
    }


    /**
     * Add shortcode JS to the page
     *
     * @return HTML
     */
    public function pu_get_shortcodes()
    {
        global $shortcode_tags;

        echo '<script type="text/javascript">
        var shortcodes_button = new Array();';

        $count = 0;

        foreach($shortcode_tags as $tag => $code)
        {
            echo "shortcodes_button[{$count}] = '{$tag}';";
            $count++;
        }

        echo '</script>';
    }
}

new Shortcode_Tinymce_Layout();
class Shortcode_Tinymce_Layout
{
    public function __construct()
    {
        add_action('admin_init', array($this, 'pu_shortcode_button'));
        add_action('admin_footer', array($this, 'pu_get_shortcodes'));
    }

    /**
     * Create a shortcode button for tinymce
     *
     * @return [type] [description]
     */

    public function pu_shortcode_button()
    {
        if( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
        {
            add_filter( 'mce_external_plugins', array($this, 'pu_add_buttons_layout' ));
            add_filter( 'mce_buttons', array($this, 'pu_register_buttons_layout' ));
        }
    }

    /**
     * Add new Javascript to the plugin scrippt array
     *
     * @param  Array $plugin_array - Array of scripts
     *
     * @return Array
     */

        public function pu_add_buttons_layout( $plugin_array )
    {
        $plugin_array['pushortcodes_layout'] = get_template_directory_uri() . '/admin/js/shortcode-tinymce-button.js';

        return $plugin_array;
    }

    /**
     * Add new button to tinymce
     *
     * @param  Array $buttons - Array of buttons
     *
     * @return Array
     */

    public function pu_register_buttons_layout( $buttons )
    {
        array_push( $buttons, 'separator', 'pushortcodes_layout' );
        return $buttons;
    }


    /**
     * Add shortcode JS to the page
     *
     * @return HTML
     */

    public function pu_get_shortcodes()
    {
        global $shortcode_tags;

        echo '<script type="text/javascript">
        var shortcodes_button = new Array();';

        $count = 0;

        foreach($shortcode_tags as $tag => $code)
        {
            echo "shortcodes_button[{$count}] = '{$tag}';";
            $count++;
        }

        echo '</script>';
    }
}
new Shortcode_Tinymce_Demo();
class Shortcode_Tinymce_Demo
{
    public function __construct()
    {
        add_action('admin_init', array($this, 'pu_shortcode_button'));
        add_action('admin_footer', array($this, 'pu_get_shortcodes'));
    }

    /**
     * Create a shortcode button for tinymce
     *
     * @return [type] [description]
     */

    public function pu_shortcode_button()
    {
        if( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
        {
            add_filter( 'mce_external_plugins', array($this, 'pu_add_buttons_demo' ));
            add_filter( 'mce_buttons', array($this, 'pu_register_buttons_demo' ));
        }
    }

    /**
     * Add new Javascript to the plugin scrippt array
     *
     * @param  Array $plugin_array - Array of scripts
     *
     * @return Array
     */

        public function pu_add_buttons_demo( $plugin_array )
    {
        $plugin_array['pushortcodes_demo'] = get_template_directory_uri() . '/admin/js/shortcode-tinymce-button.js';

        return $plugin_array;
    }

    /**
     * Add new button to tinymce
     *
     * @param  Array $buttons - Array of buttons
     *
     * @return Array
     */

    public function pu_register_buttons_demo( $buttons )
    {
        array_push( $buttons, 'separator', 'pushortcodes_demo' );
        return $buttons;
    }


    /**
     * Add shortcode JS to the page
     *
     * @return HTML
     */

    public function pu_get_shortcodes()
    {
        global $shortcode_tags;

        echo '<script type="text/javascript">
        var shortcodes_button = new Array();';

        $count = 0;

        foreach($shortcode_tags as $tag => $code)
        {
            echo "shortcodes_button[{$count}] = '{$tag}';";
            $count++;
        }

        echo '</script>';
    }
}
?>
<?php

if ( ! defined('ABSPATH') ) {
    exit;
}

//display the plugin settings page in wp-admin
function mpwp_myplugin_display_settings_page() {

    //check the user
    if ( ! current_user_can('manage_options' ) ) return;

    ?>


    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php

            //output the fields
            settings_fields('myplugin_options');

            //output settings section
            do_settings_sections('myplugin');

            //submit
            submit_button();
            ?>
        </form>
    </div>
    <?php

}
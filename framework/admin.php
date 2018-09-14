<?php 

    // settings init

    add_action("admin_menu", function() {
        add_menu_page("ThemePlanet Framework", "ThemePlanet Framework", "manage_options", "themeplanet-plugin", "themeplanet_plugin_page");
    
        add_submenu_page( 'themeplanet-plugin', 'General', 'General', 'manage_options', 'themeplanet-plugin');
        add_submenu_page( 'themeplanet-plugin', 'Custom Assets', 'Custom Assets','manage_options', 'themeplanet-custom-plugin', 'themeplanet_customassets_page');

        add_submenu_page( 'themeplanet-plugin', 'Socials', 'Socials','manage_options', 'themeplanet-socials-plugin', 'themeplanet_socials_page');
    });

    add_action("admin_init", function() {
        register_setting("themeplanet-plugin-settings", "tp_site_name");
        register_setting("themeplanet-plugin-settings", "tp_favicon_url");
        register_setting("themeplanet-plugin-settings", "tp_keywords");
        register_setting("themeplanet-plugin-settings", "tp_author");
        register_setting("themeplanet-plugin-settings", "tp_googleanalitycs");
        register_setting("themeplanet-plugin-settings", "tp_customcss");
        register_setting("themeplanet-plugin-settings", "tp_customjs");
        register_setting("themeplanet-plugin-settings", "facebook");
        register_setting("themeplanet-plugin-settings", "twitter");
        register_setting("themeplanet-plugin-settings", "github");
        register_setting("themeplanet-plugin-settings", "instagram");
        register_setting("themeplanet-plugin-settings", "snapchat");
        register_setting("themeplanet-plugin-settings", "behance");
    });

    function themeplanet_plugin_page() {
    ?>

        <?php require_once("styles.php"); ?>

        <a href="https://themeplanet.pl" target="blank"><img src="https://iammatt.co/uploads/saturn.svg" class="tp-logo"></a>

        <div class="wrap-planet">
            <form action="options.php" method="post">
                <?php
                    settings_fields("themeplanet-plugin-settings");
                    do_settings_sections("themeplanet-plugin-settings");
                ?>

                <div class="form-group">
                    <label for="">Site name</label>
                    <input type="text" placeholder="Site name" name="tp_site_name" value="<?php echo esc_attr( get_option('tp_site_name') ); ?>" />
                </div>

                <div class="form-group">
                    <label for="">Favicon URL</label>
                    <input type="text" placeholder="URL" name="tp_favicon_url" value="<?php echo esc_attr( get_option('tp_favicon_url') ); ?>" />
                </div>

                <div class="form-group">
                    <label for="">Keywords</label>
                    <input type="text" placeholder="Keywords" name="tp_keywords" value="<?php echo esc_attr( get_option('tp_keywords') ); ?>" />
                </div>

                <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" placeholder="Author" name="tp_author" value="<?php echo esc_attr( get_option('tp_author') ); ?>" />
                </div>

                <div class="form-group">
                    <label for="">Google analitycs</label>
                    <textarea placeholder="Google analitycs" name="tp_googleanalitycs"><?php echo esc_attr( get_option('tp_googleanalitycs') ); ?></textarea>
                </div>

                <?php submit_button(); ?>
            </form>
        </div>
    <?php
    }

    function themeplanet_customassets_page() {
        ?>
            <?php require_once("styles.php"); ?>

            <a href="https://themeplanet.pl" target="blank"><img src="https://iammatt.co/uploads/saturn.svg" class="tp-logo"></a>

            <div class="wrap-planet">
                <form action="options.php" method="post">

                    <?php
                        settings_fields("themeplanet-plugin-settings");
                        do_settings_sections("themeplanet-plugin-settings");
                    ?>

                    <div class="form-group">
                        <label for="">Custom CSS</label>
                        <textarea placeholder="Custom CSS" name="tp_customcss"><?php echo esc_attr( get_option('tp_customcss') ); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Custom JS</label>
                        <textarea placeholder="Custom JS" name="tp_customjs"><?php echo esc_attr( get_option('tp_customjs') ); ?></textarea>
                    </div>

                    <?php submit_button(); ?>
                </form>
            </div>
        <?php
    }

    function themeplanet_socials_page() {
        ?>
            <?php require_once("styles.php"); ?>

            <a href="https://themeplanet.pl" target="blank"><img src="https://iammatt.co/uploads/saturn.svg" class="tp-logo"></a>

            <div class="wrap-planet">
                <form action="options.php" method="post">

                    <?php
                        settings_fields("themeplanet-plugin-settings");
                        do_settings_sections("themeplanet-plugin-settings");
                    ?>

                     <div class="form-group">
                        <label for="">Facebook</label>
                        <input type="text" placeholder="Facebook" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>" />
                    </div>

                    <div class="form-group">
                        <label for="">Twitter</label>
                        <input type="text" placeholder="Twitter" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>" />
                    </div>

                    <div class="form-group">
                        <label for="">Github</label>
                        <input type="text" placeholder="Github" name="github" value="<?php echo esc_attr( get_option('github') ); ?>" />
                    </div>

                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" placeholder="Instagram" name="instagram" value="<?php echo esc_attr( get_option('instagram') ); ?>" />
                    </div>

                    <div class="form-group">
                        <label for="">Snapchat</label>
                        <input type="text" placeholder="Snapchat" name="snapchat" value="<?php echo esc_attr( get_option('snapchat') ); ?>" />
                    </div>

                    <div class="form-group">
                        <label for="">Behance</label>
                        <input type="text" placeholder="Behance" name="behance" value="<?php echo esc_attr( get_option('behance') ); ?>" />
                    </div>

                    <?php submit_button(); ?>
                </form>
            </div>
        <?php
    }

?>
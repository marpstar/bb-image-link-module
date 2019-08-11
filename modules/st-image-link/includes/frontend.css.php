/**
 * This file should contain frontend styles that
 * will be applied to individual module instances.
 *
 * You have access to three variables in this file:
 *
 * $module An instance of your module class.
 * $id The module's ID.
 * $settings The module's settings.
 *
 * Example:
 */

.fl-node-<?php echo $id; ?> {
    color: <?php echo $settings->text_color_field; ?>;
}

.fl-node-<?php echo $id; ?> .fl-st-image-link {
    background-image: url(<?php echo $settings->photo_field_src; ?>);
    height: <?php echo $settings->height; ?>px;
}

.fl-node-<?php echo $id; ?> .fl-st-image-link-overlay {
    background-color: url(<?php echo $settings->photo_field_src; ?>);
}

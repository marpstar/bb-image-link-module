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

.fl-node-<?php echo $id; ?> .fl-st-image-link-content,
.fl-node-<?php echo $id; ?> .fl-st-image-link-content *,
.fl-node-<?php echo $id; ?> .fl-st-image-link-content:hover,
.fl-node-<?php echo $id; ?> .fl-st-image-link-content:hover * {
    color: #<?php echo $settings->text_color_field; ?>;
}

.fl-node-<?php echo $id; ?> .fl-st-image-link {
    background-image: url(<?php echo $settings->photo_field_src; ?>);
    height: <?php echo $settings->height; ?>px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-position: center center;
    background-size: cover;
    position: relative;
}

.fl-node-<?php echo $id; ?> .fl-st-image-link-overlay {
    background-color: #<?php echo $settings->overlay_color_field; ?>;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: <?php echo $settings->overlay_opacity; ?>;
}

.fl-node-<?php echo $id; ?> .fl-st-image-link-content {
    position: relative;
}

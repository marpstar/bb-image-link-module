<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example:
 */

?>
<a class="fl-st-image-link" href="<?php echo $settings->link_field; ?>">
    <div class="fl-st-image-link-overlay"></div>
    <div class="fl-st-image-link-content">
        <?php echo $settings->editor_field; ?>
    </div>
</a>
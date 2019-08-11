<?php

/**
 * @class STFLImageLinkModule
 */
class STFLImageLinkModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Image Link', 'fl-builder'),
            'description'   => __('An image link with text overlay.', 'fl-builder'),
            'category'		=> __('Custom Modules', 'fl-builder'),
            'dir'           => BB_ST_IMAGE_LINK_MODULE_DIR . 'modules/st-image-link/',
            'url'           => BB_ST_IMAGE_LINK_MODULE_URL . 'modules/st-image-link/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));

        /**
         * Use these methods to enqueue css and js already
         * registered or to register and enqueue your own.
         */
        // Already registered
        $this->add_css('font-awesome');
        $this->add_js('jquery-bxslider');
    }

    /**
     * Use this method to work with settings data before
     * it is saved. You must return the settings object.
     *
     * @method update
     * @param $settings {object}
     */
    public function update($settings)
    {
        return $settings;
    }

    /**
     * This method will be called by the builder
     * right before the module is deleted.
     *
     * @method delete
     */
    public function delete()
    {

    }

    /**
     * Add additional methods to this class for use in the
     * other module files such as preview.php, frontend.php
     * and frontend.css.php.
     *
     *
     * @method example_method
     */
    public function example_method()
    {

    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('STFLImageLinkModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Image Link', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'text_color_field'    => array(
                        'type'          => 'color',
                        'label'         => __('Color Picker', 'fl-builder'),
                        'default'       => 'FFFFFF',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fl-st-image-link',
                            'property'        => 'color'
                        )
                    ),
                    'overlay_color_field'    => array(
                        'type'          => 'color',
                        'label'         => __('Color Picker', 'fl-builder'),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fl-st-image-link-overlay',
                            'property'        => 'background-color'
                        )
                    ),
                    'photo_field'    => array(
                        'type'          => 'photo',
                        'label'         => __('Background Photo', 'fl-builder')
                    ),
                    'link_field'     => array(
                        'type'          => 'link',
                        'label'         => __('Link Field', 'fl-builder')
                    ),
                    'editor_field'   => array(
                        'type'          => 'editor',
                        'label'         => '',
                        'media_buttons' => false,
                        'rows'          => 10
                    ),
                    'height' => array(
                        'type'        => 'unit',
                        'label'       => 'Height',
                        'default'     => 200,
                        'description' => 'px',
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fl-st-image-link',
                            'property'        => 'height',
                            'unit'            => 'px'
                        )
                    ),
                )
            )
        )
    )
));
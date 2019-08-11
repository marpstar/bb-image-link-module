<?php

/**
 * @class FLExampleModule
 */
class FLExampleModule extends FLBuilderModule {

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

        // Register and enqueue your own
        $this->add_css('example-lib', $this->url . 'css/example-lib.css');
        $this->add_js('example-lib', $this->url . 'js/example-lib.js', array(), '', true);
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
        $settings->textarea_field .= ' - this text was appended in the update method.';

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
FLBuilder::register_module('FLExampleModule', array(
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
    ),
    'toggle'       => array( // Tab
        'title'         => __('Toggle', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Toggle Example', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'toggle_me'     => array(
                        'type'          => 'select',
                        'label'         => __('Toggle Me!', 'fl-builder'),
                        'default'       => 'option-1',
                        'options'       => array(
                            'option-1'      => __('Option 1', 'fl-builder'),
                            'option-2'      => __('Option 2', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'option-1'      => array(
                                'fields'        => array('toggle_text', 'toggle_text2'),
                                'sections'      => array('toggle_section')
                            ),
                            'option-2'      => array()
                        )
                    ),
                    'toggle_text'   => array(
                        'type'          => 'text',
                        'label'         => __('Hide Me!', 'fl-builder'),
                        'default'       => '',
                        'description'   => 'I get hidden when you toggle the select above.'
                    ),
                    'toggle_text2'   => array(
                        'type'          => 'text',
                        'label'         => __('Me Too!', 'fl-builder'),
                        'default'       => ''
                    )
                )
            ),
            'toggle_section' => array( // Section
                'title'         => __('Hide This Section!', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'some_text'     => array(
                        'type'          => 'text',
                        'label'         => __('Text', 'fl-builder'),
                        'default'       => ''
                    )
                )
            )
        )
    ),
    'multiple'      => array( // Tab
        'title'         => __('Multiple', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Multiple Example', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'test'          => array(
                        'type'          => 'text',
                        'label'         => __('Multiple Test', 'fl-builder'),
                        'multiple'      => true // Doesn't work with editor or photo fields
                    )
                )
            )
        )
    ),
    'include'       => array( // Tab
        'title'         => __('Include', 'fl-builder'), // Tab title
        'file'          => BB_ST_IMAGE_LINK_MODULE_DIR . 'st-image-link/includes/settings-example.php'
    )
));

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('example_settings_form', array(
    'title' => __('Example Form Settings', 'fl-builder'),
    'tabs'  => array(
        'general'      => array( // Tab
            'title'         => __('General', 'fl-builder'), // Tab title
            'sections'      => array( // Tab Sections
                'general'       => array( // Section
                    'title'         => '', // Section Title
                    'fields'        => array( // Section Fields
                        'example'       => array(
                            'type'          => 'text',
                            'label'         => __('Example', 'fl-builder'),
                            'default'       => 'Some example text'
                        )
                    )
                )
            )
        ),
        'another'       => array( // Tab
            'title'         => __('Another Tab', 'fl-builder'), // Tab title
            'sections'      => array( // Tab Sections
                'general'       => array( // Section
                    'title'         => '', // Section Title
                    'fields'        => array( // Section Fields
                        'another_example' => array(
                            'type'          => 'text',
                            'label'         => __('Another Example', 'fl-builder')
                        )
                    )
                )
            )
        )
    )
));
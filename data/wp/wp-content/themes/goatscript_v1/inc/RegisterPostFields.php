<?php

class RegisterPostFields
{
    public static function register () {
        if (! function_exists('acf_add_local_field_group')) {
            return;
        }

        acf_add_local_field_group([
            'key'                   => 'group_6ad3d50e80c51',
            'title'                 => 'More information',
            'fields'                => [
                [
                    'key'               => 'field_6ad3d50e27771',
                    'label'             => 'Intro',
                    'name'              => 'intro',
                    'aria-label'        => '',
                    'type'              => 'textarea',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => [
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ],
                    'default_value'     => '',
                    'allow_in_bindings' => 0,
                    'tabs'              => 'all',
                    'toolbar'           => 'full',
                    'media_upload'      => 1,
                    'delay'             => 0,
                ],
            ],
            'location'              => [
                [
                    [
                        'param'    => 'post_type',
                        'operator' => '==',
                        'value'    => 'post',
                    ],
                ],
            ],
            'menu_order'            => 0,
            'position'              => 'normal',
            'style'                 => 'default',
            'label_placement'       => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen'        => '',
            'active'                => true,
            'description'           => '',
            'show_in_rest'          => 0,
            'display_title'         => '',
            'allow_ai_access'       => false,
            'ai_description'        => '',
        ]);
    }
}


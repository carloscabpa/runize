<?php
/*
 * Add-on Name: Vinova Manage VC Addons
 * Add-on URI: http://vinovathemes.com
 */

if (!class_exists("Nov_Map")) {

    class Nov_Map {

        public $vcaddonsinstance, $context;

        function __construct() {
            $this->vcaddonsinstance = novmanagevcaddons::getInstance();
            $this->context = Context::getContext();

            JsComposer::add_shortcode("nov_map", array($this, "nov_map_shortcode"));
        }

        function nov_map_init() {
            $vc = vc_manager();
            $style = novmanagevcaddons::nov_getfile(novmanagevcaddons::get_module_dir('views/templates/front/Nov_Map'), 'Style');

            if (function_exists("vc_map")) {
                vc_map(
                    array(
                        "name" => $vc->l("Nov Google Map"),
                        "base" => "nov_map",
                        "class" => "vc_nov_map",
                        "icon" => "vc_nov_map",
                        "category" => $vc->l("Vinova Items"),
                        "description" => $vc->l("Add a google map."),
                        "params" => array(
                            array(
                                'type' => 'textfield',
                                'heading' => $vc->l('Title'),
                                'param_name' => 'title',
                                'admin_label' => true
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => $vc->l('Sub title'),
                                'param_name' => 'sub_title'
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => $vc->l('Description title'),
                                'param_name' => 'desc_title'
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => $vc->l('Marker latitude'),
                                'param_name' => 'latitude',
                                'description' => 'Please get value latitude with site <a target="_blank" href="https://www.mapcoordinates.net">https://www.mapcoordinates.net</a>',
                                'std' => '25.7742658',
                                'admin_label' => true
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => $vc->l('Marker Longitude'),
                                'param_name' => 'longitude',
                                'description' => 'Please get value longitude with site <a target="_blank" href="https://www.mapcoordinates.net">https://www.mapcoordinates.net</a>',
                                'std' => '-80.1936589',
                                'admin_label' => true
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => $vc->l('Height'),
                                'param_name' => 'height',
                                'description' => 'Example: 200px or 30%',
                                'std' => '200px'
                            ),
                            array(
                                'type' => 'dropdown',
                                'heading' => $vc->l('Zoom level'),
                                'param_name' => 'zoom',
                                'value' => array(
                                    '6' => '6',
                                    '7' => '7',
                                    '8' => '8',
                                    '9' => '9',
                                    '10' => '10',
                                    '11' => '11',
                                    '12' => '12',
                                    '13' => '13',
                                    '14' => '14'
                                ),
                                'std' => '11',
                                'admin_label' => true
                            ),
                            array(
                                'type' => 'dropdown',
                                'heading' => $vc->l('Display style'),
                                'param_name' => 'display_type',
                                'admin_label' => true,
                                'value' => $style,
                                'description' => $vc->l('Select type of map.')
                            ),
                            array(
                                'type' => 'textfield',
                                'heading' => $vc->l('Extra class name'),
                                'param_name' => 'el_class',
                                'description' => $vc->l('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.')
                            )
                        )
                    )
                );
            }
        }

        function nov_map_shortcode($atts, $content = null) {
            $output = $title = $desc_title = $longitude = $latitude = $zoom = $height = $el_class = $css_class = '';
            $vc = vc_manager();
            extract(JsComposer::shortcode_atts(array(
                'title' => '',
                'sub_title' => '',
                'desc_title' => '',
                'latitude' => '',
                'longitude' => '',
                'zoom' => '',
                'height' => '',
                'display_type' => '',
                'el_class' => ''
            ), $atts));

            $el_class = novmanagevcaddons::getExtraClass( $el_class );

            $context = Context::getContext();
            $id_map = 'nov-map'.rand(100,1000);
            $context->smarty->assign(
                array(
                    'title' => $title,
                    'sub_title' => $sub_title,
                    'desc_title' => $desc_title,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'zoom' => $zoom,
                    'height' => $height,
                    'el_class' => $el_class,
                    'id_map' => $id_map
                )
            );

            $output .= $context->smarty->fetch(JsComposer::getTPLPath('Nov_Map/'. $display_type .'.tpl', 'novmanagevcaddons'));

            if(isset($css) && !empty($css)){
                $css_out = '<style>'.$css.'</style>';
                $output .= $css_out;
            }

            return $output;
        }

    }
    // end class
    // new nov_contact;
}

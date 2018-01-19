<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/Grav/user/config/plugins/shoppingcart.yaml',
    'modified' => 1515873607,
    'data' => [
        'enabled' => true,
        'general' => [
            'currency' => 'USD',
            'default_country' => 'US',
            'product_taxes' => 'included',
            'load_js_globally' => true
        ],
        'shipping' => [
            'methods' => [
                0 => [
                    'name' => 'All countries',
                    'allowed_countries' => [
                        0 => '*'
                    ],
                    'price' => 0
                ]
            ]
        ],
        'urls' => [
            'checkout_url' => '/checkout',
            'save_order_url' => '/save_order',
            'order_url' => '/order'
        ],
        'ui' => [
            'currency_symbol_position' => 'before',
            'remove_cents_if_zero' => false,
            'use_own_css' => true,
            'image_size_product' => 400,
            'image_size_cart' => 50
        ],
        'cart' => [
            'allow_editing_quantity_from_cart' => true,
            'timeout' => 180,
            'add_shipping_and_taxes_cost_to_total' => true,
            'add_product_thumbnail' => true
        ],
        'countries' => [
            0 => [
                'name' => 'US',
                'allow' => true,
                'tax_percentage' => 10
            ],
            1 => [
                'name' => '*',
                'allow' => true,
                'tax_percentage' => 6
            ]
        ],
        'checkout_form' => [
            'name' => 'checkout',
            'fields' => [
                0 => [
                    'type' => 'display',
                    'ignore' => false,
                    'content' => 'PLUGIN_SHOPPINGCART.CHECKOUT_HEADLINE_YOUR_PERSONAL_DETAILS',
                    'markdown' => '1'
                ],
                1 => [
                    'type' => 'text',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'firstname',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_FIRST_NAME',
                    'ignore' => false,
                    'classes' => 'js__billing__firstname'
                ],
                2 => [
                    'type' => 'text',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'lastname',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_LAST_NAME',
                    'ignore' => false,
                    'classes' => 'js__billing__lastname'
                ],
                3 => [
                    'type' => 'email',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'email',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_EMAIL',
                    'ignore' => false,
                    'classes' => 'js__billing__email'
                ],
                4 => [
                    'type' => 'display',
                    'ignore' => false,
                    'content' => 'PLUGIN_SHOPPINGCART.CHECKOUT_HEADLINE_YOUR_ADDRESS',
                    'markdown' => '1'
                ],
                5 => [
                    'type' => 'text',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'address',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_ADDRESS',
                    'ignore' => false,
                    'classes' => 'js__billing__address'
                ],
                6 => [
                    'type' => 'text',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'telephone',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_PHONE',
                    'ignore' => false,
                    'classes' => 'js__billing__telephone'
                ],
                7 => [
                    'type' => 'text',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'city',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_CITY',
                    'ignore' => false,
                    'classes' => 'js__billing__city'
                ],
                8 => [
                    'type' => 'text',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'zip',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_ZIP',
                    'ignore' => false,
                    'classes' => 'js__billing__zip'
                ],
                9 => [
                    'type' => 'select',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'country',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_COUNTRY',
                    'ignore' => false,
                    'classes' => 'js__billing__country',
                    'id' => 'js__billing__country'
                ],
                10 => [
                    'type' => 'select',
                    'name' => 'state',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_STATE',
                    'ignore' => false,
                    'classes' => 'js__billing__state',
                    'id' => 'js__billing__state',
                    'outerclasses' => 'js__billing__state__control'
                ],
                11 => [
                    'type' => 'text',
                    'name' => 'province',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_PROVINCE',
                    'ignore' => false,
                    'classes' => 'js__billing__province',
                    'outerclasses' => 'js__billing__province__control'
                ],
                12 => [
                    'type' => 'display',
                    'ignore' => true,
                    'content' => 'PLUGIN_SHOPPINGCART.CHECKOUT_SHIPPING_METHOD',
                    'markdown' => '1'
                ],
                13 => [
                    'type' => 'select',
                    'name' => 'shipping_method',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_CHOOSE_SHIPPING_METHOD_DESC',
                    'ignore' => false,
                    'classes' => 'js__shipping__method',
                    'id' => 'js__shipping__method',
                    'outerclasses' => 'js__checkout-choose-shipping-block'
                ],
                14 => [
                    'type' => 'display',
                    'ignore' => true,
                    'outerclasses' => 'js__checkout-choose-payment-block-title',
                    'content' => 'PLUGIN_SHOPPINGCART.CHECKOUT_PAYMENT_METHOD',
                    'markdown' => '1'
                ],
                15 => [
                    'type' => 'select',
                    'name' => 'payment_method',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_CHOOSE_PAYMENT_METHOD_DESC',
                    'ignore' => true,
                    'classes' => 'js__payment__method',
                    'id' => 'js__payment__method',
                    'outerclasses' => 'js__checkout-choose-payment-block'
                ],
                16 => [
                    'type' => 'checkbox',
                    'validate' => [
                        'required' => 'true'
                    ],
                    'name' => 'agree_to_terms',
                    'label' => 'PLUGIN_SHOPPINGCART.TERMS_AND_CONDITIONS',
                    'ignore' => true
                ]
            ],
            'buttons' => [
                0 => [
                    'type' => 'submit',
                    'value' => 'PLUGIN_SHOPPINGCART.CHECKOUT_BUTTON_PAY'
                ]
            ]
        ],
        'load_js_globally' => false
    ]
];

<?php

require __DIR__ . '/vendor/autoload.php';

/*
 * Mock classes for avoid "Class [a-zA-Z0-9\\_]+ not found." phpstan error.
 * It cannot be ignored.
 */

class ModuleFrontController {
    /** @var string $id */
    public $id;
}

class Module {
    /** @var string $id */
    public $id;

    /** @var string $method_title */
    public $method_title;

    /** @var string $method_description */
    public $method_description;

    /** @var string $plugin_id */
    public $plugin_id;

    /** @var mixed[] $form_fields */
    public $form_fields;
}

class Context
{
    /** @var mixed */
    public $shop;
    /** @var mixed */
    public $cookie;
    /** @var mixed */
    public $cart;
    /** @var Language */
    public $language;

    public static function getContext(): self
    {
        return new self();
    }
}

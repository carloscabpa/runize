<?php

declare(strict_types=1);

/**
 * Overloaded classes.
 * They cannot be mocked.
 */
class ModuleFrontController
{
    /**
     * @var Context
     */
    public $context;
}

//class Context
//{
//    /** @var mixed */
//    public $shop;
//    /** @var mixed */
//    public $cookie;
//    /** @var mixed */
//    public $cart;
//    /** @var Language */
//    public $language;
//
//    public static function getContext(): self
//    {
//        return new self();
//    }
//}

class Shop
{
    /** @var Shop */
    public $shop;

    /** @var string */
    public $name = 'name';

    public function __construct(int $id = null)
    {
        if ($id) {
            $this->shop = new self();
        }
    }

    public function getBaseURL(bool $secure): string
    {
        return 'holded.com';
    }

    /**
     * @return mixed[]
     */
    public static function getShops(): array
    {
        return [1, 2, 3];
    }
}

class Language
{
    /** @var int */
    public $id;
}

class Currency
{
    /** @var int */
    public $id;
    /** @var string */
    public $iso_code = 'eur';
    /** @var float */
    public $conversion_rate = 1.00;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}

class Address
{
    /** @var int|null */
    public $id;

    public function __construct(?int $id = null)
    {
        $this->id = $id;
    }

    /** @var int */
    public $id_state = 1;
    /** @var string */
    public $dni = '66666666X';
    /** @var string */
    public $phone = '911911911';
    /** @var string */
    public $phone_mobile = '666666666';
    /** @var string */
    public $alias = 'alias';
    /** @var string */
    public $company = 'company';
    /** @var int */
    public $vat_number = 98765;
    /** @var string */
    public $other = 'other';
    /** @var string */
    public $address1 = 'address';
    /** @var string */
    public $city = 'city';
    /** @var string */
    public $postcode = '08080';
    /** @var string */
    public $country = 'country';
    /** @var int */
    public $id_country = 1;
    /** @var int */
    public $id_customer = 2;

    public static function initialize(): self
    {
        return new self();
    }
}

class State
{
    /** @var int|null */
    public $id;

    public function __construct(?int $id = null)
    {
        $this->id = $id;
    }

    /** @var string */
    public $name = 'name';
}

class Customer
{
    /** @var int|null */
    public $id;

    public function __construct(?int $id = null)
    {
        $this->id = $id;
    }

    /** @var string */
    public $firstname = 'firstname';
    /** @var string */
    public $lastname = 'lastname';
    /** @var string */
    public $email = 'test@email.com';
}

class Carrier
{
    /** @var int|null */
    public $id;

    /** @var string|null */
    public $lang;

    public function __construct(?int $id = null, ?string $lang = null)
    {
        $this->id = $id;
        $this->lang = $lang;
    }

    /** @var bool */
    public $is_free = true;
}

class StockAvailable
{
    /** @var int|null */
    public $id;

    /** @var int */
    public $quantity = 1;

    public function __construct(int $id = null)
    {
        $this->id = $id;
    }

    public static function getStockAvailableIdByProductId(int $id, ?int $id_product_attribute = null): int
    {
        return 1;
    }

    public static function setQuantity(int $id_product, ?int $id_product_attribute, ?int $quantity): bool
    {
        return true;
    }
}

class TaxCalculator
{
    /**
     * @var array<string, mixed>
     */
    public $taxes = [];
}

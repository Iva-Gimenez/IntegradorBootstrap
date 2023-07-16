<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Cart extends BaseConfig
{
    /*
    |--------------------------------------------------------------------------
    | Cart Driver
    |--------------------------------------------------------------------------
    |
    | The driver to use for the Cart library.
    | Supported: "session", "cookie", "custom"
    |
    */
    public $cartDriver = 'session';

    /*
    |--------------------------------------------------------------------------
    | Cookie Name
    |--------------------------------------------------------------------------
    |
    | If you're using the cookie cart driver, you can set its name here.
    |
    */
    public $cookieName = 'cart';

    /*
    |--------------------------------------------------------------------------
    | Cart Expiration
    |--------------------------------------------------------------------------
    |
    | The number of seconds to keep items in the cart before deleting them.
    | Setting it to 0 (zero) means never delete the cart items.
    |
    */
    public $cartExpiration = 0;

    /*
    |--------------------------------------------------------------------------
    | Custom Cart Handler
    |--------------------------------------------------------------------------
    |
    | If you have created your own cart handler, you can specify its class name
    | here. The class should implement the CodeIgniter\Cart\CartHandlerInterface.
    |
    */
    public $customHandler = null;

    /*
    |--------------------------------------------------------------------------
    | Cart Contents Identifier
    |--------------------------------------------------------------------------
    |
    | The identifier to use for the cart contents in session or cookies.
    |
    */
    public $sessionKey = 'cart_contents';
}

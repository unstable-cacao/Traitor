*************
TConstsClass
*************

.. code-block:: php

    trait TConstsClass 
    {
        use TStaticClass;
    }

The TConstsClass should be used on a class whose sole purpose is to define a collection of constants with a common domain.
It's a good practice to not provide any additional functionality to this class beyond consts definitions.


.. note::
    TConstsClass methods should not be used for input validation unless followed by additional validation rules.
    If a set of interchangeable values or binary flags is needed, TEnum should be used instead.

.. note::
    TConstsClass methods will return all constants in the class, regardless of their access level, 
    and ignore any other non-const definitions.

    .. code-block:: php

        class APIEndPoints 
        {
            use TConstsClass;
            
            
            public const GET_USERS     = '/users';
            public const GET_CLIENTS   = '/clients';
            
            public static $someEndpoint = '/help';
        }

    ``APIEndPoints::getConstsAsArray()`` will return

    .. code-block:: php
    
        ["GET_USERS" => "/users", "GET_CLIENTS" => "/clients"]



getConstsAsArray
-----------------

.. function:: public static getConstsAsArray(): array

    Return an associative array of all the consts in the class, using the name as the key and the value as the value.

*Example:*

.. code-block:: php

    class APIEndPoints 
    {
        use TConstsClass;
        
        
        public const GET_USERS     = '/users';
        public const GET_CLIENTS   = '/clients';
        
        public const DEPRECATED_ENDPOINTS = [
            self::GET_CLIENTS
        ];
    }

``APIEndPoints::getConstsAsArray()`` will return

.. code-block:: php

    ["GET_USERS" => "/users", "GET_CLIENTS" => "/clients", "DEPRECATED_ENDPOINTS" => ["/clients"]]



getConstNames
-----------------

.. function:: public static getConstNames(): array

    Return an array of the names of all the consts in the class.

*Example:*

.. code-block:: php

    class APIEndPoints 
    {
        use TConstsClass;
        
        
        const GET_USERS     = '/users';
        const GET_CLIENTS   = '/clients';
        
        const DEPRECATED_ENDPOINTS = [
            self::GET_CLIENTS
        ];
    }

``APIEndPoints::getConstNames()`` will return

.. code-block:: php

    ["GET_USERS", "GET_CLIENTS", "DEPRECATED_ENDPOINTS"]



getConstValues
-----------------

.. function:: public static getConstValues(): array

    Return an array of the values of all the consts in the class.

*Example:*

.. code-block:: php

    class APIEndPoints 
    {
        use TConstsClass;
        
        
        const GET_USERS     = '/users';
        const GET_CLIENTS   = '/clients';
        
        const DEPRECATED_ENDPOINTS = [
            self::GET_CLIENTS
        ];
    }

``APIEndPoints::getConstValues()`` will return

.. code-block:: php

    ["/users", "/clients", ["/clients"]]



getConstsCount
-----------------

.. function:: public static getConstsCount(): int

    Return the count of the consts in the class.

*Example:*

.. code-block:: php

    class APIEndPoints 
    {
        use TConstsClass;
        
        
        const GET_USERS     = '/users';
        const GET_CLIENTS   = '/clients';
        
        const DEPRECATED_ENDPOINTS = [
            self::GET_CLIENTS
        ];
    }

``APIEndPoints::getConstsCount()`` will return

.. code-block:: php

    3



isConstExists
-----------------

.. function:: public static public static isConstExists($name): bool

    Return true if a const with the name **$name** exists in the class, and false otherwise.

*Example:*

.. code-block:: php

    class APIEndPoints 
    {
        use TConstsClass;
        
        
        const GET_USERS     = '/users';
        const GET_CLIENTS   = '/clients';
        
        const DEPRECATED_ENDPOINTS = [
            self::GET_CLIENTS
        ];
    }

``APIEndPoints::isConstExists('GET_USERS')`` will return

.. code-block:: php

    true

``APIEndPoints::isConstExists('ENDPOINT')`` will return

.. code-block:: php

    false


isConstValueExists
---------------------

.. function:: public static isConstValueExists($value): bool

    Return true if a const with a value **$value** exists in the class, and false otherwise. A strict comparison is used to search for the value.

*Example:*

.. code-block:: php

    class APIConfig 
    {
        use TConstsClass;
        
        
        const TIMEOUT = 5;
    }

``APIEndPoints::isConstValueExists(5)`` will return

.. code-block:: php

    true

``APIEndPoints::isConstValueExists('5')`` will return

.. code-block:: php

    false
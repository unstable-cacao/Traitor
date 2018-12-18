=============
TConstsClass
=============

Introduction:
=============

This trait is for classes that store a collection of constants relevant to the same subject but that are not interchangeable,
e.g. class containing all the endpoints of an API.

.. note::
    TConstsClass methods should not be used for input validation unless followed by additional validation rules.
    If a set of interchangeable values or binary flags is needed, TEnum should be used instead.

.. note::
    TConstsClass methods include private constants.

.. note::
    TConstsClass uses TStaticClass.


References:
============

.. function:: getConstsAsArray(): array

Return an associative array of all the consts in the class, using the name as the key and the value as the value.

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

``APIEndPoints::getConstsAsArray()`` will return

.. code-block:: php

    ["GET_USERS" => "/users", "GET_CLIENTS" => "/clients", "DEPRECATED_ENDPOINTS" => ["/clients"]]



.. function:: getConstNames(): array

Return an array of the names of all the consts in the class.

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



.. function:: getConstValues(): array

Return an array of the values of all the consts in the class.

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



.. function:: getConstsCount(): int

Return the count of the consts in the class.

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



.. function:: isConstExists($name): bool

Return true if a const with the name $name exists in the class, and false otherwise.

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



.. function:: isConstValueExists($value): bool

Return true if a const with a value $value exists in the class, and false otherwise. The value is searched strictly.

.. code-block:: php

    class APIConfig 
    {
        use TConstsClass;
        
        
        const TIMEOUT = 5;
    }

``APIEndPoints::isConstValueExists('5')`` will return

.. code-block:: php

    false
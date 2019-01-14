.. _main_tenum_page:

*************
TEnum
*************

.. code-block:: php

    trait TEnum 
    {
        use TStaticClass;
    }

The TEnum should be used on a class whose sole purpose is to define a set of interchangeable values or flags.
For example a list of HTTP response codes:

.. code-block:: php

    class HTTPCodes 
    {
        use TEnum;
        
        
        public const OK         = 200;
        public const NOT_FOUND  = 404;
    }

It's a good practice to not provide any additional functionality to this class beyond consts definitions.


.. note::
    Const values in a TEnum class can be of string or int types only.

.. note::
    TEnum methods will return all constants in the class, regardless of their access level, 
    and ignore any other non-const definitions.

    .. code-block:: php

        class HTTPMethod 
        {
            use TEnum;
            
            
            private const GET   = 'get';
            public const POST   = 'post';
            
            public static $put = 'put';
        }

    ``HTTPMethod::getAll()`` will return

    .. code-block:: php

        ["get", "post"]



getAll
-----------------

.. function:: public static getAll(): array

    Return an array of all the values of the consts in the class.

*Example:*

.. code-block:: php

    class HTTPMethod 
    {
        use TEnum;
        
        
        public const GET   = 'get';
        public const POST  = 'post';
    }

``HTTPMethod::getAll()`` will return

.. code-block:: php

    ["get", "post"]



implodeAll
-----------------

.. function:: public static implodeAll(string $glue = ','): string

    Return a string of all the values of the consts in the class glued with the string in the parameter **$glue**.

*Example:*

.. code-block:: php

    class HTTPMethod 
    {
        use TEnum;
        
        
        public const GET   = 'get';
        public const POST  = 'post';
    }

``HTTPMethod::implodeAll()`` will return

.. code-block:: php

    "get,post"

``HTTPMethod::implodeAll('|')`` will return

.. code-block:: php

    "get|post"



isExists
-----------------

.. function:: public static isExists($value): bool

    Return true if a constant with the value **$value** exists in the class, and false otherwise.

*Example:*

.. code-block:: php

    class HTTPMethod 
    {
        use TEnum;
        
        
        public const GET   = 'get';
        public const POST  = 'post';
    }

``HTTPMethod::isExists('get')`` will return

.. code-block:: php

    true

``HTTPMethod::isExists('put')`` will return

.. code-block:: php

    false



getCount
-----------------

.. function:: public static getCount(): int

    Return the count of the consts in the class.

*Example:*

.. code-block:: php

    class HTTPMethod 
    {
        use TEnum;
        
        
        public const GET   = 'get';
        public const POST  = 'post';
    }

``HTTPMethod::getCount()`` will return

.. code-block:: php

    2
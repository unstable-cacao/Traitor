=============
TEnum
=============

Introduction
=============

This trait is for classes that store a collection of constants that are interchangeable or used as a bitmask (when value is integer),
e.g. class containing the possible HTTP methods.

.. note::
    Constants in a TEnum class can be of value string or int only.

.. note::
    TEnum methods include private constants.

.. note::
    TEnum uses TStaticClass.


References
=============

.. function:: getAll(): array

Return an array of all the values of the consts in the class.

.. code-block:: php

    class HTTPMethod 
    {
        use TEnum;
        
        
        const GET   = 'get';
        const POST  = 'post';
    }

``HTTPMethod::getAll()`` will return

.. code-block:: php

    ["get", "post"]



.. function:: implodeAll(string $glue = ','): string

Return a string of all the values of the consts in the class glued with the string in the parameter $glue.

.. code-block:: php

    class HTTPMethod 
    {
        use TEnum;
        
        
        const GET   = 'get';
        const POST  = 'post';
    }

``HTTPMethod::implodeAll()`` will return

.. code-block:: php

    "get,post"



.. function:: isExists($value): bool

Return true if a constant with the value $value exists in the class, and false otherwise.

.. code-block:: php

    class HTTPMethod 
    {
        use TEnum;
        
        
        const GET   = 'get';
        const POST  = 'post';
    }

``HTTPMethod::isExists('put')`` will return

.. code-block:: php

    false



.. function:: getCount(): int

Return the count of the consts in the class.

.. code-block:: php

    class HTTPMethod 
    {
        use TEnum;
        
        
        const GET   = 'get';
        const POST  = 'post';
    }

``HTTPMethod::getCount()`` will return

.. code-block:: php

    2
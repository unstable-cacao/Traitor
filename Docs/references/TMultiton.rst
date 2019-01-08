*************
TMultiton
*************

.. code-block:: php

    trait TMultiton 
    {
        use TStaticClass;
    }

The TMultiton trait is representing a multiton class that ensures a single instance per key.
A possible usage is for caching config files, every config.ini file having its own instance which loads the file only once.



initialize
-----------------

.. function:: protected static initialize(TMultiton $instance, $key)

    :param $instance: The newly created instance
    :param $key: The key of the newly created instance

    Initialize is called when a new instance is created. It is used to initialize the state of the object.



instance
-----------------

.. function:: public static instance($key)

    :param key: The identifying key of the instance

    Return the single instance of the class for the passed key that is created only on the first call of this function for a specific key.
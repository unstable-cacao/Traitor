*************
TStaticClass
*************

.. code-block:: php

    trait TStaticClass
    {
        private function __construct() {}
        private function __clone() {}
        private function __wakeup() {}
    }

The TStaticClass is for controlling the instance creation of the class.

.. note::
    It is still possible to create an instance of the class with Reflection.
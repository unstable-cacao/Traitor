*************
TSingleton
*************

.. code-block:: php

    trait TSingleton 
    {
        use TStaticClass;
        use TSingletonLike;
    }

The TSingleton trait represents a singleton class. It uses the *TStaticClass* trait to restrict access to the construction, 
clone and deserialization functions of the class and the *TSingletonLike* trait to have the behavior of accessing the single instance
of the class through *instance()* function.
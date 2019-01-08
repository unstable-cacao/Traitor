=============
TMultiton
=============

Introduction
==============

The TMultiton trait is representing a multiton class that ensures a single instance per key.
A possible usage is for caching config files, every config.ini file having its own instance to load it only once from the file.

.. note::
    TMultiton uses the TStaticClass trait.


References
=============

.. function:: protected initialize(TMultiton $instance, $key)

Initialize will be called when a new instance is created and can be used to initialize the state of the object.
The newly created instance is passed as the first parameter and the key of the instance as the second.


.. function:: instance($key)

Return the single instance of the class for the passed key that is created only on the first call of this function for a specific key.
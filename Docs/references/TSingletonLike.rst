===============
TSingletonLike
===============

Introduction:
==============

TSingletonLike trait is used for a class that needs to have a single, static instance of itself, 
without restricting the use of the construction, clone and deserialization functions.

// TODO: Add link to where Singleton usage compared to SingletonLike


References:
=============

.. function:: protected initialize($instance)

Initialize will be called when a new instance is created and can be used to initialize the state of the object.
The newly created instance is passed as the first and only parameter to this function.


.. function:: instance()

Returns the single instance of the class that is created only on the first call of this function.
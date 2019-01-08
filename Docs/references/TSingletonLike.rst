***************
TSingletonLike
***************

The TSingletonLike trait is used when a single instance behavior is needed, without restricting the instance creation.



initialize
-----------------

.. function:: protected static initialize($instance)

    :param $instance: The newly created instance

    Initialize will be called when a new instance is created and is used to initialize the state of the object.



instance
-----------------

.. function:: public static instance()

    Returns the single instance of the class that is created only on the first call of this function.
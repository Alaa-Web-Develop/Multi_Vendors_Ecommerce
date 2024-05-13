<?php
//facde with serv container:

class PersonFacade{
    //Magic method
    protected static $container='person';
    public static function __callStatic($name, $arguments)
    {
        //get object from serv container
        $sc = new ServContainer();
        $person = $sc->make(self::$container);
    }
}

//
//PersonFacade::name(1,2,3);
//ليس عندى name() method 
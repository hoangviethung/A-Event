<?php

namespace Faker\Provider\es_ES;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+34 9## ## ####',
        '+34 9## ######',
        '+34 9########',
        '+34 9##-##-####',
        '+34 9##-######',
        '9## ## ####',
        '9## ######',
        '9########',
        '9##-##-####',
        '9##-######',
<<<<<<< HEAD
=======
    );

    protected static $mobileFormats = array(
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
        '+34 6## ## ####',
        '+34 6## ######',
        '+34 6########',
        '+34 6##-##-####',
        '+34 6##-######',
        '6## ## ####',
        '6## ######',
        '6########',
        '6##-##-####',
        '6##-######',
    );
<<<<<<< HEAD
=======

    protected static $tollFreeFormats = array(
        '900 ### ###',
        '800 ### ###',
    );

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
}

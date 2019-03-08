<?php

MathLib\includeModule ('Math/AdditionalMath');

use MathLib\AdditionalMath;

class Encrypter
{
    public static function encode ($text, $key)
    {
        $enc = array ();

        foreach (str_split ($text) as $char)
            $enc[] = MathLib\AdditionalMath\pow (ord ($char), $key);

        return implode (' ', $enc);
    }

    public static function decode ($text, $key)
    {
        $dec = '';

        foreach (explode (' ', $text) as $char)
            $dec .= MathLib\AdditionalMath\root ($char, $key);

        return $dec;
    }
}

?>

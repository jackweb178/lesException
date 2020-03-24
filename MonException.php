<?php

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667289-les-exceptions#/id/r-1670534


function additionner($a,$b)
{
    if (!is_numeric($a) || !is_numeric($b))
    {   //on lance une exception "MonException"
        throw  new InvalidArgumentException("Les deux parametre doivent etre des nombre ");
    }
    return $a+$b;
}
    echo additionner(12,3) ,'<br/>';
    echo additionner('as',54),'<br/>';
    echo additionner(4,5);

